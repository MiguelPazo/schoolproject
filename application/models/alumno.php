<?php

class Models_Alumno extends Application_Model_AlumnoTable
{
    protected $_dbTable;
    
    public function getDbTable()
    {
        if(null===$this->_dbTable){
            $this->_dbTable='Application_Model_AlumnoTable';
        }
        return $this->_dbTable;
    }

    public function listar($cod_alumno,Application_Model_AlumnoTable $oalumno)
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

    public function listarTodo(){
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
    
    public function guardar(Application_Model_AlumnoTable $oalumno){
        $data=array(
            'Datos_Personales_cod_personal'=>$oalumno->getDatos_Personales_cod_personal(),
            'Usuario_cod_usuario'=>$oalumno->getUsuario_cod_usuario(),
            'correo'=>$oalumno->getCorreo(),
            'estado'=>$oalumno->getEstado(),
        );
        
        if(null===($cod_alumno=$oalumno->cod_alumno)){
            unset($data['cod_alumno']);
            $this->getDbTable()->insert($data);
        }else{
            $this->getDbTable()->update($data,array('cod_alumno=?'=>$cod_alumno));
        }
    }
}