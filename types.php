<?php

dump((float) 'zerfzerfez12');

dump("1 === '1'", 1 === '1'); // false

dump("3 == '3'", 3 == '3'); // true

dump("true == 1", true == 1); // false

dump("false === 0", false === 0); // false

dump("7 == false", 7 == false); // false | true

dump("0 != true", 0 != true); // true

dump("99 != '99'", 99 != '99'); // false

/*
 * bool => false
 *  ->string ''
 *  ->int    0
 *  ->float  0.00
 *  ->array  []
 *
 * int => 1
 *  ->string  '1'
 *  ->boolean true
 *  ->float   1.00
 *  ->array   [1]
 *
 * string =>  'ezfzefez'
 *  ->int     0
 *  ->boolean true
 *  ->float   0.00
 */