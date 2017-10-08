<?php

/**
 * @param $id
 */
function addProductToBasket($id)
{
    if (getProductById($id)) {
        $basket = getSession('product_basket');
        $basket = $basket ? $basket : [];
        $basket[] = $id;
        addSession('product_basket', $basket);
    }
}

/**
 * @return int
 */
function countBasketProducts()
{
    return count(getSession('product_basket'));
}