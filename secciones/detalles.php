<?php
require_once __DIR__ . '/../funciones/productos.php';

$id = (int) $_GET['id'];
$producto = getProductoById($id);
?>


<section class="container blanco">
    <div class="row mt-3 mb-3 pt-3" >
        <div class="col-12 col-sm-4">

            <div id="galeria" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#galeria" data-slide-to="0" class="active"></li>
                    <li data-target="#galeria" data-slide-to="1"></li>
                    <li data-target="#galeria" data-slide-to="2"></li>
                    <li data-target="#galeria" data-slide-to="3"></li>

                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= 'imgs/' . $producto['imagen1']?>" alt="<?= $producto['imagen_descripcion'];?>">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= 'imgs/' . $producto['imagen2']?>" alt="<?= $producto['imagen_descripcion'];?>">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= 'imgs/' . $producto['imagen3']?>" alt="<?= $producto['imagen_descripcion'];?>">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= 'imgs/' . $producto['tabla de talles']?>" alt="<?= $producto['imagen_descripcion_talles'];?>">
                    </div>

                </div>

                <a class="carousel-control-prev" href="#galeria" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a class="carousel-control-next" href="#galeria" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>


        </div>
        <div class="col-12 col-sm-8">

            <h2 class="azul"><?= $producto['nombre'];?></h2>

            <p><span class="descuento">Antes $<?= $producto['precio']*1.20;?></span><span class="precio"> $ <?= $producto['precio'];?>  </span></p>
            <p class="stock">En Stock</p>


            <p class="mt-3 mb-3"><?= $producto['descripcion'];?></p>



            <form action="acciones/procesar-compra.php" method="post" class="row text-center" >
                <div class="col-12 col-sm-4">
                    <p>Cantidad: </p>
                    <select name="cantidad" id="cantidad" class="form-select">
                        <option value="1" selected> 1 unidad</option>
                        <option value="2">2 unidad</option>
                        <option value="3">3 unidad</option>
                        <option value="4">4 unidad</option>
                        <option value="5">5 unidad</option>
                        <option value="6">6 unidad</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 mr-0">
                         <p class="mr-3">Talle: </p>
                    <div class="form-check form-check-inline ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="talle" id="s" value="s" checked>
                            <label class="form-check-label" for="s">
                                S
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="talle" id="m" value="m" >
                            <label class="form-check-label" for="m">
                                M
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="talle" id="l" value="l" >
                            <label class="form-check-label" for="l">
                                L
                            </label>
                        </div>



                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <p> Medios de envío</p>
                    <select name="envio" id="envio" class="form-select">
                        <option value="retiro" selected>Retiro en sucursal</option>
                        <option value="envio">Envío</option>
                    </select>
                </div>
                <div class="col-12 text-center mt-3">


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
                        Añadir al Carrito
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <p>Por favor ingresa tus datos de contacto</p>
                                    <input name="fname" id="nombre" placeholder="Tu nombre*"
                                           class="form-control mt-3" type="text"
                                           required data-error="Por favor ingresa tu nombre">
                                    <input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}"
                                           class="form-control mt-3" type="email" required data-error="Por favor ingresa un correo electrónico válido">
                                    <input name="phone" id="phone" placeholder="Teléfono*"
                                           class="form-control mt-3" type="number" required data-error="Por favor ingresa tu número de teléfono">


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button  class="btn btn-primary" type="submit">Finalizar Compra</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </form>






        </div>
        <div class="col-12 col-sm-6 mt-3">
            <a href="index.php?s=politicas" class="link-ver-politicas"  >Ver Políticas de Devolución</a>
            <p class="small">Compuesto de microfibra y lycra. Resistente a la playa y pileta.</p>



        </div>

        <div class="col-12 col-sm-6 mt-3">

            <ul class="medios-pago mt-0">
                <li >visa</li>
                <li>mastercard</li>
                <li>amex</li>
                <li>pagofacil</li>
                <li>mercadopago</li>
            </ul>
        </div>







    </div>

</section>


