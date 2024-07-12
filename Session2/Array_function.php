<?php

$car = array("BMW", "Toyota");
$cars = ["BMW", "Toyota"];

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

// indexed Array
$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
    ];

    var_dump($cars);
    echo "<br>";

// Associative Array
$person = [
    "name" => "mariem",
    "aga" => 21
];
echo count($person); // 2
echo "<br>";
echo "<br>";

// access array
echo $cars[0];
echo "<br>";

// loop
foreach($cars as $x){
    echo $x . " ";
    echo "<br>";
}

array_push($cars, "two");

function my(){
    echo "from function";
}
echo "<br>";
array_push($cars, my());

print_r($cars);
echo "<br>";

// update
$cars[0] = "one";
// to update in foreach loop
foreach($cars as &$x){
    $x  ="updated";
}

unset($x);  // Without the unset($x) function, the $x variable will remain as a reference to the last array item so any chane in $x will change the last element in array.
print_r($cars); 
echo "<br>";

$cars[] = "last element";
print_r($cars); 
echo "<br>";

$cars += ["color" => "red", "year" => 1964];
print_r($cars); 
echo "<br>";
print_r($cars); 
echo "<br>";
echo "<br>";

array_splice($cars, 2,1);
print_r($cars); 
echo "<br>";

unset($cars[1]);
print_r($cars); 
echo "<br>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
$newarray = array_diff($cars, ["Mustang", 1964]);


$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
array_shift($cars);
echo "<br>";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);
echo "<br>";

sort($cars);
print_r($cars); 
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age); 
echo "<br>";

ksort($age);
print_r($age); 
echo "<br>";
echo "<hr>";

// Function
/*
    Array Functions  part 1

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array

*/

// 1
echo "CHUNK<br><br>";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2)); // arays each one has 2 element
echo "<br>";
print_r(array_chunk($cars,2,true)); // arays each one has 2 element


$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r(array_chunk($age,2,true));
echo "<br>";
print_r(array_chunk($age,2));
echo "<br>";
echo "<hr>";

// 2
echo "array_change_key_case<br><br>";

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
print_r(array_change_key_case($age,CASE_LOWER));

$pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));
echo "<br>";
echo "<hr>";

// 3
echo "array_combine(keys, values)<br><br>";
$key = array("one", "two");
$value = array("oo", "tt");
print_r(array_combine($key,$value));
echo "<hr>";

// 4
echo "array_count_values(array)<br><br>";
$key = array("one", "two", "two", "two");

print_r(array_count_values($key));
echo "<hr>";

echo "<br>";


/*
    Array Functions  part 2

    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists

*/

// 1
$part2Array = ["a"=>"Volvo","b"=>"BMW","c"=>"Toyota"];
$part2Array = ["a"=>"Volvo","b"=>"BMW","c"=>"Toyota"];
print_r(array_reverse($part2Array));
echo "<br>"; 
print_r(array_reverse($part2Array,true));
echo "<br>"; 
echo "<hr>"; 

// 2
$result = array_flip($part2Array);
print_r($result);
echo "<br>"; 
echo "<hr>"; 

// 3
echo count($part2Array);
echo "<br>"; 
$cars=array("Volvo"=>array("XC60","XC90"),"BMW"=>array("X3","X5"),"Toyota"=>array("Highlander"));
echo count($cars); // 3
echo "<br>"; 
echo count($cars,1); // 8
echo "<hr>"; 

// 4

$p = ["a","b","c", 23];
echo var_dump(in_array("a", $p));
echo var_dump(in_array("A", $p));

echo var_dump(in_array(23, $p));
echo var_dump(in_array("23", $p)); // true
echo var_dump(in_array("23", $p,true)); // false  Optional. If this parameter is set to TRUE, the in_array() function searches for the search-string and specific type in the array.
echo "<hr>"; 

// 5
$part2Array = ["a"=>"Volvo","b"=>"BMW","c"=>"Toyota"];

echo var_dump(array_key_exists("a",$part2Array)); // array_key_exists(index,array) 
echo var_dump(array_key_exists(3,$p)); // array_key_exists(index,array) 

echo "<hr>"; 

/*
    Array Functions  part 3

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array

  */

$part3 = ["Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander","po"=> "XC90"];

// 1
print_r(array_keys($part3));
echo "<br>"; 
print_r(array_keys($part3,"XC90"));
echo "<br>"; 
echo "<hr>"; 

// 2
print_r(array_values($part3));
echo "<hr>"; 

// 3
$nums = ["one", "two" ,"three"];
print_r(array_pad($nums,5,"add")); // 5 size after new elements
echo "<br>"; 

print_r(array_pad($nums,-1,"add")); // Array ( [0] => one [1] => two [2] => three )
echo "<br>"; 

print_r(array_pad($nums,-4,"add")); // Array ( [0] => add [1] => one [2] => two [3] => three )
echo "<br>"; 
echo "<hr>"; 

// 4
$a=array(5,5);
echo(array_product($a)); // 25
echo "<br>";

$a=array("s",'F');
echo(array_product($a)); // 0
echo "<br>"; 

$a=array("8",'5');
echo(array_product($a)); // 40
echo "<br>"; 
echo "<hr>"; 

// 5
$a=array(5,15,25);
echo array_sum($a); // 45
echo "<hr>"; 
echo "<hr>"; 
echo "<hr>"; 

?>