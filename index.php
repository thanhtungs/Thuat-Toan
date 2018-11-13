<?php

    // Thuat toan bubble sort
//    function bubbleSort($arr)
//    {
//        for ($i = 0; $i < (count($arr) -1); $i++) {
//            for ($j = $i + 1; $j < count($arr); $j++) {
//                if ($arr[$i] > $arr[$j]) {
//                    $tmp = $arr[$j];
//                    $arr[$j] = $arr[$i];
//                    $arr[$i] = $tmp;
//                }
//            }
//        }
//
//        for ($i = 0; $i <= count($arr); $i++) {
//            echo $arr[$i] . ' ';
//        }
//    }
//
//    $arr = [1, 6, 3, 0, 7, 923, 534534, -9, 'Thanh Tung'];
//
//    bubbleSort($arr);

    //Thuat toan tim kiem tuyen tinh

    $arr = [321 , 312, 3, 4, 5, 45, 56, 5, 7, 6, 787, 8, 7, 2];

    $find = '5';

    for ($i = 0; $i <= count($arr); $i ++) {
        if ($arr[$i] === $find) {
            echo 'So can tim '. $find . ' nam o vi tri ' . $i . '</br>';
        }
        return false;
    }

?>