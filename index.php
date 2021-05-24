<?php
    require __DIR__ . '/rutas/secciones.php';

    $secciones = getSeccionesLista();
    $seccionActual = $_GET['s'] ?? 'home';
    if(!isset($secciones[$seccionActual])) {
    $seccionActual = '404';
    }
    ?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $secciones[$seccionActual]['title'] ?? 'Kaiba Underwear';?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!--fuentes-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />





</head>
<body>

        <header class="container" >
            <h1 > <a class="navbar-brand"  href="index.php" id="kaiba-logo">Kaiba</a></h1>
            <div class="row">
                <nav class="col navbar navbar-expand-xl navbar-dark bg-negro ">
                    <button class="navbar-toggler ml-auto border-0" type="button" data-toggle="collapse" data-target="#barra"       aria-controls="barra" aria-expanded="false" aria-label="Menú Hamburguesa">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="barra">
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item"><a href="index.php?s=productos" class="nav-link ">Productos</a></li>
                            <li  class="nav-item"><a href="index.php?s=contacto" class="nav-link">Contáctenos</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </header>

    <main >

<p class="carousel-item"></p>
            <?php
                    require __DIR__ . "/secciones/" . $seccionActual . ".php";
            ?>


    </main>



        <?php
        require __DIR__ . "/secciones/footer.php";
        ?>






        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


        <script src="js/jquery-3.5.1.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script>
            $('.nav-item').on('click', function() {
                $(".navbar-collapse").collapse("hide");
            });


            $('.navbar-collapse').on('show.bs.collapse', function() {
                $(".navbar-toggler-icon").css("background-position", 'center bottom');

            });
            $('.navbar-collapse').on('hide.bs.collapse', function() {
                $(".navbar-toggler-icon").css("background-position", 'center top');

            });

        </script>


</body>
</html>