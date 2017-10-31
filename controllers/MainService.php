<?php

abstract class MainService {
    abstract protected function login($user_name, $password);
    abstract protected function error();
    abstract protected function message();
}

?>
