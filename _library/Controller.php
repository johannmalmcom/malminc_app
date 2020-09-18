<?php

class Controller {
    
    protected $template;
    
    function __construct() {
        $loader = new \Twig\Loader\FilesystemLoader('./_views');
        $this->template = new \Twig\Environment($loader);
    }
    
}

?>