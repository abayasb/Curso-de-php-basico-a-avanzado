<?php if ($categoria) : ?>
    <h1><?= $categoria->nombre ?></h1>
    <?php if ($productos->num_rows == 0) : ?>
        <h2>Producto no existe</h2>
    <?php else : ?>
        <?php while ($producto = $productos->fetch_object()) : ?>
            <div class="product">
                <a href="<?= base_url ?>producto/show&id=<?= $producto->id ?>">
                    <?php if ($producto->imagen == null) : ?>
                        <img src="<?= base_url ?>assets/img/camiseta.png" alt="aa">
                    <?php else : ?>
                        <img src="<?= base_url ?>uploads/image/<?= $producto->imagen ?>" alt="aa">
                    <?php endif; ?>
                    <h2><?= $producto->nombre ?></h2>
                </a>
                <p><?= $producto->precio ?></p>
                <a href="" class="button">Comprar</a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php else : ?>
    <h1>Categoria no existe</h1>
<?php endif; ?>