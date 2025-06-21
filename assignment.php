
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$s = "A quick brown fox jumps over the lazy dog";
$position = strpos($s, "fox");
echo "The position of 'fox' is: " . $position;


echo "<br>";
echo "<br>";

$fruits = array("Apple", "mango", "orange");
$position = array_search("mango", $fruits);

if ($position !== false) {
    echo "'mango' is at position: " . $position;
} else {
    echo "'mango' not found in the array.";
}

?>
</body>
</html>



