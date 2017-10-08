<?php

/**
 * @param mixed $paramName
 * @return null
 */
function get($paramName) {
    return isset($_GET[$paramName]) ? $_GET[$paramName] : null;
}

/**
 * @param mixed $paramName
 * @return null
 */
function post($paramName) {
    return isset($_POST[$paramName]) ? $_POST[$paramName] : null;
}