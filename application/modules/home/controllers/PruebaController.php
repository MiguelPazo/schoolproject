<?php

class Home_PruebaController extends App_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
        $alumno = new Application_Model_AlumnoProccess();
        $this->view->entries = $alumno->getAll();
        
        $this->view->entries2 = $alumno->getOne(8);
    }
    
    public function signAction()
    {
        //aqui voy a probar save y update
    }


}

