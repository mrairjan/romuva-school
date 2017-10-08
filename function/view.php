<?php

/**
 * @param string $template
 * @param array $params
 * @param string $templateExtension
 * @param string $path
 */
function view(
    $template,
    array $params = [],
    $templateExtension = 'php',
    $path = PROJECT_DIR . '/view'
) {
    foreach ($params as $key => $value) {
        $$key = $value;
    }

    require_once "{$path}/{$template}.{$templateExtension}";
}