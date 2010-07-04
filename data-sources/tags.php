<?php
	
	require_once EXTENSIONS . '/ds_sections/lib/class.datasource.php';
	
	Final Class DataSourceTags extends SectionsDataSource {

		public function __construct(){
			parent::__construct();

			$this->_about = (object)array(
				'name'			=> 'Tags',
				'author'		=> (object)array(
					'name'			=> 'Stephen Bau',
					'website'		=> 'http://home/sym3/piano-sonata',
					'email'			=> 'bauhouse@gmail.com'
				),
				'version'		=> '1.0',
				'release-date'	=> '2010-07-04T16:46:08+00:00'
			);
			
			$this->_parameters = (object)array(
				'root-element' => 'tags',
				'limit' => '999',
				'page' => '1',
				'section' => 'articles',
				'conditions' => array (
					),
				'filters' => array (
					  0 => 
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
					  0 => 'tags',
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

	return 'DataSourceTags';