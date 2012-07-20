<?php

class Application_Model_AlumnoTable extends Zend_Db_Table_Abstract
{
    protected $_name = 'Alumno';
    
    protected $_cod_alumno;
    protected $_Datos_Personales_cod_personal;
    protected $_Usuario_cod_usuario;
    protected $_correo;
    protected $_estado;
    
    public function __construct() {
        $this->_cod_alumno=0;
        $this->_Datos_Personales_cod_personal=0;
        $this->_Usuario_cod_usuario=0;
        $this->_correo="";
        $this->_estado="";
    }
    
    public function setDatos_Personales_cod_personal($cod_personal)
    {
        $this->_Datos_Personales_cod_personal=(int) $cod_personal;
        return $this;
    }
    
    public function getDatos_Personales_cod_personal()
    {
        return $this->_Datos_Personales_cod_personal;
    }
    
    public function setUsuario_cod_usuario($cod_usuario)
    {
        $this->_Usuario_cod_usuario=(int) $cod_usuario;
        return $this;        
    }
    
    public function getUsuario_cod_usuario()
    {
        return $this->_Usuario_cod_usuario;
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
    
    public function setCod_alumno($cod_alumno)
    {
        $this->_cod_alumno=(int)$cod_alumno;
        return $this;
    }
    
    public function getCod_alumno()
    {
        return $this->_cod_alumno;
    }

}