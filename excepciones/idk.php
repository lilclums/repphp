<?php
//PDO= PHP data objects
//dsn= datasource name
$dsn='mysql:host=localhost;dbname=test';
$user='root';
$psw='';
$conexion='a';
try {
    $conexion=new PDO($dsn, $user, $psw);
    $statement=$conexion->prepare('select * from abc');
    $statement->execute();
} 

catch (PDOException $h) {
    echo $h->getMessage();
    echo '<br>';
}
foreach ($statement as $key){
    echo 'Nombre: '.$key[0].' - ';
    echo 'Numero: '.$key[1].' - ';
    echo 'Texto: '.$key[2].' - ';
    echo 'Zona: '.$key[3].'<br>';
}

echo '<br>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch()) {
    echo $key['nombre'].'<br>';
}

echo '<br>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';

$statement->execute();

$resultados=$statement->fetchAll();
//var_dump($resultados);
foreach ($resultados as $key) { 
    echo $key['numero'].'<br>';
}

echo '<br>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
//indice
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_NUM)) {
    echo $key['2'].'<br>';
}
echo "<br>'indice'<br>";

echo '<br>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
//asosiativo
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_ASSOC)) {
    echo $key['zona'].'<br>';
}
echo "<br>'asociativo'<br>";

echo '<br>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
//objeto
$statement->execute();

while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
    echo $key->nombre.'<br>';
}
echo "<br>'objetos'<br>";

echo '<br>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
//objeto
$statement=$conexion->prepare("select * from abc ORDER BY nombre");
$statement->execute();

while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
    echo $key->nombre.'<br>';
}
echo "<br>'objetos'<br>";

echo '<br>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';
//objeto
$statement=$conexion->prepare("insert into abc values ('mouse','35','squeak','wild')");
$statement->execute();

while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
    echo $key->nombre.'<br>';
}
echo "<br>'objetos'<br>";
//var_dump($conexion);
//echo '<br>';
//print_r($conexion);
?>