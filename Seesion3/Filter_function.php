<?php
/*
    Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
*/

echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo "<hr>";
foreach(filter_list() as $x => $y){
    echo filter_id($y) . "<br>";
}
echo "<br>";

$p = "true"; //  1 "on" true "true" "yes"
if(filter_var($p,FILTER_VALIDATE_BOOL)){
    echo "validate";
}else{
    echo "not";
}



echo "<br>";
echo "<hr>";
echo "<br>";



/*
    Filter Functions
    
    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters
    
    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only
    
    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED     // https://google.com/one
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED    // https://google.com/?id=0
    
    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6
    
    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
*/

$r = "";
var_dump(filter_var($r, FILTER_VALIDATE_BOOL)); // false
echo "<br>";

$r = "mariem";
var_dump(filter_var($r, FILTER_VALIDATE_BOOL)); // 
echo "<br>";

$r = "mariem";
var_dump(filter_var($r, FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE)); // NULL => return null if the var not true of false
echo "<br>";

$r = "https://google.com";
var_dump(filter_var($r, FILTER_VALIDATE_URL)); // NULL => return null if the var not true of false
echo "<br>";

$r = "omomom";
var_dump(filter_var($r, FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)); // NULL => return null if the var not true of false
echo "<br>";


$r = "https://google.com/p/?op=0";
var_dump(filter_var($r, FILTER_VALIDATE_URL, ["flags" =>
FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED])); // NULL => return null if the var not true of false
echo "<br>";

$ip = "192.168.1.1";
var_dump(filter_var($ip, FILTER_VALIDATE_IP));
echo "<br>";

$ip = "192.168.1.1";
var_dump(filter_var($ip, FILTER_VALIDATE_IP,FILTER_NULL_ON_FAILURE));
echo "<br>";

$ip = "192.168.1.1";
var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
echo "<br>";

<<<<<<< HEAD
/*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    ------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Int On Success

    ------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success
  */

$mac = "00:00:5e:00d:53:af";
var_dump(filter_var($ip, FILTER_VALIDATE_MAC));
echo "<br>";

$email = "mairem@gmil.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo "<br>";

$int = "54";
$int = "154"; // NULL
$int = "154.00"; // NULL => float not int 
$int = 54.00; // 54
$int = 54.50; // NULL
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 45, "max_range" => 100]]

));
echo "<br>";


$float = "54.55"; // float
$float = "154"; // NULL
$float = "154.00"; // NULL 
$float = 54; // float
// $float = 54.00; // float
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 45, "max_range" => 100]]

));
echo "<br>";
echo "<hr>";

/*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
*/
$email = "mariem@ff.com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
echo "<br>";

$email = "mariem@f     f.com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL)); // remove spaces
echo "<br>";

$int = "100";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";


$float = "100,3434.54";
var_dump(filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT));
echo "<br>";

$float = "100,3434.54";
var_dump(filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT,
["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION ]));
echo "<br>";


$url = "https://ggg.com";
var_dump(filter_var($url, FILTER_SANITIZE_URL));
echo "<br>";
echo "<hr>";

/*
Filter Functions

- filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
--- INPUT_GET
--- INPUT_POST
--- INPUT_COOKIE
--- INPUT_SERVER
--- INPUT_ENV

-- FILTER_VALIDATE_INT
-- FILTER_NULL_ON_FAILURE
*/

echo filter_input(INPUT_GET, "num", FILTER_VALIDATE_INT);
echo "<br>";
echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
echo "<br>";
// echo "<hr>";
?>

<form action="" method="GET">
    <input type="text" name="num">
    <input type="submit" name="SEND">
</form>
=======
$mac = "00:00:5e:00d:53:af";
var_dump(filter_var($ip, FILTER_VALIDATE_MAC));
echo "<br>";
?>
>>>>>>> 79ab8834c19c6b83cc4d355b272c307db2065c7b
