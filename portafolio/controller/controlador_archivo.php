<?php

class ControladorArchivo{
    public function archivo(){
        include_once("views/Archivo/archivo.php");
    }

    public function MUsuario(){
        include_once("views/Archivo/MUsuario.php");
    }

    public function MTecnico(){
        include_once("views/Archivo/MTecnico.php");
    }

    public function JavaS(){
        include_once("views/Archivo/JavaS.php");
    }
}

?>