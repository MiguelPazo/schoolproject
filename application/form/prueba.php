<?php

class Application_Form_Prueba extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        
        $this->addElement('text','estado',array(
            'label'=>'Estado:',
            'required'=>true,
            'filters'=>array('StringTrim'),
        ));
        
        $this->addElement('text','correo',array(
            'label'=>'Correo:',
            'required'=>true,
            'filters'=>array('StringTrim'),
            'validators'=>array('EmailAddress',)
        ));
        
        $this->addElement('submit','submit',array(
            'ignore'=>true,
            'label'=>'Registrar Alumno',
        ));
        
    }
}