<?php

	namespace X\Sys;

	class DB extends \PDO{
		static $instance;

		public function __construct(){
			$config=Registry::getInstance();      
            
			$strdbconf='dbconf';
			$dbconf=(array)$config->$strdbconf;
                     
			/*$dsn='mysql:host=localhost;dbname=klopez_storypub';
		 	$usr= 'klopez_root';
		 	$pwd='linuxlinux';*/

		 	$dsn=$dbconf['driver'].':host='.$dbconf['dbhost'].';dbname='.$dbconf['dbname'];
		 	$usr= $dbconf['dbuser'];
		 	$pwd=$dbconf['dbpass'];

			parent::__construct($dsn,$usr,$pwd);
		}

		static function singleton(){
			if(!(self::$instance instanceof self)){
				self::$instance=new self();
			}
			return self::$instance;
		}
	}