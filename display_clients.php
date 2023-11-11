<?php
include('connection.php');

$query = "SELECT * FROM clients";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . $mysqli->error);
}
?>
<table>
    <tr>
        <th>id</th>
        <th>first-name</th>
        <th>last-name</th>
        <th>e-mail</th>
        <th>action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<form action='manage_clients.php' method='post'>";
        echo "<td><input id='id' readonly value='" . $row["id"] . "' name='id'></td>";
        echo "<td><input id='first-name' type='text' value='" . $row["first_name"] . "' name='first_name'></td>";
        echo "<td><input id='last-name' type='text' value='" . $row["last_name"] . "' name='last_name'></td>";
        echo "<td><input id='email' value='" . $row["email"] . "' name='email'></td>";
        echo "<td><input type='submit' name='remove' value='Remove'><input type='submit' name='change' value='Change'></td>";
        echo "</form>";
        echo "</tr>";
    }
    ?>
</table>
<?php
    mysqli_close($conn);
?>
