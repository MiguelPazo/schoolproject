<?php

class Application_Model_Base_Alumno extends Zend_Db_Table_Abstract
{

    protected $_name = 'Alumno';
    protected $_codAlumno;
    protected $_datosPersonalesCodPersonal;
    protected $_usuarioCodUsuario;
    protected $_correo;
    protected $_estado;

    public function setDatosPersonalesCodPersonal($codPersonal) {
        $this->_datosPersonalesCodPersonal = (int) $codPersonal;
    }

    public function getDatosPersonalesCodPersonal() {
        return $this->_datosPersonalesCodPersonal;
    }

    public function setUsuarioCodUsuario($codUsuario) {
        $this->_usuarioCodUsuario = (int) $codUsuario;
    }
    
    public function getUsuarioCodUsuario()
    {
        return $this->_usuarioCodUsuario;
    }

    public function setCorreo($correo) {
        $this->_correo = (string) $correo;
    }

    public function getCorreo() {
        return $this->_correo;
    }

    public function setEstado($estado) {
        $this->_estado = (string) $estado;
    }

    public function getEstado() {
        return $this->_estado;
    }

    public function setCodAlumno($codAlumno) {
        $this->_codAlumno = (string) $codAlumno;
    }
    public function getCodAlumno() {
        return $this->_codAlumno;
    }

    public function saveObject() {
        $data = array(
            'Datos_Personales_cod_personal' => $this->getDatosPersonalesCodPersonal(),
            'Usuario_cod_usuario' => $this->getUsuarioCodUsuario(),
            'correo' => $this->getCorreo(),
            'estado' => $this->getEstado(),
        );
        $this->insert($data);
    }

    public function updateObject() {
        $data = array(
            'Datos_Personales_cod_personal' => $this->getDatosPersonalesCodPersonal(),
            'Usuario_cod_usuario' => $this->getUsuarioCodUsuario(),
            'correo' => $this->getCorreo(),
            'estado' => $this->getEstado(),
        );
        $cod_alumno = $this->getCodAlumno();
        $this->update($data, array('cod_alumno=?' => $cod_alumno));
    }

    public function deleteObject() {
        $data = array(
            'estado' => '0',
        );
        $cod_alumno = $this->getCodAlumno();
        $this->update($data, array('cod_alumno=?' => $cod_alumno));
    }

}
