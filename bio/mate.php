<?php
include ('book.php');
class Material extends Libro{
    private $tipoMaterial;
    private $codigo;
    private $autor;
    private $titulo;
    private $año;
    private $status;

    function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$editorial){
        parent::__construct($editorial);
        $this->tipoMaterial=$tipoMaterial;
        $this->codigo=$codigo;
        $this->autor=$autor;
        $this->titulo=$titulo;
        $this->año=$año;
        $this->status=$status;
        //echo 'constructor: ON <br>';
    }
    
    function setTipoMaterial($tipoMaterial){
        $this->tipoMaterial->$tipoMaterial;
    }
    function setCodigo($codigo){
        $this->codigo->$codigo;
    }
    function setAutor($autor){
        $this->autor->$autor;
    }
    function setTitulo($titulo){
        $this->titulo->$tipoMaterial;
    }
    function setAño($año){
        $this->año->$año;
    }
    function setStatus($status){
        $this->status->$status;
    }

    function getTipoMaterial(){
        return $this->tipoMaterial;
    }
    function getCodigo(){
        return $this->codigo;
    }
    function getAutor(){
        return $this->autor;
    }
    function getTitulo(){
        return $this->titulo;
    }
    function getAño(){
        return $this->año;
    }
    function getStatus(){
        return $this->status;
    }

}   

$item=new Material("papel",111,"Gabriel","naufrago",1999,"activo","Oveja");

echo $item->getTipoMaterial();
echo '<br>';

echo $item->getCodigo();
echo '<br>';

echo $item->getAutor();
echo '<br>';

echo $item->getTitulo();
echo '<br>';

echo $item->getAño();
echo '<br>';

echo $item->getStatus();
echo '<br>';

echo $item->editor();
echo '<br>';
?>