<h1>Gestion de producto</h1>
<a href="<?= base_url ?>producto/create" class="button button-small">
    Crear producto
</a>

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == "correct") : ?>
    <strong class="alert_green">Registro completado correctamente</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != "correct") : ?>
    <strong class="alert_red">Error en el registro</strong>
<?php endif; ?>
<?php Utils::delete_session('producto') ?>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == "correct") : ?>
    <strong class="alert_green">Registro ha borrado correctamente</strong>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] != "correct") : ?>
    <strong class="alert_red">Registro NO ha borrado</strong>
<?php endif; ?>
<?php Utils::delete_session('delete') ?>


<table border="1">
    <tr>
        <th> Id </th>
        <th> categoria_id </th>
        <th> Nombre </th>
        <th> descripcion </th>
        <th> precio </th>
        <th> stock </th>
        <th> fecha </th>
        <th> Action </th>

    </tr>
    <?php while ($producto = $productos->fetch_object()) : ?>
        <tr>
            <td> <?= $producto->id ?></td>
            <td> <?= $producto->categoria_id ?></td>
            <td> <?= $producto->nombre ?></td>
            <td> <?= $producto->descripcion ?></td>
            <td> <?= $producto->precio ?></td>
            <td> <?= $producto->stock ?></td>
            <td> <?= $producto->fecha ?></td>
            <td>
                <a href="<?= base_url ?>producto/edit&id=<?= $producto->id ?>" class="button button-gestion">Edit</a>
                <a href="<?= base_url ?>producto/delete&id=<?= $producto->id ?>" class="button button-gestion button-red">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>