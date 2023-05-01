<?php
    include 'dbconnection.php';
    $username = $_POST['uName'];
    $password = $_POST['password'];

    // Validate input
    if (empty($username) || empty($password)) {
        echo "<script>alert('Please enter both username and password.');</script>";
        echo "<html><script>window.location.href = 'Utility.html';</script></html>";
        exit;
    }

    $sql = "SELECT * FROM Customer WHERE CUName = '$username' and CPass = MD5('$password')";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Login successful
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["CID"] = $row['CusID'];
        header("Location: Home.php");
        exit;
    } else {
        // Invalid username or password
        echo "<script>alert('Invalid username or password.');</script>";
        echo "<html><script>window.location.href = 'Utility.html';</script></html>";
        exit;
    }

    mysqli_close($conn);
?>
