<?php

class Application_Model_Alumno extends Zend_Db_Table_Abstract
{
    protected $_name = 'Alumno';
    
    protected $_codAlumno;
    protected $_datosPersonalesCodPersonal;
    protected $_usuarioCodUsuario;
    protected $_correo;
    protected $_estado;
    
    public function setDatosPersonalesCodPersonal($cod_personal)
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