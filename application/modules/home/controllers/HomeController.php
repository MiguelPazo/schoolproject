<?php

class Home_HomeController extends App_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $alumno = new Application_Model_Alumno();
        $alumno->setDatosPersonalesCodPersonal(1);
        $alumno->setUsuarioCodUsuario(1);
        $alumno->setCorreo("hola");
        $alumno->setEstado(1);
        $alumno->saveObject();
//        exit;
    }


}

