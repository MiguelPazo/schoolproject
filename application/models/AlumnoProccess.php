<?php

class Application_Model_AlumnoProccess extends Application_Model_Base_Alumno
{

    public function getOne($codAlumno) {
        $db = $this->getAdapter();
        $where = $db->quoteInto('cod_alumno = ?', $codAlumno);

        $result = $this->fetchRow($where);

        if (count($result) == 0)
            return NULL;

        $oAlumno = new Application_Model_Base_Alumno();
        $oAlumno->setCodAlumno($result->cod_alumno);
        $oAlumno->setDatosPersonalesCodPersonal($result->Datos_Personales_cod_personal);
        $oAlumno->setUsuarioCodUsuario($result->Usuario_cod_usuario);
        $oAlumno->setCorreo($result->correo);
        $oAlumno->setEstado($result->estado);

        return $oAlumno;
    }

    public function getAll() {
        $result = $this->fetchAll();
        $oAlumnos = array();

        foreach ($result as $fila) {
            $nAlumno = new Application_Model_Base_Alumno();
            $nAlumno->setCodAlumno($fila->cod_alumno);
            $nAlumno->setDatosPersonalesCodPersonal($fila->Datos_Personales_cod_personal);
            $nAlumno->setUsuarioCodUsuario($fila->Usuario_cod_usuario);
            $nAlumno->setCorreo($fila->correo);
            $nAlumno->setEstado($fila->estado);
            $oAlumnos[] = $nAlumno;
        }

        return $oAlumnos;
    }

}
