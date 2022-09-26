<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = array("item1", "item2", "item3");
        echo "<ul>";
        foreach ($lista as $item){
            echo "<li>" .$item. "</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>