<?php
// require_once './backend/logica/login-verify.php';
require_once './backend/logica/consumir.php';
?>
<section class="perfil">
    <h1>Perfil del usuario</h1>
    <?=$_SESSION['usuario']?>
    <a href="./backend/logica/logout.php">Salir de seccion.</a>

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
                <a href="/backend/logica/eliminar-usuario.php?id=<?=$value['id']?>">eliminar</a>
                <a href="/backend/logica/editar-usuario.php?id=<?=$value['id']?>">editar</a>
            </td>
            
        </tr>
        <?php endforeach;?>
    </table>
</section>