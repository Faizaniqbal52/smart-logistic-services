<?php
include('includes/header.php');
?>
<link rel="stylesheet" href="css/warehouse.css">
<?php
include('config/db.php');

$query = 'SELECT * FROM warehouse';
$result = mysqli_query($conn, $query);

if ($result) {
    $warehouses = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $warehouses = [];
    echo "<p style='color:red;'>❌ Error: " . mysqli_error($conn) . "</p>";
}
?>

<div class="module">
    <h1>Warehouse</h1>
    <table>
        <thead>
            <tr>
                <th>Warehouse ID</th>
                <th>Location</th>
                <th>Capacity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($warehouses)) {
                foreach ($warehouses as $warehouse): ?>
                    <tr>
                        <td><?php echo $warehouse['id']; ?></td>
                        <td><?php echo $warehouse['location']; ?></td>
                        <td><?php echo $warehouse['capacity']; ?></td>
                    </tr>
                <?php endforeach;
            } else {
                echo "<tr><td colspan='3'>No warehouses found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
