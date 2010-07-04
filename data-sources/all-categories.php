<?php
	
	require_once EXTENSIONS . '/ds_sections/lib/class.datasource.php';
	
	Final Class DataSourceAll_Categories extends SectionsDataSource {

		public function __construct(){
			parent::__construct();

			$this->_about = (object)array(
				'name'			=> 'All Categories',
				'author'		=> (object)array(
					'name'			=> 'Stephen Bau',
					'website'		=> 'http://home/sym3/piano-sonata',
					'email'			=> 'bauhouse@gmail.com'
				),
				'version'		=> '1.0',
				'release-date'	=> '2010-07-04T16:09:48+00:00'
			);
			
			$this->_parameters = (object)array(
				'root-element' => 'all-categories',
				'limit' => '99',
				'page' => '1',
				'section' => 'categories',
				'conditions' => array (
					),
				'filters' => array (
					),
				'redirect-404-on-empty' => false,
				'append-pagination' => false,
				'append-sorting' => false,
				'sort-field' => 'system:id',
				'sort-order' => 'desc',
				'included-elements' => array (
					  0 => 'title: unformatted',
					),
				'parameter-output' => array (
					),
				'dependencies' => array (
					),
			);
		}

		public function allowEditorToParse() {
			return true;
		}
	}

	return 'DataSourceAll_Categories';