<?php
$equipo1 = $_GET['equipo1'];
$equipo2 = $_GET['equipo2'];

$partido = $equipo1 . $equipo2;

$rutaEq1 = "../../assets/imagenes/Equipos/" . $equipo1 . "/Nombre.JPG";
$rutaEq2 = "../../assets/imagenes/Equipos/" . $equipo2 . "/Nombre.JPG";

$rutaImgs = "../../assets/imagenes/Partidos/" . $partido;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $equipo1 . " VS " . $equipo2 ?></title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <style>
        p {
            color: black;
            font-size: 22px;
            text-align: justify;
            font-weight: bold;
        }

        h1 {
            color: black;
            font-size: 56px;
            font-weight: bold;
        }
    </style>
</head>

<body background="../../assets/imagenes/Fondos/PartidoFondo.jpg">

    <div class="container-fluid">
        <div class="row">
            <br>
            <a href="/mundial2018/"><button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-home"></span></button></a>
            <a href="/mundial2018/Panels/Partidos.html"><button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-arrow-left"></span></button></a>

            <center>
                <img src=<?php print $rutaEq1 ?> alt=<?php print $equipo1 ?> style="width: 20%;">
                <img src="../../assets/imagenes/Partidos/vs.jpg" alt="VS" style="width: 5%;">
                <img src=<?php print $rutaEq2 ?> alt=<?php print $equipo2 ?> style="width: 20%;">
            </center>

            <div class="col-md-4">
                <h1>Resumen</h1>
                <p>
                    Tras un inicio fulgurante de partido en el que se vieron dos goles en apenas 4 minutos, Croacia tuvo que esperar a los penales para derrotar a una brava Dinamarca que se mostró más ofensiva que en anteriores ocasiones, pero quedó sin premio.
                    <p>
                        <p>
                            No se había cumplido el primer minuto y Dinamarca ya iba 0-1. Mathias Jorgensen disparó entre un mar de piernas y Danijel Subasic no logró evitar que el balón cruzara la línea. Pero poco duró la alegría a los escandinavos. El el 4’ Mario Mandzukic no perdonó en la primera de Croacia y reestableció la igualdad.
                        </p>
                        <p>
                            A partir de entonces, Croacia se mostró más dominante en el primer tiempo, con Luka Modric dirigiendo las operaciones desde una posición más retrasada que en anteriores partidos. Pero Dinamarca tuvo sus opciones y Christian Eriksen mandó un balón al travesaño.
                        </p>
                        <p>
                            Los escandinavos se lo fueron creyendo más con el paso de los minutos, pero pecaron de cándidos en sus llegadas al área croata. Los Vatreni, muy fatigados, no alcanzaron a desnivelar tampoco un choque que fue a la prórroga. Ahí Croacia siguió queriendo, pero sin poder -Modric marró un penal en el 116'- y Dinamarca esperó a los penales, confiando en la fortaleza de Kasper Schmeichel. El arquero atajó dos, pero Subasic paró tres y dio el pase a los suyos.
                        </p>
            </div>
            <div class="col-md-8">

                <div class="row">
                    <center>
                        <h1>Imágenes</h1>
                    </center>
                    <div class="col-md-4">
                        <img src=<?php print $rutaImgs . "/1.JPG" ?> alt="1" style="width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <img src=<?php print $rutaImgs . "/2.JPG" ?> alt="2" style="width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <img src=<?php print $rutaImgs . "/3.JPG" ?> alt="3" style="width: 100%;">
                    </div>
                </div>

                <div class="row">
                    <center>
                        <h1>Videos</h1>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ei5S5SWIxbQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zUHr_5IB838" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>