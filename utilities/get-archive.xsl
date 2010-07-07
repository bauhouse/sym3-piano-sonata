<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:key name="entries-by-date" match="entry" use="substring(date,1,7)" />

	<xsl:template match="archive">
		<div class="archives span-12 x">
			<div class="col span-4">
				<div class="col span-2">
					<h3>Entries <span class="amp">by</span> month</h3>
				</div>
				<div class="col span-2 last">
					<ul>
						<!-- xsl:apply-templates select="year/month"/ -->
						<xsl:for-each select="entry[count(. | key('entries-by-date', substring(date,1,7))[1]) = 1]">
							<xsl:apply-templates select="date" />
						</xsl:for-each>
					</ul>
				</div>
			</div>
			<div class="col span-4">
				<div class="col span-2">
					<h3>Entries <span class="amp">by</span> category</h3>
				</div>
				<div class="col span-2 last">
					<ul>
						<!-- xsl:for-each select="/data/categories/entry[@articles &gt; '0']">
							<li>
								<a href="{$current-url}category/{title/@handle}"><xsl:value-of select="title"/></a>
							</li>
						</xsl:for-each -->
						<xsl:apply-templates select="/data/categories/entry" />
					</ul>
				</div>
			</div>
			<div class="col span-4 last">
				<div class="col span-2">
					<h3>Entries <span class="amp">by</span> tag</h3>
				</div>
				<div class="col span-2 last">
					<ul>
						<xsl:for-each select="/data/tags/entry/tags/item[generate-id() = generate-id(key('tags',@handle)[1])]">
							<li><a href="{$current-url}tag/{@handle}"><xsl:value-of select="@handle"/></a></li>
						</xsl:for-each>
					</ul>
				</div>
			</div>
		</div>
	</xsl:template>

	<xsl:template match="date">
		<xsl:param name="date" select="." />
		<xsl:param name="year" select="substring($date,1,4)" />
		<xsl:param name="month" select="substring($date,6,2)" />
		<xsl:param name="day" select="substring($date,9,2)" />
		<li>
			<xsl:call-template name="format-date">
				<xsl:with-param name="date" select="."/>
				<xsl:with-param name="format" select="'M Y'"/>
			</xsl:call-template>
		</li>
		<xsl:apply-templates select="/data/archive/entry[substring(date,1,4) = $year and substring(date,6,2) = $month]" />
	</xsl:template>

	<xsl:template match="entry">
		<li class="title">
			<a href="{$root}/articles/{title/@handle}/">
				<xsl:value-of select="title"/>
			</a>
		</li>
	</xsl:template>

	<xsl:template match="/data/categories/entry">
		<xsl:param name="category-id" select="@id" />
		<xsl:if test="/data/archive/entry/categories/item/@id = $category-id">
			<li>
				<a href="{$current-url}category/{title/@handle}"><xsl:value-of select="title"/></a>
			</li>
		</xsl:if>
	</xsl:template>

	<xsl:template match="month">
		<li>
			<xsl:call-template name="format-date">
			<xsl:with-param name="date" select="concat(../@value, '-', @value, '-01')"/>
			<xsl:with-param name="format" select="'M y'"/>
			</xsl:call-template>
		</li>
		<xsl:apply-templates select="entry"/>
	</xsl:template>

	<xsl:template match="month/entry">
			<li class="title">
				<a href="{$root}/articles/{title/@handle}/">
					<xsl:value-of select="title"/>
				</a>
			</li>
	</xsl:template>

</xsl:stylesheet>