<?php
include_once('../config/config.php');
include('cliente.php');

if ( isset($_POST) && !empty($_POST) ){
    $p = new cliente();

    $save = $p->save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-sucess"> Enviado</div>';
    }else{
        $mensaje = '<div class="alert alert-danger"> Error de envio</div>';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php') ?>
    <div class='container'>
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <h2 class="text-center mb-2"> Contacto </h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="d-grid gap-2 col-6 mx-auto">
        <div class=col>
                <input type="text" name="Nombres" id="Nombres" placeholder="Nombres del cliente" class="form-control"/>  
            </div>
            <div class=col>
                <input type="text" name="Apellidos" id="Apellidos" placeholder="Apellidos del cliente" class="form-control"/>  
            </div>
            <div class=col>
                <input type="email" name="Email" id="Email" placeholder="Email del cliente" class="form-control"/>  
            </div>
            <div class=col>
                <input type="number" name="Celular" id="Celular" placeholder="celular del cliente" class="form-control"/>  
            </div>
            <div class=col>
                <input type="text" name="Mensaje" id="Mensaje" placeholder="Mensaje" class="form-control"/>  
            </div>
            <button class="btn btn-info col-2 mx-auto fs-5" >enviar</button>






        </div>
        </form>
    </div>
</body>
</html>