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
                    En un encuentro cambiante, Bélgica demostró que además de grandes jugadores tiene capacidad para recuperarse:venció por 3-2 a Japón tras levantar dos goles de desventaja. En cuartos de final de la Copa Mundial de la FIFA Rusia 2018™ lo espera nada menos que Brasil.
                    <p>
                        <p>
                            Tras un primer tiempo parejo, en el que salvo pequeños lapsos de dominio de uno y otro las virtudes defensivas opacaron a las ofensivas, Japón tiró dos guantazos de nocaut en el inicio del complemento: enorme definición cruzada de Genki Haraguchi a los 48 y, cuatro minutos después, Takashi Inui amplió con un golazo desde fuera, su segundo del torneo.
                        </p>
                        <p>
                            Era una prueba de personalidad para esta Bélgica llena de talento. Tuvo varios minutos de histeria y Roberto Martínez apostó por el acoso aéreo con la entrada de Marouane Fellaini. Le dio resultado. El cabezazo bombeado de Jan Vertonghen a los 69 la metió en partido. A los 74, los 194cm de Fellaini aparecieron en el corazón del área para el 2-2.
                        </p>
                        <p>
                            Los Diablos Rojos fueron por el tercero. Kawashima salvó ante el cabezazo de Lukaku. Courtois también debió revolcarse y, cuando todos en Rostov pensaban en el alargue, Nacer Chadli transformó en golazo una contra de manual en el cuarto minuto de descuento.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/fJeJuc27ggE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jqA86KGtaNQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>