<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn php</title>
</head>
<body>
    
    <form action="test_post.php" method="post">
     Name : <input type="text" name="name">
     <br>
     Email : <input type="text" name="email">
     <br>
     <input type="submit">
    </form>

    <!-- <?php include('header.php'); ?>

    <section>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laborum dignissimos minima reiciendis! Laboriosam nostrum beatae quas? Cum amet placeat molestias, magnam rerum alias, totam, fugit aliquam quisquam nihil quaerat.
        </p>
    </section>

    <?php include('footer.php'); ?> -->

    <?php 

        // echo "<br>Hello my PHP";
        // echO "<br>Hello my PHP";
        // echo "<br>Hello my PHP";
        // echo "<br>Hello my PHP";
        // echo "<br>Hello my PHP";

        // $color = "red";
        // $COLOR = "Blue";
        // echo "My car is " . $color . "<br>";
        // echo "My house is " . $COLOR;

        // $name = "John";
        // $age = 50;
        // $weight = 50.5;

        // echo "My name is $name My age is  $age My weight is $weight"

        // $x = 5;

        // function myfunct(){
        //     $x = 10;

        //     echo "Local scope $x<br>";
        // }

        // myfunct();

        // echo "Global scope $x";

        // $x = 5;
        // $y = 10;

        // function test(){
        //     global $x , $y;
        //     echo $x + $y;
        // }

        // test()

        // echo "TEST1<br>","TEST2<br>","TEST3<br>";
        // print "TEST1PRINT"; //print can not use ,

        /*
            PHP DATA TYPES
            -String = "Hello World"
            -Integer = 12345
            -Float = 3.14
            -Boolean = true , false
            -Array = array("BMW","BENZ","FORD")
            -Object
            -NULL
        */

        // $text = "Hello";
        // $Int = 50;
        // $float = 5.5;
        // $boolean = true;
        // $Array = array("BMW","BENZ","FORD");
        // $test = null;

        // var_dump($text);
        // echo "<br>";
        // var_dump($Int);
        // echo "<br>";
        // var_dump($float);
        // echo "<br>";
        // var_dump($boolean);
        // echo "<br>";
        // var_dump($Array);
        // echo "<br>";
        // var_dump($test);

        // class Car {
        // function __construct() {
        //     $this->model = "BMW";
        // }
        // }

        // // Create an object
        // $myCar = new Car();

        // // Show object properties
        // echo $myCar->model;

        // Constants are Global
        // define("GREETING","Welcome to my website");

        // function myTest() {
        //     echo GREETING;
        // }

        // myTest();

        // define("cars", ["BMW","FORD","Mazda"]);
        // echo(cars[2]);

        // Arithmetic Operators
        // +, -, *, /, %, **

        // Assignment Operators
        /**
         *  x = 10
         *  x += 10 => x = x + 10 => results 20
         *  x -= 10 => x = x - 10 => results 0
         *  x *= 10 => x = x * 10
         *  x /= 10 => x = x / y
         *  x %= 10 => x = x % y 
         */

         // Comparison Operators
         /**
          * Equal => ==
          * Indential => ===
          * Not equal => !=
          * Not equal => <>
          * Not identical => !==
          * Greater than => >
          * Greater than or equal to => >=
          * Less than or equal to => <=
          * Spaceship => <=>
          */

          // Increment / Decrement Operators
          /**
           * Pre-increment => ++$x
           * Post-increment => $x++
           * Pre-decrement => --$x
           * Post-decrement => $x--
           */
          
           // Logical Operators
           /**
            * And => and => $x and $y
            * Or => or => $x or $y
            * Xor => xor => $x xor $y
            * And => && => $x && $y
            * Or => || => $x || $y
            * Not => ! => !$x
            */

          // String Operators
          /**
           * Concatenation => .
           * $txt1 = "Hello";
           * $txt2 = " PHP";
           * $echo $txt1 . $txt2;
           * : results = Hello PHP
           * 
           * Concatenation assignment => .=
           * $txt1 = "Hello";
           * $txt2 = " World!";
           * $txt1 .= "txt2";
           * echo $txt1;
           * : results = Hello World!
           * 
           */

        //    // <=>
        //    $x = 10;
        //    $y = 10;

        //    echo($x <=> $y);

        //    // x = y -> 0
        //    // x < y -> -1
        //    // x > y -> 1

        // $x = 100;
        // $y = 50;

        // if ($x == 100 || $y == 80){
        //     echo "Hello world!";
        // }

        // $x = array("a" => "red", "b" => "green");
        // $y = array("c" => "blue", "d" => "yellow");

        // var_dump($x != $y);
        // echo "<br>";
        // var_dump($x == $y);

        // $raining = true;
         
        // if ($raining) {
        //     echo "dont go out side";
        // } else {
        //     echo "Yes you can go out side";
        // }

        // $favcar = "BMW";

        // switch($favcar) {
        //     case "Ferrari":
        //         echo "Your favorite car is Ferrari";
        //         // code to be executed if n = label1
        //     break;
        //     case "Ford":
        //         echo "Your favorite car is Ford";
        //         // code to be executed if n = label1
        //     break;
        //     case "Hdon":
        //         echo "Your favorite car is Hdon";
        //         // code to be executed if n = label1
        //     break;
        //     default:
        //         echo "Your favorite car is not all";
        //         // code to be executed n is different from all label
        // }

        // PHP Loops
        // while loop

        // $x = 1;

        // while($x <= 5) {
        //     echo "The number is $x <br>";
        //     $x++;
        // }

        // // do while loop

        // $y = 1;
        
        // do {
        //     echo "The number is $y <br>";
        //     $y++;
        // } while ($y < 5);

        // $x = 5;

        // for ($i=0;$i<=$x;$i++){
        //     echo($i);
        // }

            // $person = array("jojo" => "30" , "jonathan" => "20" , "jobana" => "15");

            // foreach($person as $key => $value){
            //     echo "$key : $value<br>"; 
            // }
        
        // function testPHP($adore){
        //     echo "$adore NaRaK";
        // }

        // testPHP("Cream");

        //array

        // $cars = array("BMW" , "Ferrari" , "Lambo", "ford");

        // echo count($cars);

        // 1. Indexed Arrays
        // 2. Associative Arrays
        // 3. Multidimensional Arrays

        // $cars = array("BMW","CV","HONDA");
        // $arraylength = count($cars);

        // for ($i = 0; $i < $arraylength ; $i++){
        //     echo "$cars[$i] <br>";
        // }

        // $cars = array("BMW" => "1m", "CV" => "2m" , "HONDA" => "3m");
        
        // foreach($cars as $key => $value){
        //     echo("keys : $key , value : $value <br>");
        // }

        // Name | Stock |Sold
        // BMW  | 10    | 5
        // CV   | 6     | 3
        // Honda| 10    | 4

        // $cars = array(
        //     array("BMW", 10, 5),
        //     array("CV", 6, 3),
        //     array("Honda", 10, 4)
        // );

        // echo $cars[0][0] . " " . $cars[0][1] . " " . $cars[0][2] . "<br>";
        // echo $cars[1][0] . " " . $cars[1][1] . " " . $cars[1][2] . "<br>";
        // echo $cars[2][0] . " " . $cars[2][1] . " " . $cars[2][2] . "<br>";

        // echo"<br>";

        // for ($row = 0 ; $row < 3; $row++){
        //     echo "<p> Row number $row<p>";
        //     echo "<ul>";
        //         for ($col = 0; $col < 3; $col++){
        //             echo "<li>" . $cars[$row][$col] ."</li>";
        //         }
        //     echo "</ul>";
        // }

        // PHP superglobal variables
        /**
         *  $GLOBALS
         *  $_SERVER
         *  $_REQUEST
         *  $_POST
         *  $_GET
         *  $_FILES
         *  $_ENV
         *  $_COOKIE
         *  $_SESSTION
         */

        //  $x = 10;
        //  $y = 5;

        //  function addition() {
        //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        //  }

        //  addition();
        //  echo $z;

        // echo $_SERVER['PHP_SELF'];
        // echo "<br>";
        // echo $_SERVER['SERVER_NAME'];
        // echo "<br>";
        // echo $_SERVER['HTTP_HOST'];
        // echo "<br>";
        // echo $_SERVER['HTTP_USER_AGENT'];
        // echo "<br>";
        // echo $_SERVER['SCRIPT_NAME'];
        
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $name = $_REQUEST['fname'];
        //     if (empty($name)) {
        //         echo ("Name is empty");
        //     } else {
        //         echo $name;
        //     }
        // }
        
        // $_SESSION['name'] = "Abdullah";
        // $_SESSION['car'] = "Honda";
    ?>  

</body>
</html>