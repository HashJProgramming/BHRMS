<?php
include_once 'connection.php';


$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$start_date = $_POST['start_date'];
$room = $_POST['room'];
$type = $_POST['type'];


$sql = "SELECT * FROM boarders WHERE fullname = :fullname OR phone = :phone";
$stmt = $db->prepare($sql);
$stmt->bindParam(':fullname', $fullname);
$stmt->bindParam(':phone', $phone);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    header('Location: ../boarder.php?type=error&message='.$fullname.' is already exist or phone number is already exist');
    exit;
}

$sql = "INSERT INTO boarders (fullname, address, phone) VALUES (:fullname, :address, :phone)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':fullname', $fullname);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':phone', $phone);
$stmt->execute();

generate_logs('Adding boarder', $fullname.'| New boarder was added');
header('Location: ../boarder.php?type=success&message=New boarder was added successfully');
?>