<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $fruits = array("mango", "banana");
            array_push($fruits, "orange", "grapes");
            array_pop($fruits);
            var_dump($fruits);
            
            $nums = array(1,2,3);
            function doubleNumber($v){
                return($v*2);
            }
            // var_Dump(array_map("doubleNumber",$nums))
           
           $variable = "Alice";
           $g = "Hello $variable";
           echo $g;

           $greeting = "Hello World";
           echo strlen($greeting);

    ?>
</body>
</html>

<!-- ASSIGNMEMT 
$s = "A quick brown fox jumps over the lazy dog"
Q. Find the positing of "fox";
Q.{"Apple", "mango", "orange"}
find the position of mango. -->