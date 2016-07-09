<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Lesson 1</title>
  </head>
  <body>

    <?php
        $friday = "Friday"; //assigned value of string Friday
        $todaysDate = date("Y.m.d"); //assigned value of a function
        $friday = "Monday" //same variable given a different value
          //remember PHP parses from top to bottom
    ?>

    <h1>String</h1>

    <?php
        $stringTest ="I am assinging this string to a variable named $stringTest";
        //this sentence is a string
        $stringTest2 = "string"; //a string can just be a word
        $stringTest3 = "a 1 ewj...";
        echo "this is also a string - no variable needed";
    ?>

    <h1>Arrays</h1>

    <?php
        $dog = array("shetland", "golden"); //associative array
        $animals = array ("dog", "frog", "elephant", "cat", "wolf");

        //key/value (or name/value pairs)

        /* keys start a 0
        key: 0
        value: dog;

        key: 1
        value: frog;

        key: 3
        value: elephant;

        key: 4
        value: cat;
        */

        //two types of arrays: associative and multidimensional

    ?>

    <h1>Superglobals</h1>
    <!--php.net for more info-->

    <h1>Booleans</h1>
    <!--true or false-->

    <?php
        //booleans don't have quotation marks around them
        $areWeHavingFun = true; //boolean
        $seriously = "false"; //string b/c quotation marks
    ?>

    <h1>Null</h1>

    <?php
        $var1 = $var2; //var1 is null b/c the value of var2 has not been stringTest
        $var1 = "null"; //var1 is NOT equla to null because it has a string as its value
        $var1 = NULL; //var1 is again equal to null
    ?>

    <h1>Constants</h1>

    <?php
        define("FAVORITE_ANIMAL", "Dogs");
    ?>

    <h1>Numbers</h1>

    <?php
        $in1 = 56;
        $float1 = 4.5;
    ?>

    <h1>Conditional Statements</h1>

    <?php
        if ($var1 = $var2) {
            echo "these variable are the same";
        }

        if ($sky = "blue") {
            echo "Sunny";
        } else {
            echo "Cloudy";
        } //this based upon a boolean value
    ?>

    <?php //Loops
        $number = 1;

        while ($number <= 10) { //compariosn to see if number is less than or equal to
            echo $number; //echo value of variable number
                $number++; //increment the variable number by 1
        }
    ?>

    <h1>Functions</h1>

    <?php
        // Single Line Comment

        /* Multi-line
        Still a Comment
        Still commenting */
    ?>

    <!--HTML comments can be made outside of PHP tags-->

  </body>
</html>
