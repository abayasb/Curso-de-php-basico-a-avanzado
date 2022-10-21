<?php if (isset($producto)) : ?>
    <h1> <?= $producto->nombre ?>  </h1>
    <div id="detail-product">
        <div class="image">
            <?php if ($producto->imagen != null) : ?>
                <img src="<?= base_url ?>/uploads/image/<?= $producto->imagen ?>" alt="">
            <?php else : ?>
                <img src="<?= base_url ?>assets/img/camiseta.png" alt="">
            <?php endif; ?>
        </div>
        <div class="data">
            <p class = "description"> <?= $producto->nombre ?>  <?= $producto->descripcion ?></p>
            <p class = "price"><?=$producto->precio?>$</p>

            <a href="<?=base_url?>carrito/add&id=<?= $producto->id?>" class="button">Comprar</a>
        </div>
    </div>
<?php else : ?>
    <h1>Producto no existe</h1>
<?php endif; ?>