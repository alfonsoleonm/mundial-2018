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
                    Bélgica derrotó 1-2 a Brasil en Kazán, donde se disputó el segundo choque correspondiente a los cuartos de final de la Copa Mundial de la FIFA Rusia 2018.
                    <p>
                        <p>
                            La primera mitad arrancó con dominio de la Seleção, que gozó de su primera ocasión de gol por medio de Thiago Silva. El balón, sin embargo, se estrelló en el poste. Los hombres de Roberto Martínez, entretanto, esperaban para lanzar peligrosos contragolpes. Pero fue a la salida de un córner cuando los belgas se adelantaron en el marcador, al desviar Fernandinho el balón al fondo de su propia portería.
                        </p>
                        <p>
                            El segundo gol de los europeos recordó al del contraataque frente a Japón, pero esta vez fue Kevin De Bruyne quien culminó la acción con un potente remate.
                        </p>
                        <p>
                            Tras el descanso, los sudamericanos siguieron presionando muy arriba y metieron a Bélgica en su campo. Sin embargo, todos sus intentos chocaban contra algún defensor belga o contra el propio Thibaut Courtois.
                        </p>
                        <p>
                            Renato Augusto fue un gran revulsivo, y cabeceó al fondo de la red una magnífica asistencia de Coutinho. El partido se puso aún más emocionante, pero Courtois mantuvo su arco a cero y Bélgica jugará las semifinales de la Copa Mundial por segunda vez en su historia.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/t8IK0ZqfxNI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mpiBWfxLivY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>