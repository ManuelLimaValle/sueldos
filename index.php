<?php
    $errores = '';
    if(isset($_POST['submit'])){
        $nombre = $_POST["name"];
        $horas = $_POST["horas"];
        $sueldo = $_POST["sueldo"];
        if(!empty($nombre)){
            $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
        }
        if(!empty($horas)){
            $horas = filter_var($horas,FILTER_VALIDATE_INT);
        }
        if(!empty($sueldo)){
            $sueldo = filter_var($sueldo,FILTER_VALIDATE_INT);
        }

    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
    <div class="main">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="form" method="POST">
            <div class="form__container">
                <div class="form__input">
                    <label for="nombre" class="form__label">Nombre: </label>
                    <input type="text" name="name" id="nombre" class="form__input-text">
                </div>
                <div class="form__input">
                    <label for="horas" class="form__label">Horas Trabajadas: </label>
                    <input type="text" name="horas" id="horas" class="form__input-text">
                </div>
                <div class="form__input">
                    <label for="sueldo" class="form__label">Sueldo Por Hora: </label>
                    <input type="text" name="sueldo" id="sueldo" class="form__input-text">
                </div>
                <button type="submit" name="submit" class="form__button">Procesar</button>
                <button type="reset" name="reset" class="form__button">Limpiar</button>
            </div>
        </form>
        <div class="container">
            <?php if(empty($errores)):?>
            <p class="container__h5">tu nombre es: <?php echo $nombre;?></p>
            <?php endif?>
            <?php if(empty($errores)):?>
            <p class="container__h5">las horas que trabajas son: <?php echo $horas;?></p>
            <?php endif?>
            <?php if(empty($errores)):?>
            <p class="container__h5">tu suledo es de: <?php echo $sueldo*$horas;?></p>
            <?php endif?>
        </div>
        <!-- probando cosas -->
    </div>
</body>
</html>