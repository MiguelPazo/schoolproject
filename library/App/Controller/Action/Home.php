<?php

class App_Controller_Action_Home extends App_Controller_Action
{
    public function init() {
        parent::init();
        
        $this->view->headTitle('');
    }
}