<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $id = $_POST["id"];
        $my_query = "delete from estudiante where id =".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'Registro eliminado exitosamente';
        } else { 
            echo 'ERROR';
        }
    } else {
        echo 'unknown error';
    }

?>