<?php

class APIController extends Controller {
    
    public function users() {
        $user = new User();
        
        return $user->select([
            "id",
            "username",
            "password"
        ]);
    }
    
    public function hello() {
        return "Hello, world!";
    }
    
}

?>