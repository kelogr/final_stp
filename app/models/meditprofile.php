<?php

	namespace X\App\Models;

	use \X\Sys\Model;

	class mEditprofile extends Model{
		public function __construct(){
			parent::__construct();
			
            }

            	/**
                *
                * Funcion que gestiona la modificacion de datos de la base de datos de un perfil
                * 
                */

			public function ediUser($sentencia){
			
			$sql="UPDATE klopez_stp.users SET ".$sentencia; //Preparada en el controlador que contiene todos los campos a modificar
          	
          	$this->query($sql);

          	$this->execute();

          	$result=$this->rowCount();

          	if($result==1)
				return $result;
			else
				$result = -1;

			return $result;
			}
}
