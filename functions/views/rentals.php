<?php
include_once 'functions/connection.php';

$sql = 'SELECT b.*, r.rent, DATEDIFF(b.start_date, CURDATE()) AS days_due FROM `boarders` b
        INNER JOIN `rooms` r ON b.room = r.id
        WHERE DATEDIFF(b.start_date, CURDATE()) >= -3';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

foreach ($results as $row) {
    $daysDue = $row['days_due'];
    $class = '';
    $text = '';

    if ($daysDue < 0) {
        $class = 'bg-success';
        $daysDue = abs($daysDue);
        $text = 'Due in ' . $daysDue . ' days';
    } elseif ($daysDue >= 1) {
        $class = 'bg-danger';
        $text = 'Overdue';
    } elseif ($daysDue == 0) {
        $class = 'bg-warning';
        $text = 'Due Today';
    } else {
        $class = 'bg-danger';
        $text = 'Overdue ' . $daysDue . ' days';
    }
?>
    <tr>
        <td><img class="rounded-circle me-2" width="30" height="30" src="functions/<?= $row['profile_picture'] ?>"><?= $row['fullname'] ?></td>
        <td>Room #<?= $row['room'] ?></td>
        <td>₱<?= $row['rent'] ?></td>
        <td>₱0.00</td>
        <td><?= $row['start_date'] ?></td>
        <td class="<?= $class ?>"><?= $text ?></td>
        <td><?= $row['days_due'] < 0 ? 0 : $row['days_due'] ?></td>
        <td class="text-center"><a class="btn btn-primary mx-1" role="button" href="profile.php" data-bs-target="#pay" data-bs-toggle="modal"><i class="far fa-money-bill-alt"></i>&nbsp;Payment</a></td>
    </tr>
<?php
}
?>