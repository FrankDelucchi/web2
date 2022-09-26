<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <a href="Ejercicio4.php?limite=10">Ver primeros 10</a>
        <a href="Ejercicio4.php?limite=5">Ver primeros 5</a>
        <a href="Ejercicio4.php">Mostrar todo</a>
    </ul>
    <?php
        $lista = array("item 1", "item 2", "item 3","item 4","item 5","item 6","item 7","item 8","item 9","item 10","item 11","item 12","item 13","item 14","item 15");
        
        if(isset($_GET['limite']))
            $limite = $_GET['limite'];
        else
            $limite = count($lista);
        
        echo "<ul>";
        for ($item = 0; $item<$limite; $item++){
            echo "<li>" .$lista[$item]. "</li>";
        }
        echo "</ul>";
    ?>   
</body>
</html>