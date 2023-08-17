<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="css/secition.css">

</head>

<style>
    body {
      background-image: url("img/negro.avif");
    font-family: Arial, sans-serif;
    color: gold;
    margin: 0;
    padding: 0;
  }
</style>

<body>
    <h1>Bienvenido al apartado de Contacto</h1>
    <h2>Rellena el formulario</h2>
    <br>

    <div class="container marketing">
      <div class="row">
        <div> 
        <form action="conexcion.php" method="POST">
         <div class="mb-3">
            <label for="nombre" ><h2>Nombre</h2></label>
            <br>
            <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre">
          </div>
          <div class="mb-3">
          <label for="correo" ><h2>Correo electronico</h2></label>
          <br>
            <input type="email" id="correo" name="correo" placeholder="name@example">
          </div>
          <div class="mb-3">
            <label for="comentario"><h2>Comentario</h2></label><br>
            <textarea id="comentario" name="comentario" rows="4" cols="30"></textarea>
          </div>
          <br>
          <input type="submit" value="Enviar">

        </form>
        </div>
      </div>
    </div>
</body>

<footer>
    <a href="index.php"><h3 style="color:gold;">Regresar al inicio</h3></a>
</footer>
</html>