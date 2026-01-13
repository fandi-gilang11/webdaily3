<?php
include "koneksi.php";
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Foto: " . $row["foto"]. "\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
