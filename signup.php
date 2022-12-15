<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"/>
    <title>INVERSIONES PARURO S.A.</title>
</head>
<body>
    <div class="resolucion">
        <div class="desktop">
        <div class="tablet">
        <div class="movil">
            <header class="Cabecera">
                <MARQUEE WIDTH="80%" BEHAVIOR="alternate"> <IMG SRC="Portada/Inversiones_Papuro.jpg"> </MARQUEE>
            </header> 
            <nav>
                <ul class="Menú">
                    <li><a href= "index.html" >Inicio</a></li>
                    <li><a href= "signup.php" >Registrate</a></li>
                </ul>
            </nav>
</body>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscribirse</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  <!DOCTYPE html>
<html>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1>Inscribirse</h1>
    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Ingresas tu email">
      <input name="password" type="password" placeholder="Ingresa tu Contraseña">
      <input name="confirm_password" type="password" placeholder="Confirma tu contraseña">
      <input type="submit" value="Enviar"> 
    </form>
  </body>
</html>