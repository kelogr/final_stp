<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;
   use X\Sys\Session;


   class Login extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Login'));
   			$this->model=new \X\App\Models\mLogin();
   			$this->view =new \X\App\Views\vLogin($this->dataView,$this->dataTable);    
   		}


   		function home(){
          
                    /*$data=$this->model->getRoles();
                    $this->addData($data);*/
            //rebuilding with new data
                    $this->view->__construct($this->dataView,$this->dataTable);
                    $this->view->show();
            
   		}
                //Ha aquesta funció fem la comprovació de l'email per veure si existeix o no.
                function valemail(){
                    $email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //Sanititzem l'email per evitar errors.
                    //var_dump($email);
                    
                    $res = $this->model->valemail($email); //Passem el contingut de la variable al métode valemail del model que es qui s'encarrega de realitzar tot aquest procés amb la base de dades.
                    
                    /*var_dump($res);
                    die();*/


                    if($res==1){
                        $this->ajax(array('msg'=>'Este email existe'));
                    }
                    else{
                        $this->ajax(array('msg'=>'Este email no existe'));
                    }
                }
                
                /**
                *
                * Funcion para hacer login
                * 
                * Recogemos el email y su contrasenya para comprovar que existe y coinciden en la base de datos
                *
                */

                function log(){
                    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                    $passwd = filter_input(INPUT_POST, 'passwd', FILTER_SANITIZE_STRING);
                    
                    $res = $this->model->login($email, $passwd); //Cridem al métode login del model per fer el login a la nostra pagina web.
                    
                    if($res!=-1){
                        $this->ajax(array('msg'=>'Correcto'));
                        
                        session_start(); //Iniciem sessió
                        Session::set('users', $res); //Gaurdem les dades de l'usuari per poder utilitzarla més tard
                        
                        
                        if(Session::get('users')['roles']==1) //Si el rol de el usuario es de administrador accedemos a la dashboard, si no a la de usuario
                        header('Location:../dashboard');
                        else
                        header('Location:../dashboarduser');
                    }
                    else{
                        $this->ajax(array('msg'=>'NO es correcto'));
                        header('Location:../login');
                    }
                }

                /**
                *
                * Funcion para cerrar la sesión y volver a registrarse/hacer login.
                *
                */

                function logout(){
                  
                    session_destroy();
                  header('Location:../');
                }
   }
