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
                    Suecia se ha hecho con el pase a los cuartos de final de la Copa Mundial de la FIFA™ por primera vez en casi 24 años, con una victoria sobre Suiza por la mínima (1-0), gracias a un disparo de Emil Forsberg, en San Petersburgo.
                    <p>
                        <p>
                            En un partido disputado con cautela desde los primeros compases, los suecos echaron mano de la fórmula que mejor le ha funcionado hasta el momento: replegarse, defender con solidez y golpear a la contra. Suiza, por lo tanto, ha sido el equipo más activo sobre el terreno de juego cuando ha tenido el balón. Sin embargo, el planteamiento reactivo del conjunto de Janne Andersson ha resultado más fértil. De las poquísimas ocasiones creadas, las mejores han pertenecido a los suecos.
                        </p>
                        <p>
                            En una especie de guerra de desgaste, conforme avanzaba el cronómetro empezaron a vislumbrarse destellos de posibles momentos desequilibrantes, pero tanto las malas definiciones de unos como la buena suerte de otros los han empañado. Precisamente fue la fortuna la que se encargó de decidir al ganador.
                        </p>
                        <p>
                            Hasta ahora, Emil Forsberg no había estado a la altura de la etiqueta de gran estrella que le colgaron de camino a esta fase final. Hoy, sin embargo, tras recibir el balón al borde del área, ha metido a los suyos en cuartos de final con un cañonazo que, desviado por Manuel Akanji, se coló por la escuadra.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/012FkPcI1uE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/m0QDQ-muoXY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>