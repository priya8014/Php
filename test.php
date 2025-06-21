
<!DOCTYPE html>
<?php 
$a=1;
$strA=(string)$a;
var_dump($strA);

const MYCAR="Volvo";
define("GREETING", "Welcome everyone");

$list = array("ram", "hari", "shyam");



$arr = array("one" => array("1", "11"), "two"=>array("2","22"));

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <?php echo $a ;?>
    <div>
        <?php echo GREETING ?>
    </div> 
    <?php echo MYCAR ?>

    <?php
    echo "<h2>".$a."<?h2>"
    ?>

    <div>
        <ul>
            <?php 
            var_dump($list);
            foreach($list as $l){
                echo "<li>".$l."</li>";
            }
            ?>

        </ul>
    </div>
</body>
</html>


<!-- ASSIGNMENT  LIST THE THING WITH ASSOCIATIVE ARRAY 
1.veg
. Tomato
.Cabbage

2.Non-veg
.chicken
.mutton  -->