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

$mac = "00:00:5e:00d:53:af";
var_dump(filter_var($ip, FILTER_VALIDATE_MAC));
echo "<br>";
?>