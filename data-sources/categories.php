<?php
	
	require_once EXTENSIONS . '/ds_sections/lib/class.datasource.php';
	
	Final Class DataSourceCategories extends SectionsDataSource {

		public function __construct(){
			parent::__construct();

			$this->_about = (object)array(
				'name'			=> 'Categories',
				'author'		=> (object)array(
					'name'			=> 'Stephen Bau',
					'website'		=> 'http://home/sym3/piano-sonata',
					'email'			=> 'bauhouse@gmail.com'
				),
				'version'		=> '1.0',
				'release-date'	=> '2010-07-04T16:34:38+00:00'
			);
			
			$this->_parameters = (object)array(
				'root-element' => 'categories',
				'limit' => '20',
				'page' => '1',
				'section' => 'categories',
				'conditions' => array (
					),
				'filters' => array (
					  0 => 
					  array (
					    'type' => 'is',
					    'value' => '{$category}',
					    'element-name' => 'title',
					  ),
					),
				'redirect-404-on-empty' => false,
				'append-pagination' => false,
				'append-sorting' => false,
				'sort-field' => 'system:id',
				'sort-order' => 'asc',
				'included-elements' => array (
					  0 => 'title: unformatted',
					  1 => 'description: unformatted',
					),
				'parameter-output' => array (
					  0 => 'system:id',
					),
				'dependencies' => array (
					),
			);
		}

		public function allowEditorToParse() {
			return true;
		}
	}

	return 'DataSourceCategories';