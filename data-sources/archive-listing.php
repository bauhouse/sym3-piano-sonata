<?php
	
	require_once EXTENSIONS . '/ds_sections/lib/class.datasource.php';
	
	Final Class DataSourceArchive_Listing extends SectionsDataSource {

		public function __construct(){
			parent::__construct();

			$this->_about = (object)array(
				'name'			=> 'Archive: Listing',
				'author'		=> (object)array(
					'name'			=> 'Stephen Bau',
					'website'		=> 'http://home/sym3/piano-sonata',
					'email'			=> 'bauhouse@gmail.com'
				),
				'version'		=> '1.0',
				'release-date'	=> '2010-07-05T14:05:56+00:00'
			);
			
			$this->_parameters = (object)array(
				'root-element' => 'archive-listing',
				'limit' => '20',
				'page' => '1',
				'section' => 'articles',
				'conditions' => array (
					),
				'filters' => array (
					  0 => 
					  array (
					    'type' => 'is',
					    'value' => '{$category}',
					    'element-name' => 'categories',
					  ),
					  1 => 
					  array (
					    'type' => 'is',
					    'value' => 'yes',
					    'element-name' => 'publish',
					  ),
					  2 => 
					  array (
					    'type' => 'is',
					    'value' => '{$tag}',
					    'element-name' => 'tags',
					  ),
					),
				'redirect-404-on-empty' => false,
				'append-pagination' => false,
				'append-sorting' => false,
				'sort-field' => 'system:id',
				'sort-order' => 'desc',
				'included-elements' => array (
					  0 => 'title: unformatted',
					  1 => 'body: formatted',
					  2 => 'publish',
					  3 => 'date',
					  4 => 'tags',
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

	return 'DataSourceArchive_Listing';