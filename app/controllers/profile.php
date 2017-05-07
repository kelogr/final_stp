<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;
   use X\Sys\Session;

   class Profile extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Profile'));
   			$this->model=new \X\App\Models\mProfile();
   			$this->view =new \X\App\Views\vProfile($this->dataView,$this->dataTable);    
   		}


   		function home(){
              
              $data=$this->model->getUser(); //Obtenemos los valores de la base de datos del usuario loggeado

              $this->addData($data);
              
              $this->view->__construct($this->dataView,$this->dataTable);
             
              $this->view->show();
            
   		}



   }
