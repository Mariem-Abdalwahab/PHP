<?php
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
echo "Part 2 string<br>";
$friends = [ 'nevien','mariem', 'marwa'];
echo implode(" ", $friends). '<br>';
echo implode(", ", $friends). '<br>'; // nevien, mariem, marwa
echo implode("&", $friends). '<br>';
echo implode( $friends). '<br>';

$str2 = 'one two three';
print_r(explode(' ',$str2)); // Array ( [0] => one [1] => two [2] => three )
echo '<br>';
print_r(explode(' ',$str2, 2));
echo '<br>';


echo str_shuffle("abcdefghij"). '<br>'; // generate new string from the one you pass
echo strrev("abcdefghij"). '<br>'; // reverse the string
echo strlen("   Elzero  ") . "<br>";// delete white space (as default) from string
echo "   Elzero  " . "<br>";// delete white space (as default) from string
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

// part 6

/*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
*/
echo str_replace("@", "O", "SCH@@L", $r); // find @ and replace it with O
echo "<br>";

echo "Replce count ".$r;
echo "<br>";

echo str_replace(["@","&"], ["H","O"], "SC&@@L", $r);
echo "<br>";

print_r (str_replace("one",1,["one", "one"]));
echo "<br>";

print_r (str_replace(["one","two"],1,["one", "two"])); // replace "one","two" to 1
echo "<br>";

print_r (str_replace(["one","two"],[1],["one", "two"])); // replace "one" to 1 and "two" to ""
echo "<br>";
// str_replace sensitive, str_ireplace not sensitive
echo "<hr>";

// part 7
/*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
*/
echo substr_replace("onetwo", 1 , 0); // 1
echo "<br>";

echo substr_replace("onetwo", 1 , 3); //one1
echo "<br>";
echo substr_replace("onetwo", 1 , -1); // onetw1
echo "<br>";

echo substr_replace("onetwo", 2 , 3, 2); // one2o
echo "<br>";

echo substr_replace("onetwothree", "A" , 2, -5); // onAthree
echo "<br>";

echo substr_replace("onetwothree", "@" , 2, 0); // insret not replace
echo "<br>";

echo "<pre>";
print_r(substr_replace(["one", "two"], "A", 0));     //[0] => A [1] => A

echo "</pre>";

echo "<pre>";
print_r(substr_replace(["one", "two"], "A", 0 , 1)); // [0] => Ane [1] => Awo

echo "</pre>";
echo "<hr>";

// part 8

/*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
*/

$str = "Welcome to php notes loooooooooooooooooooong";
echo wordwrap($str, 7, "<br>"); // every 7 character
echo  "<br>";
echo  "<br>";

echo wordwrap($str, 7, "<br>",true); // true => cut long strings
echo  "<br>";

echo ord("a"); // return a scii code for character
echo  "<br>";

echo ord("A");
echo  "<br>";

echo chr(97); // return character 
echo  "<br>";

echo similar_text("mariem Affff", "mariem Abdalwahab", $prec); // 8
echo  "<br>";
echo  $prec; 
echo  "<br>";
echo similar_text("mariem ooo", "mariem ooop"); // 10
echo  "<br>";
// echo chr(97); // return character 
echo  "<br>";
echo "<hr>";

// Part 9

/*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
*/


echo strstr("php string functions", "string"); // string functions
echo "<br>";

echo strstr("php string functions", "string", true); // php 
echo "<br>";

echo var_dump(strstr("php string functions", "String")); // false =< sensitive 
echo "<br>";

echo var_dump(stristr("php string functions", "String")); // false =< sensitive 
echo "<br>";

echo number_format(10000000.25364);
echo "<br>";

echo number_format(10000000.25364 ,3);
echo "<br>";
echo number_format(10000000.25364, 3, "!");
echo "<br>";
echo number_format(10000000.25364, 3 , "!", "&");
echo "<br>";


echo "<hr>";
echo "<hr>";
echo "<hr>";

?>