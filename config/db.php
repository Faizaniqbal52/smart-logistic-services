<?php

$host = 'mysql-188dbdc4-ifaizan041-bb5c.k.aivencloud.com';
$port = 12005;
$dbname = 'smart_logistics';
$username = 'avnadmin';
$password = 'AVNS_SeOTt7Waj_DoGqz1U0S';

$conn = mysqli_connect($host, $username, $password, $dbname, $port);

if (!$conn) {
    die("❌ MySQLi connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

if (isset($_POST['add_vehicle'])) {
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    $insertQuery = "INSERT INTO vehicles (type, status, location) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    mysqli_stmt_bind_param($stmt, "sss", $type, $status, $location);

    if (mysqli_stmt_execute($stmt)) {
        echo "<p style='color:lightgreen;'>✅ Vehicle added successfully.</p>";
    } else {
        echo "<p style='color:red;'>❌ Error: " . mysqli_error($conn) . "</p>";
    }
}

if (isset($_POST['delete_vehicle'])) {
    $vehicle_id = $_POST['vehicle_id'];

    $deleteQuery = "DELETE FROM vehicles WHERE id = ?";
    $stmt = mysqli_prepare($conn, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $vehicle_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<p style='color:lightgreen;'>✅ Vehicle deleted successfully.</p>";
    } else {
        echo "<p style='color:red;'>❌ Error: " . mysqli_error($conn) . "</p>";
    }
}

if (isset($_POST['update_vehicle'])) {
    $vehicle_id = $_POST['vehicle_id'];
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    $updateQuery = "UPDATE vehicles SET type = ?, status = ?, location = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $updateQuery);
    mysqli_stmt_bind_param($stmt, "sssi", $type, $status, $location, $vehicle_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<p style='color:lightgreen;'>✅ Vehicle updated successfully.</p>";
    } else {
        echo "<p style='color:red;'>❌ Error: " . mysqli_error($conn) . "</p>";
    }
}
?>
