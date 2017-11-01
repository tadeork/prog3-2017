<?php

class UserService {
    
    private $_users_list = [
        "user_1" => "abc123",
        "user_2" => "abc123",
        "user_3" => "abc123"
    ];

    private function validUser($user)
    {
        if(!in_array($user, $this->_users_list)){
            return "is not found";
        }

        return $this->_users_list[$user];
    }
    
    public function validate($user_name, $password) {
        $login = ($this->validUser($user_name) == $password);
        if ($login) {
            return true;       
        }
        return false;
    }
}
