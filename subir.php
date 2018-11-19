<?php
    require 'funciones.php';
    $conexion = conexion('curso_galeria_dinamica', 'root', 'root');

    
    if(!$conexion){        
        die();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
        $check = @getimagesize($_FILES['foto']['tmp_name']);

        if($check != false){
            $catrpeta_destino = 'img/';
            $archivo_subido = $catrpeta_destino . $_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

            $statment = $conexion->prepare('
                INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)
            ');

            $statment->execute(array(
                ':titulo' => $_POST['titulo'],
                ':imagen' => $_FILES['foto']['name'],
                ':texto' => $_POST['texto']
            ));

            // header('Location: index.php');
        } else {
            $error = "El archivo no es una imagen o el archivo es muy pesao";
        }
    }

    require 'views/subir.view.php';

?>