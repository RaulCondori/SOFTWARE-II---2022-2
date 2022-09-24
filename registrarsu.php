<?php
if(empty($_POST["registro"])){
    if(empty($_POST["codigo"]) or empty($_POST["usuario"]) or empty($_POST["clave"]) or empty($_POST["rol"])){
        echo '<div>Campos Vacios</div>';
    }else{
        $codigo = $_POST["codigo"];
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $rol = $_POST["rol"];
        $sql = $conexion->query("insert into FISCALIZADOR (codFizcac,FISC_USUARIO,FISC_CLAVE,ID_ROL) values('$codigo','$usuario','$clave','$rol')");
        if($sql==1){
            echo '<div>Usuario Registrado</div>'
        }else {
            echo '<div>Error de Registro</div>'
        }
    }
}
?>