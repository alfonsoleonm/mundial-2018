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
                    Croacia jugará su primera final de la Copa Mundial de la FIFA™ tras imponerse por 2-1 a Inglaterra, con remontada incluida, en la prórroga del partido disputado en el estadio Luzhniki de Moscú. Un gol de Mario Mandzukic sentenció el encuentro.
                    <p>
                        <p>
                            El partido había empezado a pedir de boca para los ingleses. Poco antes de cumplirse el minuto 5, Kieran Trippier botó un soberbio tiro libre de rosca que, con gran efecto, dejó vendido a Danijel Subasic.
                        </p>
                        <p>
                            Croacia devolvió el golpe en la segunda mitad. Durante un periodo en el que los croatas presionaban sin descanso a los Tres Leones, Ivan Perisic igualó el marcador con el remate de un centro medido de Sime Vrsaljko. Menos de cinco minutos después, Perisic se hizo un hueco en el área inglesa, pero su disparo se estampó en el palo y Jordan Pickford atrapó el segundo balón resultante.
                        </p>
                        <p>
                            La jugada del hombre del Inter de Milán fue lo más cerca que estuvieron ambos equipos de hacerse con la ventaja en los 90 minutos reglamentarios. El empate abocaba a Inglaterra a su segunda prórroga en Rusia 2018, mientras que Croacia se preparaba para disputar su tercera consecutiva.
                        </p>
                        <p>
                            Esta vez, sin embargo, los Vatreni no necesitaron recurrir a los penales. Mandzukic se coló por detrás de la defensa inglesa, por unos instantes totalmente desconcentrada, y batió la meta rival con un gol histórico que puso a su país en su primera final mundialista.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gi_2GELMwfY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/75NGtVyq9QE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>