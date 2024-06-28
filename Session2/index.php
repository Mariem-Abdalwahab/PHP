<!-- Loop -->

<!--  While Loop -->
    <?php
    $i=0;
    while($i<5){
        echo $i;
        echo '<br>';
        $i++;
    }
    echo '<hr>';



    // <!-- break -->


    $i=0;
    while($i<5){
        if($i == 3 ) break;
        echo $i;
        echo '<br>';
        $i++;
    }
    echo '<hr>';

    // <!-- continue -->

    $i=0;
    while($i<5){
        
        $i++;
        if($i == 3 ) continue;
        echo $i;
        echo '<br>';
    }
    echo '<hr>';

    // Alternative Syntax

    $i=0;
    while($i<5):

        echo $i ," Alternative";
        echo '<br>';
        $i++;
    endwhile;
    echo '<hr>';


    


// <!-- do while -->

    $i=0;
    do{
        echo "Do While ", $i;
        echo '<br>';
        $i++;
    }while($i<6);
    echo '<hr>';
    
    // The code will be executed once, even if the condition is never true.
    $i=10;
    do{
        echo "Do While ", $i;
        echo '<br>';
        $i++;
    }while($i<6);
    echo '<hr>';


// <!-- For Loop -->


    for($i=0; $i<5; $i++){
        echo "For Loop <br>";
    }
    echo '<hr>';
    
    // foreach loop
    $colors = array('red', 'green', 'yellow');
    foreach($colors as $x){
        echo "$x foreach <br>";
    }
    echo '<hr>';

    $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach ($members as $x => $y) {
    echo "$x : $y <br>";
    }

    // Alternative Syntax

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) :
    echo "$x <br>";
endforeach;

// switch
$color = 'red';
switch($color){
    case 'blue':
        echo "blue";
        break;
        case 'red':
            echo "red";
            break;
            default:
            echo "no color";
        }
        
        echo "<hr>";

        // function

        function sayHello($name = "new user"){ // default parmeter
            echo "Hello $name <br>";
        }
        sayHello("Mariem");
        sayHello("Moamen");
        sayHello();
        echo "<hr>";

        function num($num1, $num2){
            return $num1 + $num2;
        }
        $sum = num(10,20);
        echo $sum;

        // default value must be the last parmeter
        function yourData($country = "cairo", $age = 20, $name = "new user"){
            echo "Your name is $name, Your age $age <br> you live in $country";
        }

        yourData("mansoura", 21, "Mariem");
        echo "<hr>";
        yourData(age: 22);
        echo "<hr>";


        // Function Variable Arguments List
        
        // function sum(){
        //     print_r(func_num_args()); // return num of arguments
        // }
        // sum(1,2,3,4,5,6);
        echo "<hr>";
        function sum(...$nums){
            print_r($nums); 
        }
        sum(1,2,3,4,5,6);
        echo "<hr>";

        // Function Variable And Function Exists
        function one(){
            echo "Hello";
        }
        $func1 = "one";
        echo $func1(); // => one()
        echo "<hr>";

        // function_exists(func name)

        if(function_exists("func2")){
            echo "exists";
        }else{
            echo "not exists";
        }

        echo "<hr>";
        
?>


<!-- /////////////////////////////////////////////// -->

<?php
// Passing Arguments By Reference And Return Type Declaration

// passing by value
function five($num){
    $num += 5;
    return $num;
}
// $x = 15;
// echo five($x) . '<br>'; // 20
// echo $x; // 15
// echo "<hr>";


// passing by reference
// function five(&$num){
//     $num += 5;
//     return $num;
// }
$v = 15;
echo five($v) . '<br>'; // 20
echo $v; // 20
echo "<hr>";
function f($x, $t) : int{
    return $x + $t;
}
echo f(10.5, 5);

echo "<hr>";

//  Anonymous Function

$anonFunc = function(){
    echo "Hello <br>";
};
$anonFunc();

// to use variable out of function scope => use
$msg = "Hello";
$anonFunc2 = function() use($msg){
    echo "$msg Mariem <br>";
};
$anonFunc2();

$y = [1,2,3,4,5];
// $anonFunc3 = array_map("five", $y);
// print_r($anonFunc3);
// echo "<hr>";

$anonFunc3 = array_map(function($i){return $i+10;}, $y);
print_r($anonFunc3);
echo "<hr>";



// Arrow Function
$hello = fn() => "$msg Mariem";
echo $hello();
echo "<hr>";





////////////////////////////////////////////////// String //////////////////////////////////////////////////
$str = "Mariem";
echo "First letter $str[0]<br>";
echo "last letter $str[-1]<br>"; // count from last character
echo strlen($str)."<br>";
// update

$str[-2] = 'a';
echo " $str<br>";
echo "<hr>";

// String Functions
/// part 1
/*
    String Functions
    - lcfirst(String[Required]) // lowercase firstletter
    - ucfirst(String[Required]) // uppercase firstletter
    - strtolower(String[Required]) // lowercase string
    - strtoupper(String[Required]) // uppercase string
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
  */
echo lcfirst("Mariem Abdalwahab"). "<br>";
echo ucfirst("mariem abdalwahab"). "<br>";
echo strtolower("mariem abdalwahab"). "<br>";
echo strtoupper("mariem abdalwahab"). "<br>";
echo ucwords("mariem abdalwahab elshall"). "<br>"; // Mariem Abdalwahab Elshall
echo ucwords("mariem abdalwahab|elshall", '|'). "<br>"; // Mariem abdalwahab|Elshall => act with 'Mariem abdalwahab' as one word
echo str_repeat("mariem abdalwahab ", 3). "<br>";
echo "<hr>";


/// part 2
/*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
*/
$friends = [ 'nevien','mariem', 'marwa'];
echo implode(" ", $friends). '<br>';
echo implode(", ", $friends). '<br>';
echo implode("&", $friends). '<br>';
echo implode( $friends). '<br>';

$str2 = 'one two three';
print_r(explode(' ',$str2));
echo '<br>';
print_r(explode(' ',$str2, 2));
echo '<br>';


echo str_shuffle("abcdefghij"). '<br>'; // generate new string from the one you pass
echo strrev("abcdefghij"). '<br>'; // reverse the string
echo strlen("   Elzero  ") . "<br>";// delete white space (as default) from string
echo strlen(trim("   Elzero  ")) . "<br>";
echo trim("&&abcde&&fghij&&&&","&"). '<br>'; 
echo trim("&&abcdefghij&&&&","%&"). '<br>';  
echo "<hr>";


// part 3
/*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
*/
echo chunk_split("ccss;m dpodocm",3, "\\");
echo "<br>";
print_r (str_split("ccss;m dpodocm",3));
echo "<br>";

echo "<h3>Hello <b>Elzero</b></h3>";
echo '<br>';

echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<b>"); // allow effect of b
echo '<br>';

echo "<hr>";

// part 4
/*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
*/
var_dump(strpos("Hello Hello","one"));
echo "<br>";
var_dump(strpos("Hello Hello","ll",2)); // search  for string from position 3 // output first string will match // Sensitive H not as h
echo "<br>";

var_dump(strrpos("Hello Hello","ll",2)); // search for string from position 3 // output the last string will match // Sensitive H not as h
echo "<br>";

var_dump(stripos("Hello Hello","LL",2)); // search for string from position 3 // output first string will match // not Sensitive H not as h
echo "<br>";

var_dump(strripos("Hello Hello","LL",2)); // search for string from position 3 // output the last string will match // not Sensitive H not as h
echo "<br>";

var_dump(substr_count("Hello Hello","ll",2)); // count sub in the string
echo "<br>";

var_dump(substr_count("Hello Hello","ll",2, 7)); // count sub in the string
echo "<br>";

var_dump(substr_count("abcdabcda","abcda")); // overlap string
echo "<br>";


// prat 5
/*
String Functions
- parse_str(String[Required], Array[Required])  // The parse_str() function parses a query string into variables.
- quotemeta(String[Required])                   // The quotemeta() function adds backslashes in front of some predefined characters in a string.
- str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])  Pad to the right side of the string, to a new length of n characters:
--- STR_PAD_BOTH
--- STR_PAD_LEFT
--- STR_PAD_RIGHT
- strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
*/
parse_str("name=Osama&email=o@nn.sa&os=mac", $query);
echo "<pre>";
print_r ($query);
echo "</pre>";

echo "Hello ^%*&(&*|<br>";
echo quotemeta("Hello ^%*&(&*|<br>");

echo str_pad("12",8,"0");
echo "<br>";
echo str_pad("12",8,"0",STR_PAD_BOTH);
echo "<br>";
echo str_pad("132",8,"0",STR_PAD_BOTH);
echo "<br>";
echo str_pad("12",8,"0",STR_PAD_LEFT);
echo "<br>";

echo strtr("Heelo", 'e','l' ); // hlllo
echo "<br>";
echo strtr("H^llo", '^','e' ); // hello
$signs = ["@" => "l", "&" => "o"];
echo "<br>";
echo strtr("He@@&", $signs); // hello



echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
?>