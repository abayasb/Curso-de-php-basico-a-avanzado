<h1>GESTIONAR CATEGORIA</h1>
<a href="<?=base_url?>categoria/create" class="button button-small">
    Crear categoria
</a>

<?php if(isset($_SESSION['correct'])): ?>
    <strong class="alert_green">Registro completado correctamente</strong>
<?php endif;?>

<table border="1">
<tr>
        <th> Id </th>
        <th> Nombre </th>
        <th> Action </th>
</tr>
<?php while($categoria = $categorias->fetch_object()): ?>
    <tr>
        <td> <?=$categoria->id ?></td>
        <td> <?=$categoria->nombre ?></td>
        <td>Edit | Delete</td>
    </tr>
<?php endwhile; ?>
</table>