<?php
require('../../Inc/function.php');

$date = '2021-07-26';
$shift = '3PM - 6PM';
$status = shiftStatus($shift);

$c_date = date('Y-m-d', time() + 4 * 3600);

if ($date == $c_date && ($status == 'In Progress' || $status == 'Done')) {
    echo "hola";
}