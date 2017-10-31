<?php
require_once '../controllers/Server.php';

$user_name = $_POST['username'];
$password = $_POST['password'];
$servicio_login = new Server();

$servicio_login->login($user_name, $password);
