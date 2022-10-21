<aside id="lateral">
    <div id="carrito" class="block-aside">
        <h3>Mi carrito</h3>
        <ul>
        <?php $stats = Utils::statsCarrito(); ?>
        <li><a href="<?=base_url?>carrito/index">Productos ( <?=$stats['count']?> )</a></li>
        <li><a href="<?=base_url?>carrito/index">Total :<?=$stats['total']?> $ </a></li>
            <li><a href="<?=base_url?>carrito/index">Ver carrito</a></li>
        </ul>
    </div>
    <div class="block-aside" id="login">
        <?php if (isset($_SESSION['identity'])) : ?>
            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
        <?php else : ?>
            <form action="<?= base_url ?>Usuario/login" method="post">
                <label for="id_email">Email</label>
                <input type="text" id="id_email" name="email">
                <label for="id_password">PASSWORD</label>
                <input type="password" name="password" id="id_password">
                <input type="submit" value="Enviar">
            </form>

        <?php endif ?>
    </div>

    <ul>

        <?php if (isset($_SESSION['admin'])) : ?>
            <li><a href="<?= base_url ?>categoria/index">Gestionar categoria</a></li>
            <li><a href="<?= base_url ?>producto/gestion">Gestionar propducto</a></li>
            <li><a href="<?= base_url ?>pedido/index">Gestionar pedidos</a></li>

        <?php endif ?>

        <?php if (isset($_SESSION['identity'])) : ?>
            <li> <a href="">Mis pedidos</a></li>
            <li><a href="<?= base_url ?>Usuario/logout">Cerrar session</a></li>
        <?php else : ?>
            <li><a href="<?= base_url ?>usuario/create">Registrate aqui perro!</a></li>
        <?php endif ?>
    </ul>

</aside>
<div id="central">