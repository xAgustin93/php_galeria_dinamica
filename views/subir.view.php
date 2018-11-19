<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir</title>

    <?php include 'head.php' ?>

</head>
<body id="foto">
    
    <header class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo">Subir</h1>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row" class="formulario">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <label for="foto">Seleciona tu foto</label>
                    <input type="file" id="foto" name="foto">
                    <br>
                    <label for="foto">Titulo de la foto</label>
                    <input type="text" id="titulo" name="titulo">
                    <br>
                    <label for="texto">Descripcion</label>
                    <textarea name="texto" id="texto" placeholder="Escribe una descripcion"></textarea>
                    <br>

                    <?php if(isset($error)): ?>
                        <p class="error"><?php echo $error; ?></p>
                    <?php endif ?>

                    <input type="submit" class="submit" value="Subir foto">
                </form>
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