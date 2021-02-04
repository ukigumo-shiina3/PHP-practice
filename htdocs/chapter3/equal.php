<pre>
<?php
var_dump('3.14' == 3.14000); //bool(true)
var_dump('3.14E2' == 314); // bool(true)
var_dump('0x10' == 16); // bool(false)
var_dump('010' == 8); // bool(false)
var_dump('0b11' == 3); // bool(false)
var_dump('13xyz' == 13); // bool(true)
var_dump('X' == 0); // bool(true)  先頭部分に数値がないため、'X'は数値に変換するとゼロになる
var_dump('3.14' == '3.14000'); // bool(true)
var_dump('3.14E2' == '314'); // bool(false)
var_dump('13xyz' == '13'); // bool(true)
