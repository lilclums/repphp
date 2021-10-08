<?php

class Clientes{

    public $id;
    public $nombre;
    public $apellido;
    public $correo;

    public function __construct($id, $nombre, $apellido, $correo){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
    }

    public static function consultar(){
        $listaClientes=[];
        $conexionBD=Conexion::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM usuarios");

        foreach($sql->fetchAll() as $clientes){

            $listaClientes[]= new Clientes($clientes['ID'],$clientes['nombre'],$clientes['apellido'],$clientes['correo']);
        }

        return $listaClientes;
    }


    public static function crear($nombre,$apellido,$correo){
        $conexionBD=Conexion::crearInstancia();

        $sql= $conexionBD->prepare("INSERT INTO usuarios(nombre, apellido, correo) VALUES(?,?,?)");
        $sql->execute(array($nombre,$apellido,$correo));
    }



    public static function borrar($id){
        $conexionBD=Conexion::crearInstancia();

        $sql= $conexionBD->prepare("DELETE FROM usuarios WHERE ID=? ");
        $sql->execute(array($id));
    }

    public static function buscar($id){
        $conexionBD=Conexion::crearInstancia();

        $sql= $conexionBD->prepare("SELECT * FROM usuarios WHERE ID=?");
        $sql->execute(array($id));

        $Clientes=$sql->fetch();
        return new Clientes($Clientes['ID'],$Clientes['nombre'],$Clientes['apellido'],$Clientes['correo']);
    }

    public static function editar($id,$nombre,$apellido,$correo){

        $conexionBD=Conexion::crearInstancia();

        $sql= $conexionBD->prepare("UPDATE usuarios SET nombre=?, apellido=?, correo=? WHERE ID=?");
        $sql->execute(array($nombre,$apellido,$correo,$id));

    }

}


?>