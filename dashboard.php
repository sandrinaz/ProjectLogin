<?php
session_start();

// cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    !-- <h2>selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <?php
    echo "<h2>Selamat datang, " . $_SESSION['username'] . "!</h2>";
    ?>
    <p>Role: <?php echo $_SESSION['role']; ?></p>
    <a href="logout.php">Logout</a>

</body>

</html>