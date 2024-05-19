<?php

// $text = 'aabBcde';
// $text = array_count_values(str_split(strtolower($text)));
// $text = array_count_values($text);
// print_r($text);
// $lowText = strtolower($text);
// $length = '';

// foreach(str_split($lowText) as $letter){
//     if(substr_count($lowText , $letter) >= 2 && !substr_count($length, $letter)){
//         $length .= $letter;
//     }
// }

// return strlen($length);
/////////////////////////////////////////////////////////////
/*
$dna = 'AAAG';

$replace = str_replace(['A', 'G'], ['T', 'C'], $dna);

$result = [];
foreach(str_split($dna) as  $char){
    switch ($char){
        case 'A':
            array_push($result, 'T');
            break;
        case 'T':
            array_push($result, 'A');
            break;
        case 'C':
            array_push($result, 'G');
            break;
        case 'G':
            array_push($result, 'C');
            break;
} 


}

var_dump(implode('', $result));

function DNA_strand($dna) {
    return strtr($dna, 'ACGT', 'TGCA');
  }
  */
//////////////////////////////////////////////////////////////////////////
// For example (Input -> Output):
// 2 -> 3 (1 + 2)
// 8 -> 36 (1 + 2 + 3 + 4 + 5 + 6 + 7 + 8)

// $result = 0;
// for ($i = 1; $i <= 8; $i++) {
//     $result += $i;
// }

// var_dump($result);

// function summation($n)
// {
//     return array_sum(range(1, $n));
// }
//////////////////////////////////////////////////////////////////////////

//$bears = ['tatra', 'warka', 'tyskide'];
//$bears2 = ['tatra'];
//var_dump(array_diff($bears, $bears2));

//////////////////////////////////////////////////////////////////////////
// usuń co 2 element z tablicy:
//$array = ['hello', 'world', 'buy'];
//$returnArr = [];
//
//$returnArr = array_filter($array, function ($key){
//    echo $key;
//}, ARRAY_FILTER_USE_KEY);

//
//foreach($array as $key => $item){
//    ($key%2) ? '' : array_push($returnArr, $item);
//}
//
//print_r($returnArr);
////////////////////////////////////////////////////////////////////////////
/// example:
//Sam Harris => S.H
//patrick feeney => P.F

//function abbrevName($name)
//{
//    $arrName = explode(' ',$name);
//    return strtoupper($arrName[0][0].'.'.$arrName[1][0]);
//}
//
//echo abbrevName('patrick feeney');
// rozwiązane tak samo jak inni :D
////////////////////////////////////////////////////////////////////////////////////////////
//Write a function that removes the spaces from the string, then return the resultant string.

//function no_space(string $s): string {
//    //return trim($s); samo trim() usówa tylko z począ tku i końca
//    $arr = array_filter(explode(' ', $s), function ($var){
//       return  $var !== '';
//    });
//    return implode('', $arr);
//}
//
//echo no_space("     8 j 8   mBliB8g  imjB8B8  jl  B    ");
//
//// z CV:
//function no_space(string $s): string {
//    return str_replace(' ', '', $s);
//}

////////////////////////////////////////////////////////////////////////////////////////////
//Check to see if a string has the same amount of 'x's and 'o's.
// The method must return a boolean and be case insensitive. The string can contain any char.

//function XO($s): bool
//{
//    $o = substr_count(strtolower($s), 'o');
//    $x = substr_count(strtolower($s), 'x');
//    return $o === $x ? true : false;
//}
//var_dump( XO("janxxxkoOo") );
// w sumie można tak porónać: return substr_count(strtolower($s), 'o') === substr_count(strtolower($s), 'x');

////////////////////////////////////////////////////////////////////////////////////////////
//Make a function that returns the value multiplied by 50 and increased by 6.
// If the value entered is a string it should return "Error".
//function problem($x){
//    return is_string($x) ? 'Error' : $x*50+6;
//}
//echo problem(1);
////////////////////////////////////////////////////////////////////////////////////////////





