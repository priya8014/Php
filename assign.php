<!DOCTYPE html>
<?php
$veg = array("Tomato", "Potato", "Mushroom");
$nonveg = array("Chicken", "Mutton", "Sea food");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <ol>
        <?php foreach($arr as $k => $v): ?>
            <li>
                <?php echo $k; ?>
                <ul>
                    <?php foreach($v as $s): ?>
                        <li>
                            <?php echo $s ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php endforeach; ?>
     </ol>
 
</body>
</html>








