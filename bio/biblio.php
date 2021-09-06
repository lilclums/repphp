<?php
include ('mate.php');
class  biblioteca{
   private $coleccion;

   function __construct(){
       $this->coleccion=array();
   }
   function adicionar($material){
       array_push($this->coleccion,$material);
    }
    function verMateriales(){
        for ($i=0; $i <count($this->coleccion) ; $i++){
            echo $this->coleccion[$i]->getAutor();
        }

    }
}

$biblio=new biblioteca();
$ob1=new Libro('virtual',354,'Gabo','100 dias',1987,'buen estado','planeta',200,20);

$biblio->adicionar($ob);
$biblio->adicionar($ob1);

$biblio->verMateriales();

?>