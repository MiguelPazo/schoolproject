<?php

class Application_Model_base_Alumno extends Zend_Db_Table_Abstract
{
    protected $_name = 'Alumno';
    
    protected $_codAlumno;
    protected $_datosPersonalesCodPersonal;
    protected $_usuarioCodUsuario;
    protected $_correo;
    protected $_estado;
    
    public function setDatosPersonalesCodPersonal($codPersonal)
    {
        $this->_datosPersonalesCodPersonal=(int) $codPersonal;
        return $this;
    }
    
    public function getDatosPersonalesCodPersonal()
    {
        return $this->_datosPersonalesCodPersonal;
    }
    
    public function setUsuarioCodUsuario($codUsuario)
    {
        $this->_usuarioCodUsuario=(int) $codUsuario;
        return $this;        
    }
    
    public function getUsuarioCodUsuario()
    {
        return $this->_usuarioCodUsuario;
    }
    
    public function setCorreo($correo)
    {
        $this->_correo=(string)$correo;
        return $this;
    }
    
    public function getCorreo()
    {
        return $this->_correo;
    }
    
    public function setEstado($estado)
    {
        $this->_estado=(string)$estado;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->_estado;
    }
    
    public function setCodAlumno($codAlumno)
    {
        $this->_codAlumno=(int)$codAlumno;
        return $this;
    }
    
    public function getCodAlumno()
    {
        return $this->_codAlumno;
    }
    
    public function saveObject(){
        $data=array(
            'cod_alumno'=>$this->getCodAlumno(),
            'Datos_Personales_cod_personal'=>  $this->getDatosPersonalesCodPersonal(),
            'Usuario_cod_usuario'=>  $this->getUsuario_cod_usuario(),
            'correo'=>$this->getCorreo(),
            'estado'=>$this->getEstado(),
        );
        $this->getDbTable()->insert($data);
    }
    
    public function updateObject(){
        $data=array(
            'Datos_Personales_cod_personal'=>  $this->getDatosPersonalesCodPersonal(),
            'Usuario_cod_usuario'=>  $this->getUsuario_cod_usuario(),
            'correo'=>$this->getCorreo(),
            'estado'=>$this->getEstado(),
        );
        $cod_alumno=$this->getCodAlumno();
        $this->getDbTable()->update($data,array('cod_alumno=?'=>$cod_alumno));
    }
    
    public function deleteObject(){
        $data=array(
            'estado'=>'0',
        );
        $cod_alumno=$this->getCodAlumno();
        $this->getDbTable()->update($data,array('cod_alumno=?'=>$cod_alumno));
    }
}