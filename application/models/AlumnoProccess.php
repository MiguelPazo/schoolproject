<?php

class Application_Model_AlumnoProccess extends Application_Model_Alumno
{
    protected $_dbTable;
    
    public function getDbTable()
    {
        if(null===$this->_dbTable){
            $this->_dbTable='Application_Model_AlumnoTable';
        }
        return $this->_dbTable;
    }

    public function getOne($cod_alumno,Application_Model_AlumnoTable $oalumno)
    {
        $resultado=  $this->getDbTable()->find($cod_alumno);
        if(0==count($resultado)){
            return;
        }
        $fila=$resultado->current();
        $oalumno->setCod_alumno($fila->cod_alumno)
                ->setDatos_Personales_cod_personal($fila->Datos_Personales_cod_personal)
                ->setUsuario_cod_usuario($fila->Usuario_cod_usuario)
                ->setCorreo($fila->correo)
                ->setEstado($fila->estado);        
    }

    public function getAll(){
        $resultado=$this->getDbTable()->fetchAll();
        $oalumnos=array();
        foreach ($resultado as $fila) {
            $nalumno=new Application_Model_AlumnoTable();
            $nalumno->setCod_alumno($fila->cod_alumno)
                    ->setDatos_Personales_cod_personal($fila->Datos_Personales_cod_personal)
                    ->setUsuario_cod_usuario($fila->Usuario_cod_usuario)
                    ->setCorreo($fila->correo)
                    ->setEstado($fila->estado);
            $oalumnos[]=$nalumno;
        }
        return $oalumnos;
    }
}