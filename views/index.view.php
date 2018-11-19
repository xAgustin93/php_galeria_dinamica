<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria</title>

    <?php include 'head.php' ?>
</head>
<body id="home">
    
    <header class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo">Galeria Dinamica</h1>
            </div>
        </div>
    </header>

    <div class="container imagenes">
        <div class="row">

            <?php foreach($fotos as $foto): ?>
                <div class="col-3">
                    <div class="thumb">
                        <a href="foto.php?id=<?php echo $foto['id'] ?>" alt="<?php echo $foto['titulo'] ?>">
                            <img class="img-fluid" src="img/<?php echo $foto['imagen'] ?>" alt="<?php echo $foto['titulo'] ?>">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="row paginacion">

            <div class="col-6 anterior-pagina">
                <?php if($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fas fa-chevron-left"></i> Pagina Anterior</a>
                <?php endif ?>
            </div>

            <div class="col-6 siguiente-pagina">
                <?php if($total_paginas != $pagina_actual): ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente <i class="fas fa-chevron-right"></i></a>
                <?php endif ?>
            </div>
        </div>
    </div>

    <footer class="container">
        <div class="row">
            <div class="col-12 copyright"> Galeria creada por Agustin Navarro</div>
        </div>
    </footer>

</body>
</html>