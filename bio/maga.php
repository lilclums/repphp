<?php
include ('mate.php');
    class Revista extends Material{
        protected $tipo='';
        protected $paginas='';

        function __construct($tipo,$paginas,$tipoMaterial,$codigo,$autor,$titulo,$año,$status){
            parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
            $this->tipo=$tipo;
            $this->paginas=$paginas;
        }
        function setTipo($tipo){
            $this->tipo=$tipo;
        }
        function setPaginas($paginas){
            $this->paginas;
        }

        function getTipo(){
            return $this->tipo;
        }
        function getPaginas(){
            return $this->paginas;
        }
    }

$ob=new Revista('adolecentes',100,'papel',1019,'Manuel Perez','Nintendo games',1960,'inactivo');
echo $ob->material();
echo '<br>';
echo $ob->getTipo();
echo '<br>';
echo $ob->getPaginas();
echo '<br>';    
?>