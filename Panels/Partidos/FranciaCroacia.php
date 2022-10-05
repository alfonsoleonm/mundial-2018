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
                    Francia es la campeona de la Copa Mundial de la FIFA Rusia 2018™. Derrotó 4-2 a Croacia en una final muy entretenida, disputada en el estadio Luzhnikí de Moscú, y puso el broche de oro a un torneo extraordinario.
                    <p>
                        <p>
                            A pesar de que Croacia dominó el balón en los primeros compases del partido, Francia se adelantó en una jugada fortuita. Antoine Griezmann botó un libre indirecto desde el costado derecho del ataque francés, y Mario Mandzukic peinó la pelota con tanta mala suerte que acabó introduciéndola en su propia portería.
                        </p>
                        <p>
                            Ivan Perisic empató con un buen disparo desde el borde del área, pero el atacante pasó de héroe a villano en apenas unos minutos. Francia centró un balón desde la derecha y el zurdo tocó el esférico con la mano. Después de consultar con el VAR, el colegiado indicó pena máxima y Francia volvió a ponerse por delante en el marcador.
                        </p>
                        <p>
                            Tras el paso por vestuarios, Francia aumentó su ventaja gracias a Paul Pogba, cuyas actuaciones a lo largo del torneo merecían ser recompensadas con un gol en la final. Después de que Kylian Mbappé ganara un pase en profundidad, Griezmann le cedió el balón a Pogba, quien anotó tras un primer intento fallido.
                        </p>
                        <p>
                            Mbappé, que desgastó a los defensores croatas con su trabajo incansable, merecía también un gol. Y así ocurrió: su disparo desde el borde del área se coló junto al poste derecho de la meta de Danijel Subasic, que no pudo hacer nada por evitarlo.
                        </p>
                        <p>
                            Mandzukic volvió a marcar en la misma portería, pero esta vez a favor de Croacia tras un error de Hugo Lloris. Pero Les Bleus emularon a sus ídolos de 1998 —incluido el seleccionador, Didier Deschamps— y conquistaron su segundo título mundialista.
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

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/GrsEAvRerTg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/uPCd5ExtIlE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>