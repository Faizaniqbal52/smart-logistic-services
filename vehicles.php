<?php
include('includes/header.php');
include('config/db.php');

if (isset($_POST['add_vehicle'])) {
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    $query = "INSERT INTO vehicles (type, status, location) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $type, $status, $location);
    mysqli_stmt_execute($stmt);
    header("Location: vehicle.php");
    exit();
}

if (isset($_POST['update_vehicle'])) {
    $id = $_POST['vehicle_id'];
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    $query = "UPDATE vehicles SET type=?, status=?, location=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $type, $status, $location, $id);
    mysqli_stmt_execute($stmt);
    header("Location: vehicle.php");
    exit();
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM vehicles WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    header("Location: vehicle.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM vehicles");
$vehicles = mysqli_fetch_all($result, MYSQLI_ASSOC);

$edit_vehicle = null;
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    $edit_result = mysqli_query($conn, "SELECT * FROM vehicles WHERE id='$edit_id'");
    $edit_vehicle = mysqli_fetch_assoc($edit_result);
}
?>

<style>
    <?php include('css/vehicle.css'); ?>
</style>

<div class="vehicles-module">
    <h1 class="module-title">🚚 Vehicle Management</h1>
    <h2 class="form-title"><?php echo $edit_vehicle ? "✏️ Update Vehicle" : "➕ Add New Vehicle"; ?></h2>

    <form method="POST" class="shipment-form">
        <?php if ($edit_vehicle): ?>
            <input type="hidden" name="vehicle_id" value="<?= $edit_vehicle['id']; ?>">
        <?php endif; ?>
        <div class="input-group">
            <input type="text" name="type" value="<?= $edit_vehicle['type'] ?? ''; ?>" required placeholder=" ">
            <label>Vehicle Type</label>
        </div>
        <div class="input-group">
            <select name="status" required>
                <option value="">--Select Status--</option>
                <?php
                $statuses = ["Available", "In Transit", "Maintenance"];
                foreach ($statuses as $status) {
                    $selected = ($edit_vehicle && $edit_vehicle['status'] == $status) ? 'selected' : '';
                    echo "<option value='$status' $selected>$status</option>";
                }
                ?>
            </select>
            <label>Status</label>
        </div>
        <div class="input-group">
            <input type="text" name="location" value="<?= $edit_vehicle['location'] ?? ''; ?>" required placeholder=" ">
            <label>Location</label>
        </div>
        <button type="submit" name="<?= $edit_vehicle ? 'update_vehicle' : 'add_vehicle'; ?>" class="submit-btn">
            <?= $edit_vehicle ? 'Update Vehicle' : 'Add Vehicle'; ?>
        </button>
    </form>

    <div class="table-container">
        <table class="vehicles-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehicles as $vehicle): ?>
                    <tr>
                        <td><?= $vehicle['id']; ?></td>
                        <td><?= $vehicle['type']; ?></td>
                        <td><?= $vehicle['status']; ?></td>
                        <td><?= $vehicle['location']; ?></td>
                        <td>
                            <a href="vehicle.php?edit=<?= $vehicle['id']; ?>" style="color: #60a5fa;">✏️ Edit</a> |
                            <a href="vehicle.php?delete=<?= $vehicle['id']; ?>" style="color: #f87171;" onclick="return confirm('Delete this vehicle?')">🗑️ Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
