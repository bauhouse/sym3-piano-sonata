<?php
	
	require_once EXTENSIONS . '/ds_sections/lib/class.datasource.php';
	
	Final Class DataSourceArticle extends SectionsDataSource {

		public function __construct(){
			parent::__construct();

			$this->_about = (object)array(
				'name'			=> 'Article',
				'author'		=> (object)array(
					'name'			=> 'Stephen Bau',
					'website'		=> 'http://home/sym3/piano-sonata',
					'email'			=> 'bauhouse@gmail.com'
				),
				'version'		=> '1.0',
				'release-date'	=> '2010-07-04T16:32:33+00:00'
			);
			
			$this->_parameters = (object)array(
				'root-element' => 'article',
				'limit' => '1',
				'page' => '1',
				'section' => 'articles',
				'conditions' => array (
					  0 => 
					  array (
					    'parameter' => '$entry',
					    'logic' => 'empty',
					  ),
					),
				'filters' => array (
					  0 => 
					  array (
					    'type' => 'is',
					    'value' => '{$entry}',
					    'element-name' => 'title',
					  ),
					  1 => 
					  array (
					    'type' => 'is',
					    'value' => 'yes',
					    'element-name' => 'publish',
					  ),
					),
				'redirect-404-on-empty' => true,
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

	return 'DataSourceArticle';