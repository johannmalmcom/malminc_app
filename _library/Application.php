<?php

class Application {
    
    private $router;
    
    function __construct() {
        $this->router = new \Bramus\Router\Router();
    }
    
    public function routes() {
        // Include route groups here
        $this->homeRoutes();
        $this->APIRoutes();
    }
    
    private function homeRoutes() {
        $controller = new HomeController();
        
        $this->router->get('/', function() use ($controller) {
            echo $controller->index();
        });
        
        $this->router->get('/hello', function() use ($controller) {
            echo $controller->hello();
        });
    }
    
    private function APIRoutes() {
        $controller = new APIController();
        
        $this->router->get('/api/users', function() use ($controller) {
            echo json_encode($controller->users());
        });
        
        $this->router->get('/api/hello', function() use ($controller) {
            echo json_encode($controller->hello());
        });
    }
    
    public function run() {
        $this->router->run();
    }
    
}

?>