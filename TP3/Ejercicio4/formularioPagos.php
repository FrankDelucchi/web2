<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pagos.php" method="GET">
        <input type="text" name="deudor">
        <input type="text" name="cuota">
        <input type="text" name="cuotaCapital">
        <input type="date" name="fechaPago">
        <input type="submit" value="Enviar">
    </form>
    <table>
        <thead>
            <th> Deudor </th>
            <th> Numero de Cuota </th>
            <th> Cuota_capital </th>
            <th> Fecha de pago </th>
        </thead>
        <tbody>
            <?php
                require_once 'pagos.php';
                listarPagos();
            ?>
        </tbody>
    </table>
    
</body>
</html>