<?php

require_once "../core/regular_expression.php";

$str = new String_Match();

$str -> str_match('abcd','abc\w');
$str -> str_match('abcd','abc\d');
$str -> str_match('abc1','abc\d');
$str -> str_match('abc d','abc\s');
$str -> str_match('mital', '^m');
$str -> str_match('sangita', 'ta$');
$str -> str_match('abcd','a*');
$str -> str_match('abcd','a+');
$str -> str_match('ab1d','ab.d');
$str -> str_match('abcd','a[dab]c');
$str -> str_match('abcd','a[dac]c');
$str -> str_match('a3cd','a[1-5]c');
$str -> str_match('Hi Mital', '[a-zA-Z]');
$str -> str_match('sangita', 's[^bcd]n');
$str -> str_match('sangita', 's[^acd]n');

$str -> str_extract("Hi Mital","/hi [mno]/i");
$str -> str_extract("1999 Mital","/(?<Year>\d+) (?<Name>[a-zA-Z]+)/");

?>