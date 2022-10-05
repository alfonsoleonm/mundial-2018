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
                    Un remate de cabeza de Samuel Umtiti contra Bélgica en San Petersburgo metió a Francia en la final de la Copa Mundial de la FIFA por tercera vez en los últimos veinte años.
                    <p>
                        <p>
                            Ambas selecciones dispusieron de varias ocasiones de gol en la primera mitad. Pero las espléndidas intervenciones de Hugo Lloris y de Thibaut Courtois, que desbarataron los remates de Toby Alderweireld y de Benjamin Pavard, respectivamente, evitaron que el marcador se moviera antes del descanso.
                        </p>
                        <p>
                            Los defensores habían sido los protagonistas de las mejoras ocasiones del partido, por lo que resultó incluso lógico que fuera un central quien desnivelara la balanza. Después de que Raphaël Varane se erigiera en el héroe contra Uruguay en cuartos de final, esta vez el turno fue para Umtiti. El defensa galo se deshizo de su marcador y cabeceó al fondo del arco defendido por Thibaut Courtois un saque de esquina botado por Antoine Griezmann.
                        </p>
                        <p>
                            Con esta ventaja, Francia cerró filas y sofocó cualquier intento de los Diablos Rojos por jugar entre líneas en la zona de ataque. Los hombres de Deschamps fueron agotando los minutos, al tiempo que buscaban salir a la contra, hasta que certificaron su presencia en la final de Moscú.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ntQsMSuEbyg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/rQgftpn8IXA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>