<?php 
/* CONNESIONE DATABASE */

$host = "localhost";
$username = "root";
$password = "root";
$db = "hotel";

$conn = new mysqli($host, $username, $password, $db);

/* CONTROLLO CONNESSIONE PHP MYSQL */
if($conn && $conn->connect_error){
    die("connection failed: $conn->connect_error");
}

/* PRENDIAMO DATI DA MYSQL */

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

$dati = [];

if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $dati[] = $row;
    }
} else if ($result){
    echo "<h2>NO RESULT FOUND</h2>";
} else {
    echo "<h2>query error</h2>";
}