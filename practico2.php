<?php
function agregarUsuarios(array $Usuarios,$nombre,$edad,$email){
    $Usuarios = [
        "nombre" => $nombre,
        "edad" => $edad,
        "email" => $email
    ];
    return $Usuarios ;  
}
    $Usuarios = [];
    $Usuarios=agregarUsuarios($Usuarios,"juan","25","pepe@gmail.com");
 var_dump ($Usuarios);