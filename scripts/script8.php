<?php
$arr = array(1, 5, 10, 2, 9, 45, 3, 7);

// Hiển thị các giá trị là số chẵn
foreach ($arr as $value) {
    if ($value % 2 == 0) {
        echo $value . ' ';
    }
}
?>