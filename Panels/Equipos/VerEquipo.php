<!DOCTYPE html>
<html lang="es">
<?php $equipo = $_GET["equipo"]; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $equipo ?></title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body background="../../assets/imagenes/Fondos/FondoBalon2.jpg">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4">
                <br>
                <a href="/mundial2018/"><button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-home"></span></button></a>
                <?php $ruta = "../../assets/imagenes/Equipos/" . $equipo . "/"; ?>
                <br><br>
                <img src="<?php print $ruta."Nombre.JPG"; ?>" alt="<?php print $equipo; ?>" style="width: 100%;">
                <br><br><br>
                <img src="<?php print $ruta."Lista.JPG"; ?>" alt="Lista" style="width: 100%;">

            </div>
            <div class="col-md-4">
                <br><br>
                <img src="<?php print $ruta."Escuadra.JPG"; ?>" alt="Escuadra" style="width: 100%;">
                <br><br><br><br>
                <img src="<?php print $ruta."Ranking.JPG"; ?>" alt="Ranking" style="width: 50%;">
            </div>
            <div class="col-md-4">
                <br><br>
                <img src="<?php print $ruta."Alineacion.JPG"; ?>" alt="Alineacion" style="width: 80%;">
                <br><br><br><br><br>
                <a href="/mundial2018/Panels/Equipos.html">
                    <button type="button" class="btn btn-warning btn-lg">Regresar</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>