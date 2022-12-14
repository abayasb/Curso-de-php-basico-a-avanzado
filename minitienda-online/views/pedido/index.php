<?php if (isset($_SESSION['identity'])) : ?>
    <h1>Hacer pedido</h1>
    <a href="<?= base_url ?>carrito/index">Ver los productos</a>
    <h3>Dirección para el envio:</h3>
    <form action="<?= base_url . 'pedido/add' ?>" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required />

        <label for="ciudad">Ciudad</label>
        <input type="text" name="localidad" required />

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required />

        <input type="submit" value="Confirmar pedido" />
    </form>

<?php else : ?>
    <h1>Necesitas estar identificado</h1>
    <p>Necesitar iniciar session para continuar</p>
<?php endif; ?>