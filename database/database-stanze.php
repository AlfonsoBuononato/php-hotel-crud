
<?php 
require_once __DIR__ . "/database.php";

$id = empty($_GET["id"]) ? false : $_GET["id"];

/* $id = "";

if($_GET === ""){
    $id = false;
} else if($_GET != ""){
    $id = $_GET["id"];
} */

$sql = "SELECT * FROM `STANZE` WHERE `id` = '$id'";
$result = $conn->query($sql);

if($result && $result->num_rows > 0 ){
    $dato = $result->fetch_assoc();
}

$conn->close();
?>