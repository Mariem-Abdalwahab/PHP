<?php
/*
- current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element

*/ 

// 1
$friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];
echo current($friends)."<br>";
echo next($friends)."<br>";
echo current($friends)."<br>";
echo end($friends)."<br>";
echo current($friends)."<br>";
echo reset($friends)."<br>";
echo next($friends)."<br>";
echo prev($friends)."<br>";
echo "<br>";
/*
Array Functions

- array_merge(Array[Required], Other_Array/s[Optional])
--- Merge One Or More Arrays
------ Later Array Key With The Same Name Override The Value Of The Previous One
------ Numeric Key Will Be Renumbered

- array_replace(Array[Required], Replacement/s[Optional])
--- Replaces Elements From Passed Arrays Into The First Array
------ Same Key => Value In Second Array Replace Same Key => Value In First Array
------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

- array_rand(Array[Required], Num[Optional])
--- Pick One Or More Random Keys Out Of An Array

- shuffle(Array[Required])
--- Shuffle An Array
*/

// 1
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2)); // Array ( [0] => red [1] => green [2] => blue [3] => yellow )
echo "<br>";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));      // Array ( [a] => red [b] => yellow [c] => blue )
echo "<br>";

$a=array(3=>"red",4=>"green");
print_r(array_merge($a));
echo "<br>";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));      // Array ( [a] => red [b] => yellow [c] => blue )
echo "<br>";
echo "<hr>";

// 2
// Replace the values of the first array ($a1) with the values from the second array ($a2):
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
echo "<br>";

$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"orange","burgundy");
print_r(array_replace($a1,$a2)); // Array ( [a] => orange [b] => green [0] => burgundy )
echo "<br>";

$a1=array("a"=>"red","green");
$a2=array("a"=>"orange","b"=>"burgundy");
print_r(array_replace($a1,$a2)); // Array ( [a] => orange [0] => green [b] => burgundy )
echo "<br>";

$a1=array("red","green");
$a2=array("blue","yellow");
$a3=array("orange","burgundy");
print_r(array_replace($a1,$a2,$a3));
echo "<br>";

// Using numeric keys - If a key exists in array2 and not in array1:
$a1=array("red","green","blue","yellow");
$a2=array(0=>"orange",3=>"burgundy");
print_r(array_replace($a1,$a2));
echo "<br>";

// 3
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
echo "<br>";
// return a random key
$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_rand($a,1)); // a or b or c or d
echo "<br>";

// 4
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array); // Array ( [0] => red [1] => purple [2] => blue [3] => green [4] => yellow )
echo "<br>";
echo "<hr>";


/*
Array Functions

- array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
--- Extract A Slice Of The Array
--- Start
------ 0 From Start
------ -1 From Last Element
--- Length
------ Negative => Stop Slicing Until This Index
------ Not Set => All Elements From Start Position
--- Preserve Keys
------ False => Default => Reset Keys
------ True => Preserve Keys
--- If Array Have String Keys, It Will Always Preserve The Keys

- array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
--- Remove A Portion Of The Array And Replace It With Something Else
--- Start
------ 0 From Start
------ -1 From Last Element
--- Length
------ Negative => Stop Removing Until This Index
------ Not Set => Remove All Elements From Start Position

*/

// 1
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2,5,true)); // Array ( [2] => blue [3] => yellow [4] => brown )
echo "<br>";
print_r(array_slice($a,2,5,false)); //Default => Array ( [0] => blue [1] => yellow [2] => brown )

echo "<br>";
echo "<hr>";

// 2
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
print_r(array_splice($a1,0,2,$a2));
echo "<br>";
print_r($a1);
echo "<br>";

$a1=array("0"=>"red","1"=>"green");
$a2=array("0"=>"purple","1"=>"orange");
print_r(array_splice($a1,1,0,$a2)); // Array ( )
echo "<br>";
print_r($a1); // Array ( [0] => red [1] => purple [2] => orange [3] => green )
echo "<br>";
echo "<hr>";
/*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

  */

// 1
function multi($x){
    return $x*$x;
}
$a = [1,2,3,4,5];
print_r(array_map("multi",$a)); // Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
echo "<br>";

function check($x){
    if ($x == "dog") return "fido";
    else return "not fido";
}
$a = ["cat", "dog"];
print_r(array_map("check", $a)); // Array ( [0] => not fido [1] => fido )
echo "<br>";

$a1=array("Dog","Cat");
$a2=array("Puppy","Kitten");
print_r(array_map(null,$a1,$a2)); //Array ( [0] => Array ( [0] => Dog [1] => Puppy ) [1] => Array ( [0] => Cat [1] => Kitten ) )
echo "<br>";
echo "<hr>";

// 2
function filterFun($x){
    return $x > "c" || $x>2;
}
$a = ["a","c","d","p"];
$b = [1,2,3,4,5,6];
print_r(array_filter($a,"filterFun"));
echo "<br>";
print_r(array_filter($a,"filterFun",ARRAY_FILTER_USE_BOTH));
echo "<br>";
print_r(array_filter($b,"filterFun",ARRAY_FILTER_USE_KEY));
echo "<br>";
echo "<hr>";
/////////////////////////////

/*
    Array Functions

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration

*/
function reduce($x, $r){
    return $x . " " . $r;
}

$a = ["cat" ,"dog", "cat" ,"dog"];
print_r(array_reduce($a,"reduce", "initial"));
echo "<br>";

function add($carry, $item) {
    echo "$carry<br>";
    echo "$item<br>";
    echo $carry + $item . "<br>";
    echo "###########<br>";
    return $carry + $item;
  }

  $nums = [10, 20, 50, 100, 10];

  echo array_reduce($nums, "add", 100); // carry => 100 110 130 180 280 
  echo "<br>";
  print_r($nums);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>