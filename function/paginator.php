<?php

const PAGINATE_OFFSET = 'offset';
const PAGINATE_LENGTH = 'length';
const PAGINATE_TEMPLATE = 'template';

/**
 * @param $count
 * @param int $perPage
 * @param string $pageParam
 * @return array
 */
function paginate($count, $perPage = 5, $pageParam = 'page')
{
    $pages = ceil($count / $perPage);

    $page = get($pageParam);

    if (!($page > 0 && $page <= $pages)) {
        $page = 1;
    }

    $template = '';
    for ($i = 1; $i <= $pages; $i++) {
        $template .= '<a href="';
        $template .= "?{$pageParam}={$i}";
        $template .= '">';
        $template .= $i;
        $template .= '</a> ';
    }

    $offset = ($page - 1) * $perPage;

    return [
        PAGINATE_OFFSET => $offset,
        PAGINATE_LENGTH => $perPage,
        PAGINATE_TEMPLATE => $template
    ];
}