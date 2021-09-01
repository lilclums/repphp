<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcion 3</title>
</head>
<body>
<h1>media</h1>
<form action="" method="POST" class="form"> 
<p>numero 1</p>
<input name="numero1" type="number" step="any" class="input">
<br>
<p>Numero 2</p>
<input name="numero2" type="number" step="any" class="input">
<br>
<button type="submit" class="enviar" >Enviar</button>


</form>
</body>
</html>
<?php 
    $num = $_POST["numero1"];
    $num2 = $_POST["numero2"];

    function gennum (){
        while ($i <= 10) {
            $i = 0;
            $suma = rand($num, $num2)+$i;
            $i++;
        }
        return $suma;

        $media = $suma / 10;
        echo "La media de los numeros es $media";
    }
    $func = gennum();
    echo $func;
    ?>
