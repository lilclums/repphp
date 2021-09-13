<?php
include ('animal.php');
    class Ave extends Animal implements Locomocion{
        public $pico;
        public $pata;

        function __construct($nombre,$clase,$pico,$pata){
            parent::__construct($nombre,$clase);
            $this->pico=$pico;
            $this->pata=$pata;
        }
        function movimiento(){
            echo $this->nombre.' vuela y se mueve por su pata '.$this->pata;
        }
        function emitirSonido($sonido){
            echo $this->nombre.' hace '.$sonido;
        }
    }

    class Pez extends Animal implements Locomocion{
        public $familia;
        public $habitat;

        function __construct($nombre,$clase,$familia,$habitat){
            parent::__construct($nombre,$clase);
            $this->familia=$familia;
            $this->habitat=$habitat;
        }
        function movimiento(){
            echo ' movimineto caracteristico de los peces e la familia '.$this->familia;
        }
        function emitirSonido($sonido){

        }
    }

$tiburon=new Pez("tiburon","pez","cartilaginosos","oceano");    
$paloma=new Ave("paloma","ave","delgados","anisodactila");

$tiburon->movimiento(); 
$paloma->movimiento(); 
$paloma->emitirSonido('gorjeo');
?>