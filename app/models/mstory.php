<?php

	namespace X\App\Models;

	use \X\Sys\Model;

	class mStory extends Model{
		public function __construct(){
			parent::__construct();
			
            }
            
            	/**
                *
                * Funcion para obtener la historia que llamamos y mostrarla
                *
                */

            public function getStory($user, $story){
			$sql="SELECT * FROM stories WHERE idstories = ".$story. " AND users = ".$user;
			
              
			$this->query($sql);

			$res=$this->execute();

			if($res){
				$result=$this->resultset();
							
			}else {$result=null;}
			return $result;
			}

				/**
                *
                * Funcion para obtener el path de la última historia que hemos creado antes de llamar a esta funcion
                * 
                * Devuelve el path obtenido por la sentencia, en caso de no obtener ninguno es por que no tiene ninguna   * historia creada ese usuario así que le asignamos la primera para poder crear el fichero
                *
                */

			public function lastPath($usuario){
				$sql="SELECT path FROM stories WHERE users= ".$usuario." ORDER BY path DESC LIMIT 1 ";
				var_dump($sql);
				$this->query($sql);
	                        
				$this->execute();

	            $result=$this->single();
	                  var_dump($result);   
				if($result){
	                return $result;							
				}else 
	            {
	                return 0001;          
	           	}
			}

				/**
                *
                * Funcion para insertar una valoracion en la base de datos 
                * 
                * Devuelve como resultado si se ha podido registrar la valoración o no
                *
                */

			public function valStory($value, $usuario, $historia){

			$sql="call sp_new_user($usuario, $historia, $value)";

			$this->query($sql);

			$this->execute();

			$res = $this->rowCount();

			if($res == 0){
				$result=$res;
							
			}else {$result=null;}
			return $result;
			}
 			
 			
	}
