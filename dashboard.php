<?php
session_start();
include('includes/header.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include('config/db.php');

$query = 'SELECT COUNT(*) AS total_orders FROM orders';
$result = mysqli_query($conn, $query);
$total_orders = mysqli_fetch_assoc($result)['total_orders'];

$query = 'SELECT COUNT(*) AS total_shipments FROM shipments';
$result = mysqli_query($conn, $query);
$total_shipments = mysqli_fetch_assoc($result)['total_shipments'];

$query = 'SELECT COUNT(*) AS total_vehicles FROM vehicles';
$result = mysqli_query($conn, $query);
$total_vehicles = mysqli_fetch_assoc($result)['total_vehicles'];

?>

<div class="dashboard">
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Your Dashboard</p>
    <section>
        <h2>Overview</h2>
        <p>Total Orders: <?php echo $total_orders; ?></p>
        <p>Total Shipments: <?php echo $total_shipments; ?></p>
        <p>Total Vehicles: <?php echo $total_vehicles; ?></p>
    </section>
</div>
<link rel="stylesheet" href="css/dashboard.css">
<?php
include('includes/footer.php');
?>
