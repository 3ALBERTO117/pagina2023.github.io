<?php 
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$comentario=$_POST['comentario'];

$errors=[];

if(empty($nombre)){
    $errors[]='el campo nombre esta vacio'.'<br>';
}
if(empty($correo)){
    $errors[]='el campo correo no puede estar vacio'.'<br>';
}elseif(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
    $errors[]='El campo correo es invalido'.'<br>';
}
if (empty($comentario)){
    $errors[]='El campo mensaje no puede estar vacio'.'<br>';
}

if(empty($errors)){
    echo 'todo esta correcto';
}else{
    echo 'error al enviar el mensaje';

    foreach($errors as $error){
        echo $error.'<br/>';
    }
}
?>