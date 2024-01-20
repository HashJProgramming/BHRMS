<?php
include_once 'connection.php';

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$start_date = $_POST['start_date'];
$room = $_POST['room'];
$type = $_POST['type'];

$target_dir = "img/";
$profile = $target_dir . $fullname . basename($_FILES["profile"]["name"]);
$proof = $target_dir . $fullname . basename($_FILES["proof"]["name"]);

move_uploaded_file($_FILES["profile"]["tmp_name"], $profile);
move_uploaded_file($_FILES["proof"]["tmp_name"], $proof);

$sql = "SELECT * FROM boarders WHERE fullname = :fullname OR phone = :phone";
$stmt = $db->prepare($sql);
$stmt->bindParam(':fullname', $fullname);
$stmt->bindParam(':phone', $phone);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    header('Location: ../boarder.php?type=error&message=' . $fullname . ' is already exist or phone number is already exist');
    exit;
}


$sql = "INSERT INTO boarders (fullname, phone, sex, address, start_date, room, type, profile_picture, proof_of_identity) 
        VALUES (:fullname, :phone, :sex, :address, :start_date, :room, :type, :profile, :proof)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':fullname', $fullname);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':sex', $sex);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':start_date', $start_date);
$stmt->bindParam(':room', $room);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':profile', $profile);
$stmt->bindParam(':proof', $proof);
$stmt->execute();

generate_logs('Adding boarder', $fullname . '| New boarder was added');
header('Location: ../boarders.php?type=success&message=New boarder was added successfully');
exit;
