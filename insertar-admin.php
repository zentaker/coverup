<?php

require_once('bd_conexion.php');

if($conn->ping() ) {
    echo "conectado";

} else {
    echo "NO!";
}





    json_encode($_POST);
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $opciones = array(
        'cost' => 12
    );

    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

    try {
        include_once 'bd_conexion.php';
        $stmt = $conn->prepare("INSERT INTO admins (usuario, nombre, password) VALUES (?,?,?)");
        $stmt->bind_param("sss", $usuario, $nombre,  $password_hashed);
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if($stm->affected_rows){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_admin' => $stmt

            );
            
        } else {
            $respuesta = array(
                'respuesta' => 'error'

            );

        } 
        $stmt->close();
        $conn->close();


    }catch(Exception $e) {
        echo "Error: ". $e->getMessage();
    } 

    die(json_encode($respuesta));

if(isse($_POST['login-admin'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    

    try {
        include_once 'bd_conexion.php';
        $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?;");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($id_admin, $usuario_admin, $nombre_admin, $password_admin);
        if($stmt->affected_rows) {
            $existe = $stmt->fetch();
            if($existe){
                
                    if(password_verify($assword, $password_admin) ) {
                        $respuesta = array(
                            'respuesta' => 'exitoso'
                        );

                    } else {
                        $respuesta = array(
                            'respuesta' => 'fallo'
                        );

                    }
                
                
            } else {
                $respuesta = array (
                    'respuesta' => 'no existe'
                );

            }
        }
 
    } catch(Exception $e) {
        echo "Error: ". $e->getMessage();

    }
    die(json_encode($respuesta));
}


    



    






