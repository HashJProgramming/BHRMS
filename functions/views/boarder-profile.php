<?php
include_once 'functions/connection.php';

$id = $_GET['id'];
$sql = 'SELECT b.*, r.rent FROM `boarders` b
        INNER JOIN `rooms` r ON b.room = r.id';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetch();

$fullname = $results['fullname'];
$phone = $results['phone'];
$address = $results['address'];
$room = $results['room'];
$rent = $results['rent'];   
$profile_picture = $results['profile_picture'];
