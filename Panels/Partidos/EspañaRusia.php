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
                    Rusia derrotó a España en la primera tanda penal de la Copa Mundial de la FIFA Rusia 2018™. Igor Akinfeev atajó el disparo de Koke antes de que el fallo de Iago Aspas hiciera delirar al estadio Luzhniki de Moscú.
                    <p>
                        <p>
                            Todo había empezado bien para la Roja, que silenció el imponente coliseo en los compases iniciales con una jugada a balón parado que dio a España la ventaja en el marcador. Sergio Ramos forcejeó con Sergei Ignashevich y el veterano defensa marcó en propia puerta.
                        </p>
                        <p>
                            Pero Rusia no languideció en la agobiante tarde moscovita. El imperioso Artem Dzyuba se deleitó en su batalla contra Ramos y Gerard Pique, y una de sus escaramuzas contra este último resultó en mano del barcelonista. El propio Dzyuba ejecutó la pena máxima y transformó burlando por completo a David De Gea.
                        </p>
                        <p>
                            La segunda mitad tuvo un patrón constante: posesión de España y contraataque ruso. Y aparte de una intervención de Akinfeev ante Andrés Iniesta en los minutos finales, ninguno de los dos parecía preparado para ganar en el tiempo reglamentario. Una sólida actuación defensiva de los locales en la prórroga propició la definición por penales, que Rusia ganó contra la campeona de 2010 con Akinfeev como héroe absoluto.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gHPke43iqNg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/okqN_Il3hgg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>