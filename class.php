<?php
$items = array(
    "Veg" => array("Tomato", "Cabbage","Musharoom"),
    "Non-veg" => array("Chicken", "Mutton", "Seafood")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Food List</title>
</head>
<body>
     <ol>
        <?php
        foreach ($items as $category => $foods) {
            echo "<li>$category<ul>";
            foreach ($foods as $food) {
                echo "<li>$food</li>";
            }
            echo "</ul></li>";
        }
        ?>
    </ol>
</body>
</html>