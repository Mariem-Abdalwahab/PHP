 <?php
    echo 'WE love PHP';
    echo '<br>';
    echo 'WE love PHP';
    echo '<br>';
    
?>

<?='We love php short tag';?>

<!-- /* comments */ -->

<?php
    // single line
    echo "code"; // single line comment
    echo "code"; # single line comment
    /*
        multi line comment
    */

    echo 'coooode'/**/;
    echo '<br>';  
    echo '<hr>';

?>

<!-- data type  -->

<?php
    echo gettype(true);
    echo '<br>';
    echo gettype(55.5);
    echo '<br>';
    echo gettype(-55);
    echo '<br>';
    echo gettype('mariem');
    echo '<br>';
    echo gettype(array("EG" => "Egypt", "KSA" => "Suadia arabia"));
    echo '<br>';
    echo gettype(array( "Egypt","Suadia arabia" ));
    echo '<br>';
    echo gettype(["Egypt","Suadia arabia" ]);
    echo '<br>';
    echo '<hr>';

?>

<!-- Type Juggling And Automatic Type Conversion -->

<?php
    echo 1 + '3'; // 4
    echo '<br>';
    echo gettype(1 + '3'); // integer conversion done on output not input
    echo '<br>';
    echo true; // 1
    echo '<br>';
    echo gettype(true); // bollean
    echo '<br>';
    echo true + true; //  2
    echo '<br>';
    echo gettype(true + true); // integer
    echo '<br>';
    echo 1 + '3 lesson'; // 4 + warning
    echo '<br>';
    echo gettype(1 + '3 lesson'); // integer + warning
    echo '<br>';
    echo 1 +3.5; // 4.5 
    echo '<br>';
    echo gettype( 1 +3.5); // double 
    echo '<br>';
    echo '<hr>';

    
?>

<!-- Type Casting -->

<?php
    echo '<br>';
    echo 1 + (int)'3 lesson'; // 4 
    echo '<br>';
    echo 1 + (integer)'3 lesson'; // 4 
    
    echo '<br>';
    echo 1 + (int) 25.5; // 26 
    echo '<br>';
    echo gettype(1 + (int) 25.5); // int 

    echo '<br>';
    echo 10.5 + 10.5; // 21
    echo '<br>';
    echo gettype(10.5 + 10.5); // double!!!!!!

    echo '<br>';
    echo (int)10.5 + 10.5; // 20.5
    echo '<br>';
    echo gettype((int)10.5 + 10.5); // double 

    echo '<br>';
    echo (int)10.5 + (int)10.5; // 20
    echo '<br>';
    echo gettype((int)10.5 + (int) 10.5); // int

    echo '<br>';
    echo (int)(10.5 + 10.5); // 21
    echo '<br>';
    echo gettype((int)(10.5 + 10.5)); // int
    
    echo '<hr>';
    echo '<br>';
    echo '<hr>';
    echo '<hr>';
?>

<!-- Boolean And Converting To Boolean -->

<?php
    var_dump((bool) "");
    echo '<br>';
    var_dump((bool) []);
    echo '<br>';
    var_dump((bool) 0);
    echo '<br>';
    var_dump((bool) "0");
    echo '<br>';
    var_dump((bool) "mariem");
    echo '<br>';
    var_dump((bool) [1,2]);
    echo '<br>';
    var_dump((bool) "1");
    echo '<br>';
    var_dump((bool) 1);
    echo '<br>';
    echo '<hr>';
?>


<!-- String And Escaping -->


<?php
    echo 'Hello PHP';
    echo '<br>';
    echo "Hello PHP";
    echo '<br>';
    // echo "Hello "PHP""; Error
    echo '<br>';
    echo "Hello 'PHP'";
    echo '<br>';
    echo 'Hello \'PHP\''; // escape ' character bt backslash \
    echo '<br>';
    echo 'Hello PHP\\'; 
    echo '<br>';
    echo 'Hello PHP
    second line'; 
    echo '<br>';
    echo nl2br('first line
    second line
    another line');
    echo '<br>';
    echo '<hr>';
?>

<!-- Heredoc And Nowdoc -->

<?php
    $mareim = 'mareim' ;
    // Heredoc         
    // heredoc parsing and escaping
    /*  here between double qoute or without */
    // /* // heredoc between double qoute or without*/

    echo <<< "here"
    hello php 
    // special character ;''\'\' ///// \\\\
    // my name is $mareim
    here;

    echo '<br>';
    
    // // Nowdoc
    // // nowedoc parsing and escaping
    // now between single qoute

    echo <<< 'now'
    ,;,;,;, $mariem
    now;
    echo "<hr>";
?>

<!--  Array With Complex Tests -->

<?php echo "<pre>";
    print_r([
        "A" => "Ahmed",
        "A" => "Amany", // A will be key for Amany not ahmed 
        "M" => "Mariem",
        "n" => "Nevien",
        "moamen",
        "omar",
        0 => "ooo", // it will override index zero
        9 => "9",
        "10",
        11,
        8 => "8" // it will not sort it self 
        
    
    ]);
    /*
    Array
(
    [A] => Amany
    [M] => Mariem
    [n] => Nevien
    [0] => ooo    
    [1] => omar
    [9] => 9
    [10] => 10
    [11] => 11
    [8] => 8
)
     */
    echo "</pre>";

    // print_r([
    //     "A" => "Ahmed",
    //     "A" => "Amany",
    //     "M" => "Mariem",
    //     "moamen",
    //     "n" => "Nevien",
    //     "omar"

    // ]);
    echo "<hr>";
?>

<!-- Introduction To Variables And Naming Rules -->

<?php
    $name = 'mariem'; // declear a variable
    $Name = 'Mariem';  // sensitive 
    echo "<br>";
    echo $name;
    echo "<br>";
    echo "Hello $Name";
    echo "<hr>";
?>

<!--  Testing Variables In Real World -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP <?php $name?></title>
</head>
<body>
    <p> welcom <?php echo "$name"?> </p>
    <?php include("score.php");
    echo "<br>";
    echo "<hr>";
    ?>
    
</body>
</html>


<!--  Variable Variable -->

<?php
    $a = "Mariem";
    $$a = "Abdalwahab"; // $Mariem = "Abdalwahab"
    $$$a = "Elshall"; // $Mariem = "Abdalwahab"
    echo $a;
    echo "<br>";
    echo $$a;
    echo "<br>";
    echo $Mariem;
    echo "<br>";
    echo $$$a;
    echo "<br>";
    echo "hello ${$a}";
    echo "<br>";
    echo "hello ${$$a} ";
    echo "<br>";
    echo "<hr>";
?>

<!-- Assign By Value And By Reference -->


<?php
    // $one = "Mariem";
    // $two = $one; //  assigin by value
    // echo "<br>";

    $x = "Mariem";
    $y = &$x; //  assigin by reference
    $y = "youmna";
    echo $x;  //Youmna
    echo "<br>";
    echo $y; //Youmna
    echo "<hr>";

    
    
?>

<!-- Predefined Variables And Test -->

<?php
    // VARIABLE 
    echo print_r($_SERVER["HTTP_CONNECTION"]);
    echo $_GET["username"];
    echo '<hr>';
?>

<form action="" method="get">
  <input type="text" name="username">
  <input type="submit" value="Send">
</form>


<!--  Introduction To Constants -->

<?php
    define("DB_NAME", "mariem");
    define("MAIN_NUMBER", 25);
    echo DB_NAME;
    echo '<hr>';

?>


<!-- Predefined And Magic Constants And Reserved Keywords -->

<!-- /*

    Pre-Defined Constants [Case Sensitive]

    - PHP_VERSION => The current PHP version as a string in "major.minor release[extra]" notation.

    - PHP_OS_FAMILY => The operating system family PHP was built for. One of 'Windows', 'BSD', 'Darwin', 'Solaris', 'Linux' or 'Unknown'. Available as of PHP 7.2.0.

    - PHP_INT_MAX => The largest integer supported in this build of PHP. Usually int(2147483647) in 32 bit systems and int(9223372036854775807) in 64 bit systems.

    - DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
    - __LINE__
    - __FILE__
    - __DIR__

    Reserved Keywords
    - break
    - clone

    Search
    - PHP Predefined Constants
    - Compile Time vs Runtime
    - List of Reserved Words
  */ -->

<?php
    echo PHP_VERSION;
    echo '<br>';
    echo PHP_OS_FAMILY;
    echo '<br>';
    echo PHP_INT_MAX;
    echo '<br>';
    echo DEFAULT_INCLUDE_PATH;
    echo '<br>';
    echo '<hr>';
?>


<!-- Arithmetic Operators -->

<?php

/*
Operators
- Used To Perform Operations On Values.

Arithmetic Operators
- Used To Do Arithmetical Operations &#038; Conversion

- $a [+]  $b => Addition
- $a [-]  $b => Subtraction
- $a [*]  $b => Multiplication
- $a [/]  $b => Division
- $a [%]  $b => Modulus
- $a [**] $b => Exponentiation
- +$a        => Identity
- -$a        => Negation
*/
    echo 10 + 20;
    echo '<br>';
    echo gettype(10 + 20);
    echo '<br>';
    echo 9.5 + 20.5;
    echo '<br>';
    echo gettype(9.5 + 20.5);
    echo '<br>';

    echo 10 - 20;
    echo '<br>';
    echo gettype(10 - 20);
    echo '<br>';
    echo 9.5 - 20.5;
    echo '<br>';
    echo gettype(9.5 - 20.5);
    echo '<br>';

    echo 10 * 20;
    echo '<br>';
    echo gettype(10 * 20);
    echo '<br>';
    echo 9.5 * 20.5;
    echo '<br>';
    echo gettype(9.5 * 20.5);
    echo '<br>';

    echo 20 / 10;
    echo '<br>';
    echo gettype(20 / 10);
    echo '<br>';
    echo 20 / 8;
    echo '<br>';
    echo gettype(20 / 8);
    echo '<br>';

    echo 21 % 10; // Remove 1 To Become 20
    echo '<br>';
    echo 23 % 10; // Remove 3 To Become 20
    echo '<br>';
    echo 29 % 10; // Remove 9 To Become 20
    echo '<br>';
    echo 30 % 10;
    echo '<br>';

    echo 2 ** 4;
    echo '<br>';
    echo 2 * 2 * 2 * 2;
    echo '<br>';
    echo 3 ** 5;
    echo '<br>';
    echo 3 * 3 * 3 * 3 * 3;
    echo '<br>';


    // +$a => Identity
    // -$a => Negation
    echo "100";
    echo '<br>';
    echo gettype("100"); // string
    echo '<br>';
    echo +"100";
    echo '<br>';
    echo gettype(+"100");   // integer
    echo '<br>';

    echo "-100";
    echo '<br>';
    echo gettype("-100"); // string
    echo '<br>';
    echo -"-100";
    echo '<br>';
    echo gettype(-"-100"); // integer +100 not -100
    echo '<hr>';
?>

<!-- Assignment Operators -->

<?php

    $a = 50;
    $a -= $a;
    $a -= 6;
    echo $a;
    echo '<br>';
    $a += $a;
    echo $a;
    echo '<br>';
    $a /= 2;
    echo $a;
    echo '<br>';
    $a *= 10;
    echo $a;
    echo '<br>';
    echo '<hr>';
   
?>

<!-- Comparison Operators - Part 1 -->

<?php

    /*
        Operators
        - Used To Perform Operations On Values.

        Comparison Operators
        - Used To Compare Two Values

        - Part 1
        - ==    => Equal
        - !=    => Not Equal
        - <>    => Not Equal
        - ===   => Identical
        - !==   => Not Identical
    */

    // Test Equal
    var_dump(100 == 100);
    echo '<br>';
    var_dump(100 == "100");
    echo '<br>';
    var_dump(100.0 == "100");
    echo '<br>';
    var_dump(100.0 != "100");
    echo '<br>';
    var_dump(100.0 <> "100");

    echo '<br>';
    echo '##############';
    echo '<br>';

    // Test Identical
    var_dump(100 === 100);
    echo '<br>';
    var_dump(100 === "100");
    echo '<br>';
    var_dump(100.0 === "100");
    echo '<br>';
    var_dump(100.0 === 100);
    echo '<br>';
    var_dump(100.0 !== "100");
    echo '<br>';
    var_dump(100.0 !== 100);
    echo '<br>';
    var_dump(1111 <=> 100); // return -1 if x < y ,  return 0 if x == y , return 0 if x > y and
    
?>

<!-- Increment And Decrement Operators -->

<?php
    // $a++ => post increment
    // $++a => pre increment
    $a = 0;

    echo $a--; // 0
    echo '<br>';
    echo $a; // -1
    echo '<br>';

    $b = 0;

    echo --$b; // -1
    echo '<br>';
    echo $b; // -1
?>

<!--  Logical Operators -->

<?php

    /*
    Operators
    - Used To Perform Operations On Values.

    Logical Operators
    - Compare Conditions

    and => And => Two Are True
    &&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
    or  => Or  => One Or Both Is True
    ||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    xor => Xor => One Is True But Not Both
    !   => Not => Not True
  */

    var_dump(100 > 50 and 100 > 80 and 100 > 90); // True
    echo '<br>';
    var_dump(100 > 50 && 100 > 80 && 100 > 100); // False
    echo '<br>';
    var_dump(100 > 50 or 100 > 110 or 100 > 100); // True
    echo '<br>';
    var_dump(100 > 50 xor 100 > 80);
    echo '<br>';
    echo '<hr>';
    
?>

<!-- String Operators -->

<?php
    // connect 1 way => "{variable1} {variable2}", 2 way => " var1 var2", 3 way => {variable1}. " " .{variable2}, 4 way => variable1.= variable2";

    define("elzero", "1");
    $a = "mariem";
    $b = "abdalwahab";
    $c = "elshall";
    echo "{$a} {$b} {$c} with {}";
    echo '<br>';

    echo "$a $b $c";
    echo '<br>';

    echo $a. $b.$c;
    echo '<br>';
    echo $a." ". $b." " .$c. " ". elzero;
    echo '<br>';
    $r = "mareim";
    $r .= " abdalwahab";
    $r .= " elshall";
    echo $r;
    echo '<hr>';
    ?>

<?php

/*
    Operators
    - Used To Perform Operations On Values.

    Array Operators
    - Deal With Arrays

    +     => Union
    ==    => Equal => Same Key And Value
    !=    => Not Equal
    <>    => Not Equal
    ===   => Identical => Same Key And Value, Same Order, Same Type
    !==   => Not Identical
*/
    $arr1 = [1 => "100", 2 => "200"];
    $arr2 = [1 => 100, 2 => 200];

    echo var_dump($arr1 == $arr2);
    echo '<br>';
    echo print_r($arr1 + $arr2);
    echo '<br>';
    $arr1 = [1 => "100", 2 => "200"];
    $arr2 = [1 => 100, "2" => 200];
    echo var_dump($arr1 == $arr2);

    $arr4 = [1 => "10", 2 => "20"];
    $arr5 = [2 => 20, 1 => 10];

    var_dump($arr4 == $arr5); // True
    echo '<br>';
    var_dump($arr4 != $arr5); // False
    echo '<br>';
    var_dump($arr4 <> $arr5); // False
    echo '<br>';

    $arr6 = [1 => 100, 2 => 200];
    $arr7 = [1 => 100, 2 => 200];

    var_dump($arr6 === $arr7); // Give Me True
    echo '<hr>';

?>

<!-- Error Control Operator -->

<?php
    // Variable

    $s = 10;
    // $b = $s;
    $b = @$s or die("variable not found"); // @ => error operator if $a is found it will appear if not the it will not appear and will not oyt any error message

    // die function stop any script after it
    echo "Test $b";
    echo "Test";
    echo "<br>";
    
    // File
    $f = @file("testError.txt") or die("File not found");
    print_r($f);
    echo "<br>";
    
    // Include
    
    (@include("score.php")) or die("file Not found");
    echo "<hr>";
    
    ?>

<!-- Operator Precedence -->

<?php
    /*
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&#038;&#038;" Has A Greater Precedence Than "and"
    */

    $a = 10 || false; // (10 || false) then assign operation $a = 1;
    echo $a; // 1
    echo "<br>";

    $a = 10 or false; // assign operation then or => ($a = 10) or false
    echo $a; // 10
    echo "<br>";
    echo "<hr>";
    ?>


<!--  If, Elseif, Else - Basics -->

<?php

    if(5 < 10){
        echo "Yes";
    }elseif(10 >= 10){
        echo "NO";
    }
    echo "<br>";
    echo "<hr>";
?> 

<!-- If, Elseif, Else - Real Life Examples -->

<?php
    $page = "Home";
    if($page == "About"){

        echo "Load page";
    }
    echo "<br>";

    $lang = "Arabic";
    if($lang = "Arabic"){
        
        echo "مرحبا";
    } else if ($lang = "English"){

        echo "Welcome";
    }
    echo "<br>";
    echo "<br>";
    ?>  

<!-- If, Elseif, Else - Advanced Practice -->
<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if($_POST['lang'] === "ar"){
            // echo $_POST['lang'];
            header("Location: ar.php");
            exit();
        } elseif($_POST['lang'] === "en"){
            // echo $_POST['lang'];
            header("Location: en.php");
            exit();
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="spain">spanish</option>
        </select>
        <input type="submit" value="go">
    </form>
</body>
</html>



<!--  If, Elseif, Else - Alternate Syntax -->

<?php

    if(10>5) echo "Good";
    else  echo "Not Good";
    // 10>5? echo "Good": echo "Not Good";
?>


<?php if(10>5) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Hello</h1>
</body>
</html>

<?php }?>


<?php if(10>5) :
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Hello</h1>
</body>
</html>

<?php endif;?>

<?php
    if(5<10) :
        echo "First";
    elseif(5 < 1) :
        echo "second";
    endif;


?>