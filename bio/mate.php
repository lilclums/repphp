<?php
    class Material {
    protected $tipoMaterial='';
    protected $codigo=0;
    protected $autor='';
    protected $titulo='';
    protected $año=0;
    protected $status='';

    function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status){

        $this->tipoMaterial=$tipoMaterial;
        $this->codigo=$codigo;
        $this->autor=$autor;
        $this->titulo=$titulo;
        $this->año=$año;
        $this->status=$status;
        //echo 'constructor: ON <br>';
    }
    
    function material(){
        return $this->tipoMaterial.' '.$this->codigo.' '.$this->autor.' '.$this->titulo.' '.$this->año.' '.$this->status;
 }
?>