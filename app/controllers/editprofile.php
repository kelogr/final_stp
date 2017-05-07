<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;
   use X\Sys\Session;

   class Editprofile extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Editprofile'));
   			$this->model=new \X\App\Models\mEditprofile();
   			$this->view =new \X\App\Views\vEditprofile($this->dataView,$this->dataTable);    
   		}


   		function home(){
        
              $this->view->__construct($this->dataView,$this->dataTable);

              $this->view->show();
            
   		}

      /**
      *
      * Funcion para editar nuestro perfil.
      * 
      * Recogemos de el formulario tanto el email nuevo, como el password, como el username modificado, para que         * la guardaremos en la base de datos 
      *
      * Utilizamos la sesión para recuperar la id del usuario para poder poner como condición al usuario logeado.
      */
      
      function editar(){
        $usuario = Session::get('users')['idusers'];
        $sentencia = 'email="'.$_POST['email'].'", password="'.$_POST['password'].'", usersname="'.$_POST['name'].'" WHERE idusers ='. $usuario.';';

        $result = $this->model->ediUser($sentencia);

          if($result==1){
            
            header('Location:/stp/');
                  
          }else {
            
            $this->ajax(array('msg'=>'No se ha podido actualizar'));
          
          }
      }


   }
