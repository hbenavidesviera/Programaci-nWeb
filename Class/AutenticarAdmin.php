<?php
/*Creacion de Clase Autenticar*/
/**
 * Autor: PGATICA
 * Fecha: 19-jun-2023
 */
require ("Class/Conexion.php");
session_start();
Class Autenticar{
    private $rut;
    private $clave;

    private $idperfil;
    

    public function __construct($rut,$clave){
        $this->rut = $rut;
        $this->clave = $clave;
    
    }

    public function Validar(){
        $conexion = new Conexion();
        $conexion->Conecta();
        $idperfil = 1;
        
        $consulta = "SELECT * FROM usuario WHERE rut = '$this->rut' AND clave = '$this->clave' AND idperfil ='$idperfil'";
        
        $resultado = $conexion->Ejecuta($consulta);

        if ($resultado->num_rows == 1) {
           
            $_SESSION["rut"] = $this->rut;
            header('Location: PanelAdmin.php');
        } else {
            header('Location: acceso.php');
        }

    }

}


?>