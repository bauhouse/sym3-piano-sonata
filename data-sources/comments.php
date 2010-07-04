<?php
	
	require_once EXTENSIONS . '/ds_sections/lib/class.datasource.php';
	
	Final Class DataSourceComments extends SectionsDataSource {

		public function __construct(){
			parent::__construct();

			$this->_about = (object)array(
				'name'			=> 'Comments',
				'author'		=> (object)array(
					'name'			=> 'Stephen Bau',
					'website'		=> 'http://home/sym3/piano-sonata',
					'email'			=> 'bauhouse@gmail.com'
				),
				'version'		=> '1.0',
				'release-date'	=> '2010-07-04T16:37:24+00:00'
			);
			
			$this->_parameters = (object)array(
				'root-element' => 'comments',
				'limit' => '999',
				'page' => '1',
				'section' => 'comments',
				'conditions' => array (
					),
				'filters' => array (
					  0 => 
					  array (
					    'type' => 'is',
					    'value' => '{$ds-article.system.id}',
					    'element-name' => 'article',
					  ),
					),
				'redirect-404-on-empty' => false,
				'append-pagination' => false,
				'append-sorting' => false,
				'sort-field' => 'system:id',
				'sort-order' => 'asc',
				'included-elements' => array (
					  0 => 'author: unformatted',
					  1 => 'email: unformatted',
					  2 => 'website: unformatted',
					  3 => 'date',
					  4 => 'comment: formatted',
					),
				'parameter-output' => array (
					),
				'dependencies' => array (
					  0 => 'article',
					),
			);
		}

		public function allowEditorToParse() {
			return true;
		}
	}

	return 'DataSourceComments';