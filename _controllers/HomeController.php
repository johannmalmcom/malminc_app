<?php

class HomeController extends Controller {
    
    public function index() {
        return $this->template->render('home.twig', ['name' => $_ENV["application_name"]]);;
    }
    
    public function hello() {
        return "Hello, world!";
    }
    
}

?>