<?php

	namespace X\App\Models;

	use \X\Sys\Model;

	class mEdituser extends Model{
		public function __construct(){
			parent::__construct();
			
            }

            public function getUsers(){
			$sql="SELECT * FROM users";
			$this->query($sql);

			$res=$this->execute();

			if($res){
				$result=$this->resultset();
							
			}else {$result=null;}
			return $result;
			}

				/**
                *
                * Funcion para eliminar un usuario
                * 
                * Obtenemos el id usuario a eliminar
                *
                */

			public function delUser($num){
			
			$sql="DELETE FROM `users` WHERE idusers =".$num.";";
          	
          	$this->query($sql);

          	$this->execute();

          	$result=$this->rowCount();
          	
          	if($result == 1)
				return $result;
			else
				$result = -1;

			return $result;
			}

				/**
                *
                * Funcion para editar los datos de un usuario
                * 
                * Recogemos la sentencia preparada en el controlador que contiene los campos a modificar
                *
                */

			public function ediUser($sentencia){
			
			$sql="UPDATE klopez_stp.users SET idusers=".$sentencia;
          	
          	$this->query($sql);

          	$this->execute();

          	$result=$this->rowCount();
          	
          	if($result == 1)
				return $result;
			else
				$result = -1;

			return $result;
			}
}
