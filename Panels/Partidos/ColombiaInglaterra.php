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
                    Inglaterra pudo por fin celebrar una tanda de penales en una Copa Mundial de la FIFA™: tras igualar 1-1 eliminó a Colombia en el estadio del Spartak de Moscú y avanzó a los cuartos de final de Rusia 2018. ¿Será este el torneo que le permita levantar un título que se le resiste desde 1966?
                    <p>
                        <p>
                            Tras un inicio de partido muy intenso, los Tres Leones pasaron a marcar el ritmo de juego. Harry Kane, Raheem Sterling y Jesse Lingard aparecieron constantemente entre líneas y provocaron jugadas peligrosas a balón parado. Colombia, sin su estrella James Rodríguez —ausente por lesión— apostó principalmente por salir con velocidad al contragolpe, pero apenas se asomó con peligro al arco rival.
                        </p>
                        <p>
                            La segunda parte arrancó de manera muy favorable para los intereses de Inglaterra. Después de ser derribado dentro del área, el capitán Harry Kane convirtió el penal y adelantó a los suyos en el marcador. En el último cuarto de hora, sin embargo, Colombia se volcó en ataque y logró el empate en el minuto 93 por medio de Yerry Mina.
                        </p>
                        <p>
                            El colombiano es el primer central desde 1958 que convierte 3 goles en un mismo Mundial y ninguno de ellos es de penal.
                        </p>
                        <p>
                            Ambas selecciones buscaron decantar la balanza a su favor en la prórroga, pero el ganador acabó decidiéndose desde el punto fatídico. Colombia se ilusionó con la parada de Ospina a Henderson, pero Uribe reventó el travesaño y Pickford hizo un paradón a una mano al remate de Bacca. Al final, Dier hizo felices por primera vez a los ingleses desde los doce pasos.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RbmaLT320hw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aJ698ujIW6U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>