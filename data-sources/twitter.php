<?php

	require_once EXTENSIONS . '/ds_dynamicxml/lib/class.datasource.php';

	Final Class DataSourceTwitter extends DynamicXMLDataSource {

			public function __construct(){
				parent::__construct();

				$this->_about = (object)array(
					'name'			=> 'Twitter',
					'author'		=> (object)array(
						'name'			=> 'Stephen Bau',
						'website'		=> 'http://home/sym3/piano-sonata',
						'email'			=> 'bauhouse@gmail.com'
					),
					'version'		=> '1.0',
					'release-date'	=> '2010-07-04T16:48:49+00:00'
				);

			$this->_parameters = (object)array(
				'timeout' => 6,
				'cache-lifetime' => 60,
				'automatically-discover-namespaces' => 'yes',
				'namespaces' => array (
					),
				'url' => 'http://twitter.com/statuses/user_timeline/bauhouse.xml?count=1',
				'xpath' => '*',
				'root-element' => 'twitter'
			);

		}

		public function allowEditorToParse(){
			return true;
		}

	}

	return 'DataSourceTwitter';