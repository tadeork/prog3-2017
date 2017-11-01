<?php

require_once 'MainService.php';
require_once 'UserService.php';


class Server extends MainService {
    
    private $userService;
    
    function __construct() 
    {
        $this->userService = new UserService();    
    }
    
    public function login($user_name, $password)
    {
        $valid = $this->userService->validate($user_name, $password);
        if($valid) {
            header('Location: http://localhost:4321/todo_list.php');
            exit();
        }
        
        return false;
    }

    protected function error()
    {}

    protected function message()
    {}

}

?>
