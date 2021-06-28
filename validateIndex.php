<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
echo '<pre>';
var_dump( $_POST );

$loginUser  = '';
$loginPassword   = '';

if ( !empty ( $_POST ) ) {
    if  ( !empty ( $_POST['loginUser'] ) &&
        is_string( $_POST['loginUser'] ) ) {
            $loginUser = $_POST['loginUser'];
    }
    if ( !empty ( $_POST['loginPassword'] ) &&
        is_string( $_POST['loginPassword'] ) ) {
            $loginPassword = $_POST['loginPassword'];
    }
}

