<?php
$conn = new mysqli("localhost", "username", "password", "database");
$result = $conn->query("SELECT * FROM jobs");
$jobs = array();
while ($row = $result->fetch_assoc()) {
    $jobs[] = $row;
}
echo json_encode($jobs);
?>
