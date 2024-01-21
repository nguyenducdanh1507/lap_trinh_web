<?php
$arr = array(1, 5, 10, 2, 9, 45, 3, 7);

// Sắp xếp mảng giảm dần
rsort($arr);

// Hiển thị mảng sau khi sắp xếp
foreach ($arr as $value) {
    echo $value . ' ';
}
?>