<?php
function get_categories($mysql)
{
    $sql = "SELECT * FROM `testname`";
    $result = mysqli_info($mysql, $sql);
    echo '<pre>';
    var_dump($result);
    echo '</pre>';
}
get_categories($mysql);
