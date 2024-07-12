<?php
/*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
*/

// 1
echo abs(-5.60);
echo "<br>";
echo abs(-5.605);
echo "<br>";
echo abs(-5);
echo "<br>";
echo gettype(abs(11)) . "<br>";
echo "<hr>";

// 2
echo mt_rand() . "<br>";
echo mt_rand() . "<br>";
echo mt_rand(10, 100) . "<br>"; // random number between [10, 100]
echo gettype(mt_rand(11, 30)) . "<br>";
echo "<hr>";

// 3
/// intdiv(a,b) => a/b
echo intdiv(8,4) . "<br>"; // 2
echo intdiv(9,4) . "<br>"; // 2
echo intdiv(-5,2) . "<br>"; // 2
echo gettype(intdiv(11, 3)) . "<br>";
echo "<hr>";

// 4
echo fmod(9,2) . "<br>"; // 1
echo fmod(0,0) . "<br>"; // NAN
echo fmod(11,3) . "<br>"; // 2
echo gettype(fmod(11, 3)) . "<br>";
echo "<hr>";

/*
    Math Functions

    - ceil(Number[Required])
    --- Round Up To Integer

    - floor(Number[Required])
    --- Round Down To Integer
*/

// 1
echo ceil(5.19) . "<br>";  // 6
echo ceil(5.99) . "<br>";  // 6
echo ceil(5.09) . "<br>";  // 6
echo ceil(-5.09) . "<br>"; // -5
echo ceil(-5.19) . "<br>"; // -5
echo "<hr>";

echo floor(-5.19) . "<br>"; // -6
echo floor(5.19) . "<br>"; // -5
echo "<hr>";

/*
Math Functions

- round(Number[Required], Precision[Optional], Mode[Optional])
--- Round Up To Integer
--- Mode
------ PHP_ROUND_HALF_UP
------ PHP_ROUND_HALF_DOWN
------ PHP_ROUND_HALF_EVEN
------ PHP_ROUND_HALF_ODD

- ceil, floor, round => Return Double
*/

echo round(5.99) . "<br>"; // 6
echo round(5.50) . "<br>"; // 6
echo round(5.49) . "<br>"; // 5
echo round(5.10) . "<br>"; // 5

echo round(5.99, 1) . "<br>"; // 6
echo round(5.94, 1) . "<br>"; // 5.9
echo round(5.995, 2) . "<br>"; // 6
echo round(5.994, 1) . "<br>"; // 6
echo round(5.994, 2) . "<br>"; // 5.99
echo "<hr>";

echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";

echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";

echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";

echo round(5.10, 0, PHP_ROUND_HALF_ODD) . "<br>";
echo round(4.40, 0, PHP_ROUND_HALF_ODD) . "<br>";
echo "<hr>";

/*
Math Functions

    - sqrt(Number[Required])
    --- Square Root
    
    - min(array[Required]) || min(Values[Required])
    --- Find Lowest Value
    
    - max(array[Required]) || min(Values[Required])
    --- Find Highest Value
    */

echo sqrt(16) . "<br>"; // 4
echo sqrt(-16) . "<br>"; // NAN
echo "<hr>";

echo min(10, 20, -40, -30, 50) . "<br>"; // -40
echo min([10, 20, -40, -30, 50]) . "<br>"; // -40
echo "<pre>";
print_r(min([1, 3, 5], [1, 2, 6]));
// // Multiple arrays of the same length are compared from left to right
echo "</pre>";

echo "<pre>";
print_r(max([1, 3, 5], [1, 2, 6,10])); 
// // With multiple arrays of different lengths, max returns the longest 
echo "</pre>";

echo max("hello", 10); // hello
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
?>