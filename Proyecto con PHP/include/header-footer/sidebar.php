<?php include_once("./include/php/helpers.php") ?>
<aside class="sidebar">
    <div class="block-form">
        <h3>Identificate</h3>
        <form action="login.php" method="post">
            <label for="id_email">Email</label>
            <input type="email" name="email" id="id_email" placeholder="Ingrese su email">
            <label for="id_password">Password</label>
            <input type="password" name="password" id="id_password" placeholder="Ingrese su contraseña">
            <input type="submit" value="Entrar">
        </form>
    </div>
    <div class="block-form">
        <h3>Registrate</h3>
        <form action="./include/php/register.php" method="post">
            <label for="id_nombre">Nombre</label>
            <input type="text" name="nombre" id="id_nombre" placeholder="Ingrese su nombre" maxlength="30">
            <?php echo isset($_SESSION['errores']) ? viewErrors($_SESSION['errores'],'nombre') : '' ?>
            <label for="id_apellido">Apellido</label>
            <input type="text" name="apellido" id="id_apellido" placeholder="Ingrese su apellido" maxlength="30">
            <?php echo isset($_SESSION['errores']) ? viewErrors($_SESSION['errores'],'apellido') : '' ?>
            <label for="id_email">Email</label>
            <input type="email" name="email" id="id_email" placeholder="Ingrese su email">
            <?php echo isset($_SESSION['errores']) ? viewErrors($_SESSION['errores'],'email') : '' ?>
            <label for="id_password">Password</label>
            <input type="password" name="password" id="id_password" placeholder="Ingrese su contraseña">
            <?php echo isset($_SESSION['errores']) ? viewErrors($_SESSION['errores'],'password') : '' ?>
            <input type="submit" value="Register" name="send">
        </form>
        <?php deleteErrors()?>
    </div>
</aside>