<?php

$arr = array (1, 5, 10, 2, 9, 45, 3, 7, 16);

$chieu_dai_cua_mang = COUNT($arr);


$la_so_chinh_phuong = 0;

for ($i = 0; $i < $chieu_dai_cua_mang; $i++) {

    $la_so_chinh_phuong = 0;
    for ($j = 1; $j <= $arr[$i]; $j++) {

        $tich = $j * $j;
        if ($tich == $arr[$i]) {
            $la_so_chinh_phuong = 1;
        }

    }
    if ($la_so_chinh_phuong == 1) {
        print  $arr[$i] . " ";
    }

}