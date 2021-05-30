<!-- Descrizione
Usando il database hotel usato già negli scorsi esercizi come base dato:
Creare una pagina  con la lista delle stanze prese dal db
un click porta alla pagina di dettaglio della stanza -->
<?php
require_once __DIR__ . "/database/database.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once __DIR__ . "/head/head.php" ?>
</head>
<body>
    <h1>STANZE HOTEL</h1>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NUMERO CAMERA</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dati as $dato){ ?> 
                    <tr>
                        <td><?php echo $dato["id"] ?></td>
                        <td><?php echo $dato["room_number"] ?></td>
                        <td><a href="./stanza.php?id=<?php echo $dato["id"] ?>">INFO</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>