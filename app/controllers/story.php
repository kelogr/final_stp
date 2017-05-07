<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;
   use X\Sys\Session;

   class Story extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Story'));
   			$this->model=new \X\App\Models\mStory();
   			$this->view =new \X\App\Views\vStory($this->dataView,$this->dataTable);    
   		}

      function home(){
          
                    /*$data=$this->model->getRoles();
                    $this->addData($data);*/
            //rebuilding with new data
                    $this->view->__construct($this->dataView,$this->dataTable);
                    $this->view->show();
            
      }

                /**
                *
                * Funcion para obtener la historia según indicamos en la url
                * 
                * Recogemos el parametro según su key y obtenemos toda su información para mostrarla en la página
                *
                */

   		function get(){

              $user = $this->params['user'];

              $story = $this->params['idstory'];

              $historia=$this->model->getStory($user, $story);
              
              $this->addData($historia);

              $this->view->__construct($this->dataView,$this->dataTable);
              
              $this->view->show();
            
   		}

                /**
                *
                * Funcion para valorar las historias
                * 
                * Recogemos el valor que el usuario le da a la historia, la id del usuario que la hace y la historia
                *
                */

      function valorar(){

              $value = $_POST['valoracion'];
              $usuario = Session::get('users')['idusers'];
              $historia = $_POST['historia'];

              $rol = Session::get('users')['roles']; //Guardamos el rol del usuario para gestionar el retorno tras la accion

              $val=$this->model->valStory($value, $usuario, $historia); //Funcion del método para gestionar la valoracion de las historias

            if($val==0){
              
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
