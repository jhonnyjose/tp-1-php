<?php

/**
 * Retorna un array con todos las productos.
 *
 * Cada producto vuelve como un array con las siguientes claves:
 * * producto_id
 * * nombre
 * * precio
 * * descripcion
 * * imagen1
 * * imagen2
 * * imagen3
 * * imagen_descripcion
 * * tabla de talles
 * * imagen_descripcion_talles
 *
 * @return array[]
 */
function getProductos(): array {
    $archivo = __DIR__ . '/../data/productos.json';
    $contenido = file_get_contents($archivo);
    return json_decode($contenido, true);
}

/**
 * Retorna los datos del producto asociado al $id provisto por parámetro.
 *
 * @param int $id
 * @return array
 */
function getProductoById(int $id): array {
    $productos = getProductos();
//se busca el producto que tenga el id

    foreach($productos as $producto) {
        if($producto['producto_id'] === $id) {
            // se retorna el producto seleccionado
            return $producto;
        }
    }
}

