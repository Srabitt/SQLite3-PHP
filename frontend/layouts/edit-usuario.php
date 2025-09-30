<?php
$id = $_GET['id'];
$usuario = $_GET['usuario'];
?>
<section class="edit-usuario">
    <form action="./backend/logica/editar-usuario.php" method="post">
        <input type="text" value="<?=$id?>" readonly name="id">
        <input type="text" placeholder="usuario" value="<?=$usuario?>" name="usuario">
        <input type="password" placeholder="nueva contraseña..." name='password-new'>
        <input type="password" placeholder="confirmar contraseña..." name="password-confirm">
        <input type="submit" value="Confirmar">
    </form>
    <a href="/?contenido=perfil">Cancelar</a>
</section>