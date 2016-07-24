<?php
/*	Project:	EQdkp-Plus
 *	Package:	div game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2016 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('div')) {
	class div extends game_generic {#
		protected static $apiLevel	= 20;
		public $version				= '0.1.0';
		public $author				= "Anykan";
		protected $this_game		= 'div';
		protected $types			= array('classes','roles');
		protected $classes			= array();
		
		
		
		protected $roles			= array();						
		protected $factions			= array();						
		protected $filters			= array();
		protected $realmlist		= array();
		protected $professions		= array();
		public $langs				= array('german');	

		protected $class_dependencies = array();
		public $default_roles		= array(
			1 => array(1,2,3),
		);
		protected $class_colors		= array(
			1	=> '#6ce31c',);

		protected $glang			= array();
		protected $lang_file		= array();
		protected $path				= '';
		public $lang				= false;

		public function __construct() {
			parent::__construct();
		}

		public function install($install=false){
			//config-values
			$info['config'] = array();
			return $info;
		}
		
		public function load_filters($langs){
			return array();
		}

		public function profilefields(){
			$this->load_type('taktiker', array($this->lang));
			$this->load_type('wache', array($this->lang));
			$fields = array(
				'taktiker'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'items',
					'lang'			=> 'taktik',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->taktiker[$this->lang],
					'sort'			=> 1,
				),
				'wache'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'items',
					'lang'			=> 'wache',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->wache[$this->lang],
					'sort'			=> 1,
				),
			);
			return $fields;
		}

		public function admin_settings() {
			// array with admin fields
		}

	}#class
}
?>