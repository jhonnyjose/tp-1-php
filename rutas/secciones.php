<?php

/**
 * Retorno de secciones
 *
 * Ej:
 * ```
 * [
 *     'home' => [
 *          'title' => 'titulo de la seccion',
 *          ...
 *     ],
 *     ...
 * ]
 * ```
 *
 * @return string[][]
 */
function getSeccionesLista() {
    return [
        'home' => [
            'title' => 'Kaiba Underwear',
        ],
        'productos' => [
            'title' => 'Productos',
        ],
        'detalles' => [
            'title' => 'Detalles',
        ],
        'politicas' => [
            'title' => 'Politicas de devolución',
        ],
       'contacto' => [
            'title' => 'Contáctenos',
        ],
        'gracias' => [
            'title' => 'Gracias por escribirnos',
        ], 'gracias-compra' => [
            'title' => 'Gracias por su compra',
        ],
    ];
}
