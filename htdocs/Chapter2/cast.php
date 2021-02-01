<?php
var_dump((int)1530.95); // int(1530) 0の方向にまとめる
var_dump((int)-1530.95); // int(-1530)
var_dump((int)true); // int(1) true→1 false→0に変換される
var_dump((string)true); // string(1) "1"
var_dump((int)false); // int(0)
var_dump((string)false); // string(0) "" 
var_dump((array)108); // array(1) { [0] => int(108)}
var_dump((unset)1530.95); // null
