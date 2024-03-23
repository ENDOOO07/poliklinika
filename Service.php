<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";  
$dbname = "klinika";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT te_dhenat.id, te_dhenat.emri, te_dhenat.mbiemri, te_dhenat.datetime, te_dhenat.reparti, mjeku.DR FROM te_dhenat, mjeku WHERE te_dhenat.id = mjeku.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["emri"]. "</td><td>" . $row["mbiemri"]. "</td><td>" . $row["datetime"]. "</td><td>" . $row["reparti"]. "</td><td>" . $row["DR"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
