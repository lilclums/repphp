<?php


include_once("model/clientes.php");
include_once("model/conexion.php");


class ControladorClientes{

    public function inicio(){

        $Clientes=Clientes::consultar();

        include_once("views/clientes/inicio.php");

    }

    public function crear(){

            if($_POST){
                print_r($_POST);
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $correo=$_POST['correo'];
                Clientes::crear($nombre,$apellido,$correo);
                header("Location:./?controlador=clientes&accion=inicio");
            }

        include_once("views/clientes/crear.php");
    }

    public function editar(){

        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $correo=$_POST['correo'];
            Clientes::editar($id,$nombre,$apellido,$correo);
            header("Location:./?controlador=clientes&accion=inicio");
        }

        $id=$_GET['$id'];

        $Clientes=(Clientes::buscar($id));


        include_once("views/clientes/editar.php");
    }

    public function borrar(){
        print_r($_GET);

        $id=$_GET['$id'];

        Clientes::borrar($id);
        header("Location:./?controlador=clientes&accion=inicio");

    }
}

?>