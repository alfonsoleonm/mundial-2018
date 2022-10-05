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
                    Neymar marcó su sexto gol en fases finales de la Copa Mundial de la FIFA™, antes de que el suplente Roberto Firmino firmase la sentencia en el triunfo por 2-0 de Brasil sobre México que supuso su pase a los cuartos de final de Rusia 2018.
                    <p>
                        <p>
                            Los primeros 20 minutos del partido empezaron con El Tri presionando a la zaga de los sudamericanos. Pero con el tiempo, el combinado de Tite fue capaz de ir creciendo dentro del encuentro, generando más oportunidades de gol a la postre y pareciendo el equipo con más probabilidades de abrir el marcador.
                        </p>
                        <p>
                            Sin embargo, no pudo lograrlo antes del descanso; aunque una vez que empezó el segundo periodo, no hubo que esperar mucho para ver a Neymar celebrando. En el minuto 51, el astro brasileño remató a bocajarro el mortífero centro raso de Willian. Brasil siguió creando ocasiones de gol y, poco antes de concluir el tiempo reglamentado, Firmino llegó en el segundo palo para sentenciar la victoria.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kYIf8I1dvdo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Uh1wYs8TSJ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>