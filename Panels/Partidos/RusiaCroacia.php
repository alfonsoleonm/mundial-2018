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
                    Veinte años después del logro de la generación dorada de entonces, los hombres de Zlatko Dalic disputarán las segundas semifinales de la historia de su país, conjurando así —no sin sufrimiento y en los penales— su maleficio contra la selección anfitriona de la Copa Mundial de la FIFA™, tras perder a manos de Francia en 1998 y de Brasil en el partido inaugural de 2014.
                    <p>
                        <p>
                            El cuadro ruso, llevado en volandas por un entregado estadio Fisht, se afanó en la presión al principio, pero los croatas fueron capaces de interpretar su partitura bajo un ruido ensordecedor, que disparaba los decibelios con cada contragolpe de su rival.
                        </p>
                        <p>
                            Y en una de esas contras, Denis Cheryshev inauguró el marcador de un zurdazo por toda la escuadra. Pero minutos más tarde los Vatreni harían oídos sordos para callar a la afición rusa mediante un remate de cabeza de Andrej Kramaric.
                        </p>
                        <p>
                            Ivan Perisic hizo retumbar el poste de Igor Akinfeev, aunque ese sería el único estruendo de un segundo periodo en el que escasearon las ocasiones, por mucho que los nervios estuviesen a flor de piel. En la prórroga, un testarazo de Domagoj Vida volvió a silenciar a los anfitriones. Luego todo el país gritó de alegría con el empate de Mário Fernandes, pero el fallo de este mismo jugador en los penales sellaría el destino de Rusia.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/wjU8j2bj3RY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/D7vbykand_o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>