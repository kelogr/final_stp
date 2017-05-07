<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Edituser extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Edituser'));
   			$this->model=new \X\App\Models\mEdituser();
   			$this->view =new \X\App\Views\vEdituser($this->dataView,$this->dataTable);    
   		}


   		function home(){
              
              $lista=$this->model->getUsers();

              
              $this->addData($lista);
 

              $this->view->__construct($this->dataView,$this->dataTable);
              /*var_dump($this->dataTable);
              var_dump($this->dataView);
              die();*/
              $this->view->show();
            
   		}

      /**
      *
      * Funcion para eliminar usuarios.
      * 
      * Recogemos el id del usuario para la eliminación de la base de datos
      *
      */

      function eliminar(){
        $id = $_POST['eliminar'];
        

        $result = $this->model->delUser($id); //Funcion del metodo que gestiona la eliminación del usuario
        
          if($result==1){
            $this->ajax(array('msg'=>'Correcto'));
            //header('Location:/stp/edituser');
                  
          }else {$this->ajax(array('msg'=>'no'));/*header('Location:/stp/edituser');*/}
      }

      /**
      *
      * Funcion para editar historias.
      * 
      * Recogemos de el formulario todos los datos necesarios que utilizaremos en la base de datos
      *
      */

      function editar(){
        $sentencia = $_POST['idusers'];
        
        $result = $this->model->ediUser($sentencia); //Metodo del modelo que gestiona la edición del usuario en la BD
        
          if($result==1){
            $this->ajax(array('msg'=>'Se ha actualizado'));
            //header('Location:/stp/editstory');
                  
          }else {$this->ajax(array('msg'=>'No se ha podido actualizar'));
          //header('Location:/stp/editstory')
          }
      }


   }
