<section class="login">
    <h2>Inicar una Sesion de Usuario</h2>
    <form action="./backend/logica/login.php" method="POST" class="formulario-login">
        <input type="text" placeholder="Usuario:" name="usuario">
        <input type="password" placeholder="Contraseña:" name="password">
        <input type="submit" value="Ingresar">
    </form>
    <?=isset($_GET['error'])?'ERROR AL INGRESAR CREDENCIALES':''?>
</section>