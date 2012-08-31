<?php

class Application_Model_AlumnoProccess extends Application_Model_base_Alumno
{
    protected $_dbTable;
    
    public function setDbTable($dbTable)
    {
        if(is_string($dbTable)){
            $dbTable=new $dbTable();
        }
        if(!$dbTable instanceof Zend_Db_Table_Abstract){
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable=$dbTable;
        return $this;
    }
    
    public function getDbTable()
    {
        if(null===$this->_dbTable){
            $this->setDbTable('Application_Model_base_Alumno');
        }
        return $this->_dbTable;
    }

    public function getOne($cod_alumno)
    {
        $resultado=  $this->getDbTable()->find($cod_alumno);
        if(0==count($resultado)){
            return;
        }
        $fila=$resultado->current();
        $oalumno=new Application_Model_base_Alumno();
        $oalumno->setCodAlumno($fila->cod_alumno)
                ->setDatosPersonalesCodPersonal($fila->Datos_Personales_cod_personal)
                ->setUsuarioCodUsuario($fila->Usuario_cod_usuario)
                ->setCorreo($fila->correo)
                ->setEstado($fila->estado);
        return $oalumno;
    }

    public function getAll(){
        $resultado=$this->getDbTable()->fetchAll();
        $oalumnos=array();
        foreach ($resultado as $fila) {
            $nalumno=new Application_Model_base_Alumno();
            $nalumno->setCodAlumno($fila->cod_alumno)
                    ->setDatosPersonalesCodPersonal($fila->Datos_Personales_cod_personal)
                    ->setUsuarioCodUsuario($fila->Usuario_cod_usuario)
                    ->setCorreo($fila->correo)
                    ->setEstado($fila->estado);
            $oalumnos[]=$nalumno;
        }
        return $oalumnos;
    }
}