<?php

include ('mate.php');
    class Libro extends Material{
        protected $editorial='';
        protected $paginas='';

        function __construct($editorial,$paginas,$tipoMaterial,$codigo,$autor,$titulo,$año,$status){
            parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
            $this->editorial=$editorial;
            $this->paginas=$paginas;
        }
        function setEditorial($editorial){
            $this->editorial=$editorial;
        }
        function setPaginas($paginas){
            $this->paginas;
        }

        function getEditorial(){
            return $this->editorial;
        }
        function getPaginas(){
            return $this->paginas;
        }
    }

$ob=new Libro('oveja negra',100,'papel',1019,'Manuel Perez','Nintendo games',1960,'inactivo');
echo $ob->material();
echo '<br>';
echo $ob->getEditorial();
echo '<br>';
echo $ob->getPaginas();
echo '<br>';    
?>  

