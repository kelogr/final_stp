<?php

	namespace X\App\Models;

	use \X\Sys\Model;

	class mAddstory extends Model{
		public function __construct(){
			parent::__construct();
			
            }

 				/**
                *
                * Funcion para añadir una historia llamando al proceso sp_new_story
                * 
                * Recogemos del controlador los datos necesarios para llamar al proceso
                *
                */

            public function addStoryBD($usuario, $titulo, $texto){
				
				$sql="call sp_new_story(:users, :sinopsis, :titulo);"; //Sentencia/proceso a llamar
				
				$this->query($sql); //Prepamos la sentencia

	                        $this->bind(":users", $usuario);
	                        $this->bind(":titulo", $titulo);
	                        $this->bind(":sinopsis", $texto);
	                        
				$this->execute(); //Ejecutamos la sentencia

	                        $result=$this->rowCount(); //Si se ejecuta con exito nos mostrará un 1 o true, si no se ha podido será un o o false
	                        
				if($result){
	                            return 1;							
				}else 
	                        {
	                            return -1;
	                            
	                        }
			}

			 	/**
                *
                * Funcion para añadir un fichero a la carpeta stories con el último patt¡h de ese usuario
                * 
                * Recogemos los datos del controlador
                *
                */

			public function addStoryFile($usuario, $titulo, $texto){
				$file_name = self::lastPath($usuario); //El nombre del archivo será el path que se le asigna en la BD
 				$file = fopen("stories/".$file_name['path'].".txt", "a+"); //Abrimos el archivo en modo escritura
 				
 				/*var_dump($file);
 				die;*/
 				fwrite($file, $titulo.PHP_EOL); //Escribimos en el fichero el titulo - PHP_EOL -> salto de linea
 				fwrite($file, $texto.PHP_EOL); //Escribimos en el fichero el texto
 				fclose($file); //Cerramos el fichero
			    
			}

			 /**
                *
                * Funcion para obtener el último path creado en la base de datos. Obtenemos el path que hemos creado un   * paso superior al añadirlo a la base de datos
                * 
                * Recogemos usuario para poder ponerlo en en la condicion de la sentencia
                *
                */

			public function lastPath($usuario){
				$sql="SELECT path FROM stories WHERE users= ".$usuario." ORDER BY path DESC LIMIT 1 ";
				var_dump($sql);
				$this->query($sql);
	                        
				$this->execute();

	            $result=$this->single();
	                  
				if($result){
	                return $result;							
				}else 
	            {
	                return 0001;          
	           	}
			}
}
