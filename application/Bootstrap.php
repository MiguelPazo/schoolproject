<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initConfig()
    {
        $autoLoader = Zend_Loader_Autoloader::getInstance();
        $autoLoader->registerNamespace("App_");
        $autoLoader->registerNamespace("Models_");
    }

    public function _initView()
    {
        $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $view = $layout->getView();
        
        $view->doctype(Zend_View_Helper_Doctype::HTML5);
        $view->headTitle('School Project')->getSeparator(' | ');
        
        $view->headMeta()->appendName('description','School Project');
        $view->headMeta()->appendName('author','Team school project');
        $view->headMeta()->appendName('viewport','width=device-width');
        
        $view->headLink()->appendStylesheet('/styles/style.css');
        $view->headLink()->appendStylesheet('/styles/main.css');
        
        $view->headScript()->appendFile('/js/libs/jquery-1.7.1.js');
        $view->headScript()->appendFile('/js/plugins.js');
        $view->headScript()->appendFile('/js/googleAnalytics.js');
        $view->headScript()->appendFile('/js/main.js');
        $view->headScript()->appendFile('/js/libs/modernizr-2.5.2.min.js');
        
    }
}