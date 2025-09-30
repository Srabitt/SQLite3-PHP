<?php
// require_once './backend/logica/login-verify.php';
require_once './backend/logica/consumir.php';
?>

    <h1>Perfil del usuario</h1>
    

    <table>
        <tr>
            <th>ID</th>
            <th>NOBRES USUARIOS</th>
            <th>CONTRASEÑA USUARIOS</th>
            <th>OPCIONES</th>
        </tr>
        <?php foreach ($data as $key => $value):?>
        <tr>
            <td><?=$value['id']?></td>
            <td><?=$value['user']?></td>
            <td><?=$value['password_user']?></td>
            <td>
                <!-- Podria crear una clase para realziar todo esto, que con una simple clase ente el from con metodo POST -->
                <a href="./backend/logica/eliminar-usuario.php?id=<?=$value['id']?>">eliminar</a> <!-- Post -->
                <a href="?id=<?=$value['id']?>&usuario=<?=$value['user']?>&contenido=editar">editar</a>
            </td>
            
        </tr>
        <?php endforeach;?>
    </table>
