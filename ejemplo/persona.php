<?php
class Persona{
    private $ciudad='';
    private $telefono=0;

    function __construct($ciudad,$telefono){
        $this->ciudad=$ciudad;
        $this->telefono=$telefono;
    }

    function datos(){
        return 'Lives in: '.$this->$ciudad.' and  their phone number is: '.$this->$telefono;
    }
}

?>