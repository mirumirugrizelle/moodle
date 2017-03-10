<?php
require 'conexion.php';
require 'usuario.php';

// se reciben los parametros del formulario
$user = 'grizelle';
$pwd = '143250';

$usuario = Usuario::login($user, $pwd);
var_dump($usuario);