<?php if (isset($producto)) : ?>
    <h1> <?= $producto->nombre ?> </h1>
    <?php if ($producto->imagen != null) : ?>
        <img src="<?= base_url ?>/uploads/image/<?= $producto->imagen ?>" alt="">
    <?php else : ?>
        <img src="<?= base_url ?>assets/img/camiseta.png" alt="">
    <?php endif; ?>
    <p><?= $producto->descripcion ?></p>
    <p><?= $producto->precio ?></p>
    <a href="" class="button">Comprar</a>
<?php else: ?>
    <h1>Producto no existe</h1>
<?php endif; ?>