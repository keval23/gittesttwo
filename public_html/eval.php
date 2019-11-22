<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ans_1 = 200;
$ans_2 = 199;

$str =  "((100 * ans_2) / ans_1)";
$str = str_replace('ans_2', $ans_2, $str);
$str = str_replace('ans_1', $ans_1, $str);


//$str =  $a > $b ? 'a is big': 'b is big';

echo $str;
echo "<br/>---<br/>";
$ans_3 = eval("return ".$str.";");

echo $ans_3;
echo "<br/>---<br/>";
$c =
$formula = "ans_3 >= 100 ? 100: (ans_3 >=91 ? 80: (ans_3 >= 80 ? 75 :0))";
$formula = str_replace('ans_3', $ans_3, $formula);
echo $formula;
echo "<br/>---<br/>";
$c = eval("return ".$formula.";");
echo $c;

echo "<br/>---<br/>";
    $ans = eval("return (100*1/0);");
echo $ans;

echo "<br/>---<br/>";
$formula = "(100.11 >= 100 ? 100: (111.11 >=91 ? 80: (111.11 >= 80 ? 75 :0)))";

$c = eval("return ".$formula.";");
echo $c;
