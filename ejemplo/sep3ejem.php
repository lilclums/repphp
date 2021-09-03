<?php
include ('persona.php');
//notacion camell case
class Aprendiz extends Persona{
    private $nombre;
    private $documento;
    private $ficha;

function __construct($nombre,$documento,$ficha,$ciudad,$telefono){
    parent::__construct($ciudad,$telefono);
    $this->nombre=$nombre;
    $this->documento=$documento;
    $this->ficha=$ficha;
    //echo 'constructor: ON <br>';
}

    function setter($atributo,$valor){
        return $this->$atributo=$valor;
    }

/*    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    function setDocumento($documento){
        $this->documento=$documento;
    }

    function setFicha($ficha){
        $this->ficha=$ficha;
    }
*/

    function getter($atributo){
        return $this->$atributo;
    }   
     
    function getNombre(){
        return $this->nombre;
    }

    function getDocumento(){
        return $this->documento;
    }

    function getFicha(){
        return $this->ficha;
    }
    
}
/*
$ob=new Aprendiz("Clums", 666, 333);

echo $ob->getNombre();
echo '<br>';

echo $ob->getDocumento();
echo '<br>';

echo $ob->getFicha();
echo '<br>';
*/

/*
//second one
$ob->setNombre("clumsy");
$ob->setDocumento(123456);
$ob->setFicha(2142329);

echo $ob->getNombre();
echo '<br>';

echo $ob->getDocumento();
echo '<br>';

echo $ob->getFicha();
echo '<br>';

var_dump($ob);
echo '<br>';

$num=10;
$real=1.5;
$cadena="I may love programing";
$vec=[1,2,3,4,5];
var_dump($num);
echo '<br>';

var_dump($real);
echo '<br>';

var_dump($cadena);
echo '<br>';

var_dump($vec);
echo '<br>';
*/

// getter-setter
$ob=new Aprendiz("Clums", 666, 333,"soacha",7665510);
$ob->setter("documento",999);
$ob->setter("nombre",767);
$ob->setter("ficha",345);

echo $ob->getNombre();
echo '<br>';

echo $ob->getDocumento();
echo '<br>';

echo $ob->getFicha();
echo '<br>';

echo $ob->datos();



?>