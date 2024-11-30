<?php

declare(strict_types=1); // <- solo de puede a hacer a nivel de archivo

function render_template(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}
?>