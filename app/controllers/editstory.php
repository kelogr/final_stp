<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Editstory extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Editstory'));
   			$this->model=new \X\App\Models\mEditstory();
   			$this->view =new \X\App\Views\vEditstory($this->dataView,$this->dataTable);    
   		}


   		function home(){
              
              $lista=$this->model->getStory();

              
              $this->addData($lista);
 

              $this->view->__construct($this->dataView,$this->dataTable);
              /*var_dump($this->dataTable);
              var_dump($this->dataView);
              die();*/
              $this->view->show();
            
   		}

      /**
      *
      * Funcion para eliminar historias.
      * 
      * Recogemos de el formulario el id de la historia que vamos a borrar
      *
      */

      function eliminar(){
        $id = $_POST['eliminar'];
        
        $result = $this->model->delStory($id); //Funcion del modelo que gestiona la eliminación del usuario
        
          if($result==1){
            $this->ajax(array('msg'=>'Correcto'));
            header('Location:/stp/editstory');
                  
          }else {
            $this->ajax(array('msg'=>'no'));
            header('Location:/stp/editstory');
          }
      }

      /**
      *
      * Funcion para editar historias.
      * 
      * Recogemos de el formulario todos los datos necesarios para modificar la historia en la base de datos
      *
      */

      function editar(){
        $sentencia = $_POST['idstories'];
        
        //var_dump($sentencia);
        
        $result = $this->model->ediStory($sentencia); //Funcion del metodo que gestiona la actualización de la historia
        
          if($result==1){
            $this->ajax(array('msg'=>'Se ha actualizado'));
            //header('Location:/stp/editstory');
                  
          }else {$this->ajax(array('msg'=>'No se ha podido actualizar'));
          //header('Location:/stp/editstory')
          ;}
      }


   }
