<?php
 if (session()->get('rol')=="usuario" || session()->get('rol')=="admin"){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("public/css/styles.css") ?>">
    <link rel="icon" href="<?= base_url("public/img/vivashop.png") ?>">
    <title>VivaShop</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php base_url("/home") ?>"><img src="<?php echo(base_url("public/img/vivashop.png")) ?>" width="50px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php base_url("/home") ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ofertas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true"><img src="<?= base_url("public/img/cart.png") ?>" height="24px" alt="" title="Carrito de Compras"></a>
        </li>
      </ul>
      
      <!-- login -->
      <?php if (session()->get('user_id')){ ?>
      <li class="nav-link">
        <a class="me-4 text-decoration-none"><strong><?php echo(ucfirst(session()->get('nombre'))) ?></strong></a>
        <a class="text-decoration-none" href="" data-bs-toggle="modal" data-bs-target="#login">|  &nbsp;<img src="<?= base_url("public/img/logout.png") ?>" height="24px" title="Salir" alt=""></a>
      </li>
      <?php } ?>
    </div>
  </div>
</nav>

<div class="container">

<div class="card mt-5 shadow" style="width: 18rem;">
  <img src="<?php echo(base_url("public/img/vivashop.png")) ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Producto Sorpresa</h5>
    <p class="card-text">$ 450.000</p>
    <a href="#" class="btn btn-secondary">Comprar</a>
  </div>
</div>

</div>



<!-- Modal Logout -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cerrar Sesión</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Selecciona salir si estás seguro de finalizar tu sesión.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a type="button" class="btn btn-danger" href="<?php echo(base_url("/logout")) ?>">Salir</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php } ?>