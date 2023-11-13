<?php
include('connection.php');

function getDaysToDeadline($deadline_date) {
    $currentDate = new DateTime();
    $targetDate = new DateTime($deadline_date);

    $interval = $currentDate->diff($targetDate);
    $daysToTarget = $interval->days;

    return $daysToTarget;
}

$query = "SELECT rentals.id, games.title, clients.email, rentals.rental_date
FROM rentals
INNER JOIN games ON rentals.game_id = games.id
INNER JOIN clients ON rentals.client_id = clients.id";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . $mysqli->error);
}
?>
<table>
    <tr>
        <th>id</th>
        <th>e-mail</th>
        <th>title</th>
        <th>deadline (days)</th>
        <th>action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<form action='./scripts/delete_rental.php' method='post'>";
        echo "<td><input id='id' readonly value='" . $row["id"] . "' name='id'></td>";
        echo "<td><input id='email' readonly value='" . $row["email"] . "'></td>";
        echo "<td><input id='title' readonly value='" . $row["title"] . "'></td>";
        echo "<td><input id='rental_date' readonly value='" . getDaysToDeadline($row["rental_date"]) . "'></td>";
        echo "<td><input type='submit' name='remove' value='Remove'></td>";
        echo "</form>";
        echo "</tr>";
    }
    ?>
</table>
<?php
    mysqli_close($conn);
?>
