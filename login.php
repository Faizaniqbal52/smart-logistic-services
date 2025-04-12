<?php
session_start();
include('config/db.php');
?>

<link rel="stylesheet" href="css/login.css">

<div class="login-container">
    <h2>Login to Your Account</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="submit">Login</button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE LOWER(name) = ?";
    $stmt = $conn->prepare($query);
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "Rows found: " . $result->num_rows . "<br>";

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo "DB password: " . $user['password'] . "<br>";
        
        if ($password === $user['password']) {
            $_SESSION['username'] = $user['name'];
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<p style='color: red;'>❌ Incorrect password.</p>";
        }
    } else {
        echo "<p style='color: red;'>❌ User not found.</p>";
    }
}
?>

<script src="js/particles.js"></script>
