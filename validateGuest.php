<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
echo '<pre>';
var_dump( $_POST );

$user  = '';
$password   = '';
$repeat   = '';         //tiene q ser iguales con el anterior si
$nombre   = '';
$apellido   = '';
$email   = '';   //validate email si
$genero   = '';
$fecha   = '';
$fecha   = '';
$perfil   = '';   //img
$notificaciones   = '';    //si o no



if ( !empty ( $_POST ) ) {
    if  ( !empty ( $_POST['user'] ) &&
        is_string( $_POST['user'] ) ) {
            $user = $_POST['user'];
    }
    if ( !empty ( $_POST['password'] ) &&
        is_string( $_POST['password'] ) ) {
            $password = $_POST['password'];
    }
    if ( !empty ( $_POST['repeat'] ) &&
        is_string( $_POST['repeat'] ) &&
        $_POST['loginPassword'] == $_POST['repeat']) {
            $repeat = $_POST['repeat'];
    }
    if ( !empty ( $_POST['nombre'] ) &&
        is_string( $_POST['nombre'] ) ) {
            $nombre = $_POST['nombre'];
    }
    if ( !empty ( $_POST['apellido'] ) &&
        is_string( $_POST['apellido'] ) ) {
            $apellido = $_POST['apellido'];
    }
    if ( !empty ( $_POST['email'] ) &&
        is_string( $_POST['email'] ) &&
        filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) !== false ) {
            $email = $_POST['email'];
    }        
    
}

