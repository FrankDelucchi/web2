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
        <a href="10">Ver 10</a>
        <a href="2">Ver 5</a>
        <a href="lista">Mostrar todo</a>
    </ul>
    <?php

        
        function showHome(){
           echo 'hola mundo';
           $lista = array('item', 'item','item', 'item','item', 'item','item', 'item','item', 'item');
           echo "<ul>";
           foreach ($lista as $item){
               echo "<li>" .$item. "</li>";
           }
           echo "</ul>";
        }
        /**if(isset($_GET['ver10']))
            $limite = $_GET['limite'];
        else
            $limite = count($lista);**/
        function show5($limite){
            $lista = array('item', 'item','item', 'item','item', 'item','item', 'item','item', 'item');
            echo "<ul>";
            for ($item = 0; $item<$limite; $item++){
                echo "<li>" .$lista[$item]. "</li>";
            }
            echo "</ul>";
        }
        function show10($limite){
            $lista = array('item', 'item','item', 'item','item', 'item','item', 'item','item', 'item');
            echo "<ul>";
            for ($item = 0; $item<$limite; $item++){
                echo "<li>" .$lista[$item]. "</li>";
            }
            echo "</ul>";
        }        
    ?>   
</body>
</html>