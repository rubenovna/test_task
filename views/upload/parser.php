<?php


$i = 1;

foreach ($prodo as $course) {
    echo " No - " . $i . '<br/>';
    echo " ПОСТАВЩИК- " . $course['shipper'] . '<br/>';
    echo "ПРОДУКТ - " . $course['product'] . '<br/>';
    echo "ЦЕНА - " . $course['price'] . '<br/>';


    $i++;
}