<?php 
require_once __DIR__ . "/database/database-stanze.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once __DIR__ . "/head/head.php"?>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NUMERO STANZA</th>
                <th>NUMERO LETTI</th>
                <th>PIANO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dato["room_number"] ?></td>
                <td><?php echo $dato["beds"] ?></td>
                <td><?php echo $dato["floor"] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>