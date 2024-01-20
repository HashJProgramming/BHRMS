<?php
include_once 'connection.php';


$pax = $_POST['pax'];
$rent = $_POST['rent'];

$sql = "INSERT INTO rooms (pax, rent) VALUES (:pax, :rent)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':pax', $pax);
$stmt->bindParam(':rent', $rent);
$stmt->execute();

generate_logs('Adding Room', $pax.'| New boarder was added');
header('Location: ../rooms.php?type=success&message=New boarder was added successfully');
?>