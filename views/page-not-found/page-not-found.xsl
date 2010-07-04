<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:import href="../utilities/master.xsl"/>
	<xsl:import href="../utilities/get-article.xsl"/>
	<xsl:import href="../utilities/get-notes.xsl"/>
	<xsl:import href="../utilities/get-comments.xsl"/>

	<xsl:template match="data">
		<div id="content" class="col span-9">
			<h2>404 Error</h2>
			<h3 class="script">Page Not Found</h3>
			<p>Head back to <a href="{$root}/">home</a> or <a href="{$root}/about/">contact</a> me.</p>
		</div>
	</xsl:template>

</xsl:stylesheet>
