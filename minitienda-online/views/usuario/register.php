<h1>Registro</h1>


<?php if (isset($_SESSION['register']) &&  $_SESSION['register']=='complete'):?>
        <strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) &&  $_SESSION['register']=='failed'):?>
    <strong class = "alert_red">Registro fallido</strong>
<?php endif; ?>
<?php Utils::delete_session('register'); ?>

<form action="<?=base_url?>Usuario/save" method="post">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="" required>

    <label for="">Apellido</label>
    <input type="text" name="apellido" id="" required>

    <label for="">Email</label>
    <input type="email" name="email" id="" required>

    <label for="">Password</label>
    <input type="password" name="password" id="" required>

    <input type="submit" value="Registarse">
</form>