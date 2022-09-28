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
        <a href="ver10">Ver 10</a>
        <a href="ver5">Ver 5</a>
        <a href="lista">Mostrar todo</a>
    </ul>
    <?php

        $lista = array("item 1", "item 2", "item 3","item 4","item 5","item 6","item 7","item 8","item 9","item 10","item 11","item 12","item 13","item 14","item 15");
        
        function showHome($lista){
                $lista;
            }
        /**if(isset($_GET['ver10']))
            $limite = $_GET['limite'];
        else
            $limite = count($lista);**/
        function show5($limite, $lista){
            echo "<ul>";
            for ($item = 0; $item<$limite; $item++){
                echo "<li>" .$lista[$item]. "</li>";
            }
            echo "</ul>";
        }
        function show10($limite, $lista){
            echo "<ul>";
            for ($item = 0; $item<$limite; $item++){
                echo "<li>" .$lista[$item]. "</li>";
            }
            echo "</ul>";
        }        
    ?>   
</body>
</html>