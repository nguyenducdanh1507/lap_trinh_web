<?php
$arr = array(1, 5, 10, 9, 45, 3, 7);

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
foreach ($arr as $value) {
    if (isPrime($value)) {
        echo $value . ' ';
    }
}
?>