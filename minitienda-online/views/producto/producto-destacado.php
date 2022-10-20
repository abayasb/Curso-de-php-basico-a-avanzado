 <?php while ($producto = $productos->fetch_object()) : ?>
     <div class="product">
         <a href="<?= base_url ?>prodcuto/show$id=<?= $producto->id ?>">
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