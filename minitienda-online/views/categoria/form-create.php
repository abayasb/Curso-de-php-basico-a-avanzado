<h1>Crear nueva categoria</h1>

<form action="<?= base_url ?>categoria/save" method="post">
    <label for="id_nombre">Nombre de la catogoria</label>
    <input type="text" name="nombre" id="id_nombre">
    <input type="submit" value="Enviar">
</form>