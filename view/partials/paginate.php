<?php
/**
 * @var int $pages
 * @var int $page
 * @var int $pageParam
 */

for ($i = 1; $i < $pages; $i++)
{
    echo '<a href="';
    echo "?{$pageParam}={$i}";
    echo '">';
    echo $i;
    echo '</a> ';
}