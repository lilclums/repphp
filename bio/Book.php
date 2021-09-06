<?php
class Libro{
    private $editorial='';
    
    function __construct($editorial){
        $this->editorial=$editorial;
    }
    function editor(){
        return $this->editorial;
    }
}
?>