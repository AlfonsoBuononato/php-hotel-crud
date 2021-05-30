
<?php 
require_once __DIR__ . "/database.php";

$id = empty($_GET["id"]) ? false : $_GET["id"];

/* $id = "";

if($_GET === ""){
    $id = false;
} else if($_GET != ""){
    $id = $_GET["id"];
} */

if($id){
    "SELECT * FROM `STANZE` WHERE `id` = '$id'";

    $stmt = $conn->prepare( "SELECT * FROM `STANZE` WHERE `id` = ?");
    $stmt->bind_param('s', $id);

    $stmt->execute();

    $result = $stmt->get_result();

    if($result && $result->num_rows > 0 ){
        $dato = $result->fetch_assoc();
    }
}


$conn->close();





/* 
$sql = "SELECT * FROM `STANZE` WHERE `id` = '$id'";
$result = $conn->query($sql);

if($result && $result->num_rows > 0 ){
    $dato = $result->fetch_assoc();
} */

?>