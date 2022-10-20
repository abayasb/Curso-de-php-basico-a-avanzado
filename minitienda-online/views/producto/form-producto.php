<?php if ($edit && $producto && is_object($producto)) : ?>
    <h1>Editar producto <?=$producto->nombre?></h1>
    <?php $url_action = base_url . 'producto/save&id=' . $producto->id ?>
<?php else : ?>
    <h1>Crear nueva producto</h1>
    <?php $url_action = base_url . 'producto/save' ?>
<?php endif; ?>

<form action="<?= $url_action ?>" method="post" enctype="multipart/form-data">
    <label for="id_nombre">Nombre del producto</label>
    <input type="text" name="nombre" id="id_nombre" value="<?= isset($producto) ? $producto->nombre : '' ?>">

    <label for="id_descripcion">Categoria del producto</label>

    <?php $categorias = Utils::showCategoria(); ?>
    <select name="categorias" id="id_categorias">
        <option value="" selected>--Seleccione--</option>
        <?php while ($categoria = $categorias->fetch_object()) : ?>
            <option value="<?= $categoria->id ?>" <?= isset($producto) && is_object($producto) &&  $categoria->id == $producto->categoria_id ? 'selected' : '' ?>> <?= $categoria->nombre ?> </option>
        <?php endwhile; ?>
    </select>

    <label for="id_descripcion">Descripcion del producto</label>
    <input type="text" name="descripcion" id="id_descripcion" value="<?= isset($producto) ? $producto->descripcion : '' ?>">

    <label for="id_precio">Precio del producto</label>
    <input type="number" name="precio" id="id_precio" value="<?= isset($producto) ? $producto->precio : '' ?>">

    <label for="id_stock">stock</label>
    <input type="number" name="stock" value="<?= isset($producto) ? $producto->stock : '' ?>">

    <label for="id_oferta">oferta</label>
    <input type="text" name="oferta" value="<?= isset($producto) ? $producto->oferta : '' ?>">

    <label for="id_imagen">imagen</label>
    
    <?php if (isset($producto) && is_object($producto)) : ?>
        <img src="<?=base_url?>uploads/image/<?=$producto->imagen?>" alt="Imagen camisa" class="thumb" sizes="">
    <?php endif; ?>
    <input type="file" name="imagen" id="id_imagen">

    <input type="submit" value="Enviar">
</form>