<?php

	require_once EXTENSIONS . '/ds_users/lib/class.datasource.php';

	Final Class DataSourceWebsite_Owner extends UsersDataSource {

		public function __construct(){
			parent::__construct();

			$this->_about = (object)array(
				'name'			=> 'Website Owner',
				'author'		=> (object)array(
					'name'			=> 'Stephen Bau',
					'website'		=> 'http://home/sym3/piano-sonata',
					'email'			=> 'bauhouse@gmail.com'
				),
				'version'		=> '1.0',
				'release-date'	=> '2010-07-04T16:49:35+00:00'
			);

			$this->_parameters = (object)array(
				'root-element' => 'website-owner',
				'filters' => array (
					  'id' => '1',
					),
				'included-elements' => array (
					  0 => 'username',
					  1 => 'name',
					),
			);

		}

		public function allowEditorToParse(){
			return true;
		}

	}

	return 'DataSourceWebsite_Owner';
