<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fotos</title>

    <?php include 'head.php' ?>

</head>
<body id="foto">
    
    <header class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo">
                    <?php if(!empty($foto['titulo'])){
                        echo $foto['titulo'];
                    } else {
                        echo $foto['imagen'];
                    } ?>
                </h1>
            </div>
        </div>
    </header>

    <div class="container foto">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid" src="img/<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
                <p><?php echo $foto['texto']; ?></p>
                <a href="index.php" class="volver">Volver</a>
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