<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url("public/img/vivashop.png") ?>">
    <title>VivaShop</title>
</head>
<body>

<div class="container">


<div class="row p-5 mt-5 mb-5 bg-body-tertiary shadow-lg">
  <img src="<?php echo(base_url("public/img/vivashop.png")) ?>" class="col-lg-6 d-none d-lg-block">
  <div class="col-lg-6">
      <div class="p-5">
          <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">¡CREA TU CUENTA!</h1>
          </div>
          <?php
          // Verificar si hay un mensaje en la sesión
          if (session()->has('mensaje')) {
              // Mostrar el mensaje en una alerta Bootstrap
              $mensaje = session('mensaje');
              echo <<<HTML
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>¡Bienvenido!</strong> $mensaje
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          HTML;
          }
          ?>
          <form class="row g-3" action="<?php echo(base_url("/register")) ?>" method="POST">
            <div class="col-md-6">
              <input type="text" class="form-control" id="nombre" placeholder="Nombre" required name="nombre">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" id="username" placeholder="Username" required name="username">
            </div>
            <div class="col-md-6">
              <input type="password" class="form-control" id="password" placeholder="Contraseña" required name="clave" minlength="8">
            </div>
            <div class="d-grid gap-2 mt-3">
              <button type="submit" class="button-cart"> Confirmar</button>
            </div>
          </form>
          <hr>
          <div class="text-center">
              <a class="small text-secondary" href="<?= base_url("/") ?>">Ya esta registrado, !Inicia sesión¡</a>
          </div>
      </div>
  </div>
</div>

</div>

    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>