<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;
      use X\Sys\Session;


   class Dashboard extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Dashboardadmin'));
   			$this->model=new \X\App\Models\mDashboard();
   			$this->view =new \X\App\Views\vDashboard($this->dataView,$this->dataTable);    
   		}


   		function home(){

              $lista=$this->model->getStory(); //Obtenemos las historias de todos los usuarios para que el administrador pueda verlos

              $this->addData($lista);

              $this->view->__construct($this->dataView,$this->dataTable);
              
              $this->view->show();
            
   		}
   }
