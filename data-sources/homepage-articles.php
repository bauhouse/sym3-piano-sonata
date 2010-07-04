<?php
	
	require_once EXTENSIONS . '/ds_sections/lib/class.datasource.php';
	
	Final Class DataSourceHomepage_Articles extends SectionsDataSource {

		public function __construct(){
			parent::__construct();

			$this->_about = (object)array(
				'name'			=> 'Homepage Articles',
				'author'		=> (object)array(
					'name'			=> 'Stephen Bau',
					'website'		=> 'http://home/sym3/piano-sonata',
					'email'			=> 'bauhouse@gmail.com'
				),
				'version'		=> '1.0',
				'release-date'	=> '2010-07-04T16:40:08+00:00'
			);
			
			$this->_parameters = (object)array(
				'root-element' => 'homepage-articles',
				'limit' => '3',
				'page' => '1',
				'section' => 'articles',
				'conditions' => array (
					),
				'filters' => array (
					  0 => 
					  array (
					    'type' => 'is',
					    'value' => 'yes',
					    'element-name' => 'publish',
					  ),
					),
				'redirect-404-on-empty' => false,
				'append-pagination' => false,
				'append-sorting' => false,
				'sort-field' => 'date',
				'sort-order' => 'desc',
				'included-elements' => array (
					  0 => 'title: unformatted',
					  1 => 'body: formatted',
					  2 => 'date',
					  3 => 'manage-images',
					  4 => 'article-images',
					  5 => 'categories',
					  6 => 'tags',
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

	return 'DataSourceHomepage_Articles';