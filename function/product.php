<?php

const PRODUCT_NAME = 'name';
const PRODUCT_ID = 'id';
const PRODUCT_DESCRIPTION = 'description';
const PRODUCT_IMAGE = 'image';

/**
 * @return array
 */
function getProducts()
{
    static $data;

    if (!$data) {
        $data = [];
        $keys = [PRODUCT_ID, PRODUCT_NAME, PRODUCT_DESCRIPTION, PRODUCT_IMAGE];

        $handle = fopen(PRODUCTS_STORAGE, 'r');

        while ($line = fgetcsv($handle)) {
            $data[] = array_combine($keys, $line);
        }

        fclose($handle);
    }

    return $data;
}

/**
 * @return int
 */
function countProducts()
{
    return count(getProducts());
}

/**
 * @param $offset
 * @param int $length
 * @return array
 */
function getSpecificProducts($offset, $length = 5)
{
    $data = getProducts();
    return array_slice($data, $offset, $length);
}

/**
 * @param $id
 * @return array|null
 */
function getProductById($id)
{
    $data = getProducts();

    foreach ($data as $product) {
        if ($product[PRODUCT_ID] === $id) {
            return $product;
        }
    }

    return null;
}