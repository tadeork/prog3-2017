<?php

class UserService {
    
    private $_user_list = [
        "user_1" => "abc123",
        "user_2" => "abc123",
        "user_3" => "abc123"
    ];
    
    public function validate($user_name, $password) {
        if ($this->_user_list[$user_name] == $password) {
            return true;       
        }
        return false;
    }
}
