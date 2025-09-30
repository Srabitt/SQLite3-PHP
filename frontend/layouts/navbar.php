<nav>
    <ul class="navbar">
        <li><a href="/">Inicio</a></li>
        <?php if($isLogged):?>
            <ul class="navbar">
                <li>USUARIO: <?=$_SESSION['usuario']?></li>
                <li><a href="./backend/logica/logout.php">Salir</a></li>
            </ul>
        <?php endif;?>
    </ul>
</nav>
