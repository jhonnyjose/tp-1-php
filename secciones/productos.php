<?php
require_once __DIR__ . '/../funciones/productos.php';
$productos = getProductos();
?>


    <section class="container blanco pb-3">
        <div class="row mt-3" >

            <h2 class="col-12 azul text-center mt-3">Productos</h2>

        </div>
        <div class="row">



            <?php
            foreach($productos as $producto):
                ?>
            <div class="col-12 col-sm-4 col-md-3 mt-3">
                <a href="index.php?s=detalles&id=<?= $producto['producto_id'];?>" class="enlaces-productos" >

                        <div class="card">
                                <img src="<?= 'imgs/' . $producto['imagen1'];?>" alt="<?= $producto['imagen_descripcion'];?>">
                                <div class="card-body">
                                    <h3 class="card-title"><?= $producto['nombre'];?></h3>

                                    <p class="card-text"><small class="text-muted">$ <?= $producto['precio'];?></small></p>
                                </div>

                        </div>

                </a>
            </div>
            <?php
            endforeach;
            ?>

        </div>
    </section>

