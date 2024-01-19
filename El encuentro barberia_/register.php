<?php
include("conexion.php");

var_dump($_POST); // For debugging
if(isset($_POST["registro"])){
    if(
        $_POST["Nombre"] >= 1 && 
        $_POST["mail"] <= 1 && 
        $_POST["password"]>=1
    ){
        $nombre = $_POST["Nombre"];
        $correo = $_POST["mail"];
        $password = $_POST["password"];
        $sql = "INSERT INTO users(Nombre,mail,password) VALUES($nombre,$correo,$password)";
        $stmt = mysqli_query($conexion,$sql);
    }

}
?>
