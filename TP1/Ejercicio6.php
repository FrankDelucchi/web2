<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <table>
        <thead>
            <?php
            $head = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            echo"<tr>";
                foreach ($head as $item){
                    echo "<th>" .$head[$item]. "</th>";
                }
            echo"</tr>";
            ?>
        </thead>
        <tbody>
            <?php
            $count = count($head);
            for ($i = 1; $i<$count; $i++){
                echo"<tr>";
                foreach ($head as $item){
                    if($head[$item]==0){
                            echo "<th>" .$i. "</th>";
                    }else{
                        echo "<th>" .$item*$i. "</th>";
                        }
                    } 
                echo "</tr>";
            }
            ?>
        </tbody>  
    </table>
</body>
</html>