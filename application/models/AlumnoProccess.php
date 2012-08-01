<?php

class Application_Model_AlumnoProccess extends Application_Model_Alumno
{
    public function getOne($cod_alumno)
    {
        $resultado=  $this->fetchRow();
        getDbTable()->find($cod_alumno);
        if(0==count($resultado)){
            return;
        }
        $fila=$resultado->current();
        $oalumno=new Application_Model_Alumno();
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
            $nalumno=new Application_Model_Alumno();
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