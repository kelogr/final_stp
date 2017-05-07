<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Dashboarduser extends Controller{
   		

   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Dashboarduser'));
   			$this->model=new \X\App\Models\mDashboarduser();
   			$this->view =new \X\App\Views\vDashboarduser($this->dataView,$this->dataTable);    
   		}


   		function home(){
              
              $lista=$this->model->getStoryUser(); //Obtenemos las historias en concreto de el usuario

              
              if($lista!=null)
              $this->addData($lista);
 

              $this->view->__construct($this->dataView,$this->dataTable);
              
              $this->view->show();
            
   		}

   }
