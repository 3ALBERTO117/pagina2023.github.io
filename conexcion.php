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
    $errors[]='El campo comentario no puede estar vacio'.'<br>';
}

if(empty($errors)){
    echo '<h1> Todo esta correcto </h1>','<br>';
    echo 'los datos se han guardado correctamente';
}else{
    echo '<h1> Error al enviar los datos </h1>'.'<br>';

    foreach($errors as $error){
        echo $error.'<br/>';
    }
}

// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pagina";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$comentario=$_POST['comentario'];
// Aquí puedes obtener los demás datos del formulario

// Ingresar los datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, comentario) VALUES ('$nombre', '$email','$comentario ')";
// Aquí puedes agregar los demás campos y valores que deseas guardar




// Cerrar la conexión
mysqli_close($conn);
?>
<html>
    <footer>
        <h1>regresar a contactos</h1>
        <nav>
    <ul>
      <a href="contacto.php">Contacto</a>
    </ul>
  </nav>
    </footer>
</html>