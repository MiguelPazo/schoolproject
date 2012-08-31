<?php

class Home_PruebaController extends App_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
//        $alumno = new Application_Model_AlumnoProccess();
//        $this->view->entries = $alumno->getAll();
//        
//        $this->view->entries2 = $alumno->getOne("2");
        $alumno = new Application_Model_Base_Alumno();
        $alumno->setDatosPersonalesCodPersonal("1");
        $alumno->setUsuarioCodUsuario(1);
        $alumno->setCorreo("miguel.ps19@gmail.com");
        $alumno->setEstado(1);
        $alumno->saveObject();
    }
    
    public function signAction()
    {
        //aqui voy a probar save y update
    }


}

