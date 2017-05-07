<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;
   use X\Sys\Session;
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


   class Addstory extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Addstory'));
   			$this->model=new \X\App\Models\mAddstory();
   			$this->view =new \X\App\Views\vAddstory($this->dataView,$this->dataTable);    
   		}


   		function home(){
              
              /*$lista=$this->model->getStory();

              
              $this->addData($lista);*/
 

              $this->view->__construct($this->dataView,$this->dataTable);
              /*var_dump($this->dataTable);
              var_dump($this->dataView);
              die();*/
              $this->view->show();
            
   		}


      /**
      *
      * Funcion para añadir historias.
      * 
      * Recogemos de el formulario tanto el titulo como el texto que guardaremos en la base de datos y que guardaremos en
      * en el archivo
      *
      * Utilizamos la sesión para recuperar la id del usuario que hará la historia.
      */

      function add(){
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $usuario = Session::get('users')['idusers'];

        $rol = Session::get('users')['roles']; //Recogemos el rol del usuario logeado para enviar, despúes de realizar la
        //.. acción, a la página principal correcta
        
        $result = $this->model->addStoryBD($usuario, $titulo, $texto); // Método para insertar en la base de datos la historia
        $this->model->addStoryFile($usuario, $titulo, $texto); //Método para la creación del fichero

          if($result==1){
            
            if ($rol == 1) {
                header('Location:/stp/dashboard');
              }else{
                header('Location:/stp/dashboarduser');
              }
                  
          }else {
            if ($rol == 1) {
                header('Location:/stp/dashboard');
              }else{
                header('Location:/stp/dashboarduser');
              }
          }
      }

   }
