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




?>