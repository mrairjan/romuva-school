<?php

/**
 * @param $sessionParam
 * @return null|mixed
 */
function getSession($sessionParam)
{
    return isset($_SESSION[$sessionParam]) ? $_SESSION[$sessionParam] : null;
}

function addSession($sessionParam, $value)
{
    $_SESSION[$sessionParam] = $value;
}
