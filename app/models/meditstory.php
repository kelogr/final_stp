<?php

	namespace X\App\Models;

	use \X\Sys\Model;

	class mEditstory extends Model{
		public function __construct(){
			parent::__construct();
			
            }

            public function getStory(){
			$sql="SELECT * FROM stories";
			$this->query($sql);

			$res=$this->execute();

			if($res){
				$result=$this->resultset();
							
			}else {$result=null;}
			return $result;
			}

			 	/**
                *
                * Funcion para eliminar una historia
                * 
                * Obtenemos el id de la historia a eliminar
                *
                */

			public function delStory($num){
			
			$sql="DELETE FROM klopez_stp.stories WHERE stories.idstories =".$num.";";
          	
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
                * Funcion para editar una historia
                * 
                * Recogemos la sentencia preparada en el controlador que contiene los campos a modificar
                *
                */

			public function ediStory($sentencia){
			
			$sql="UPDATE stories SET idstories=".$sentencia;

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
