<?php

require_once 'init.php';

if (post('submit')) {
    addProductToBasket(post('product_id'));
}

$paginateResult = paginate(countProducts());

view('home', [
    'products'         => getSpecificProducts($paginateResult[PAGINATE_OFFSET], $paginateResult[PAGINATE_LENGTH]),
    'paginateTemplate' => $paginateResult[PAGINATE_TEMPLATE]
]);