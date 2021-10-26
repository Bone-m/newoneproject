<?php
function get_categories($link)
{
    $sql = "SELECT * FROM testname";
    $result = mysqli_info($link, $sql);
    echo '<pre>';
    var_dump($result);
    echo '</pre>';
}
$categories = get_categories($link);
