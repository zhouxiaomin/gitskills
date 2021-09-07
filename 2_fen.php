<?php


$arr = [0,1,2,3,4,5,6,7,8,9,10];

$search = 11;

$index = search($arr, $search);
echo ' index=';
echo $index;

function search(array $arr, $target)
{
    $len = count($arr);
    if ($len == 0) {
        return false;
    }

    $left = 0; $right = $len;
    $mid = ($left + $right) >> 1;

    while ($arr[$mid]!= $target) {
        
        $mid = getMid($arr, $left, $right, $target);
        echo $right;

        if($right > $len)
            break;
            // break;
        // echo 'left'.$left;
        // echo 'right'.$right;
        // echo ($right > count($arr));

        // if ($right > count($arr) || $left < 0) {

        //     break;
        // }
    } 
    


    return $mid;
    


}

function getMid($arr,&$left,&$right, $target)
{
    
    $mid = ($left + $right) >> 1;

    if ($arr[$mid] < $target) {
        $left = $mid;
        $mid = ($left + $right) >> 1;
    } elseif ($arr[$mid] > $target) {
        $right = $mid;
        $mid = ($left + $right) >> 1;
    }





    return $mid;
}

function searchByFor(array $arr, $target)
{
    $len = count($arr);
    if ($len == 0) {
        return false;
    }

    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] == $target) {
            return $i;
        }
    }
}