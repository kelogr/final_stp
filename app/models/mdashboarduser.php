<?php

	namespace X\App\Models;

	use \X\Sys\Model;
	use X\Sys\Session;

	class mDashboarduser extends Model{
		public function __construct(){
			parent::__construct();
			
            }

             	/**
                *
                * Funcion para recoger las historias del usuario en concreto que ha iniciado la sesión
                * 
                */

            public function getStoryUser(){
			$iduser =  Session::get('users')['idusers'];
			//var_dump($iduser);

			$sql="SELECT * FROM stories WHERE users = :idusers";
			
			$this->query($sql);
			$this->bind(":idusers",$iduser);

			$res=$this->execute();
			//var_dump($res);
			
			if($res){
				$result=$this->resultset();
							
			}else {$result=null;}
			return $result;
			}

			
 
	}
