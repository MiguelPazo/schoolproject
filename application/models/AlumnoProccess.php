<?php

class Application_Model_AlumnoProccess extends Application_Model_Alumno
{
    public function getAll(){
        $allData = $this->fetchAll();
        /*$allDataObject debe contener todos el array de $allData, pero cada fila como objeto Alumno*/
        $allDataObject = array() ;
    }
    
    public function getOne($id){
        $oneData = $this->fetchRow();
        /*$oneDataObject debe contener el registro de $oneData pero como un objeto Alumno*/
        $oneDataObject = array() ;
    }
}