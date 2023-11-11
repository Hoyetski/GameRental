<?php
include('connection.php');

$query = "SELECT * FROM games";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . $mysqli->error);
}
?>
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>quantity</th>
        <th>action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<form action='manage_games.php' method='post'>";
        echo "<td><input id='id' readonly value='" . $row["id"] . "' name='id'></td>";
        echo "<td><input id='title' readonly value='" . $row["title"] . "'></td>";
        echo "<td><input id='quantity' type='number' min='0' required value='" . $row["quantity"] . "' name='quantity'></td>";
        echo "<td><input type='submit' name='remove' value='Remove'><input type='submit' name='change' value='Change'></td>";
        echo "</form>";
        echo "</tr>";
    }
    ?>
</table>
<?php
    mysqli_close($conn);
?>
