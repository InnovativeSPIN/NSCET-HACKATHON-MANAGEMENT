<?php
require_once('./connection.php');

// Collect POST data
$email = $_POST["email"];
$password = $_POST["password"];
$role = $_POST["role"];

// Admin constant password
define('ADMIN_PASSWORD', 'YourAdminPasswordHere');

try {
    // SQL query based on role
    if ($role === 'Team Leader') {
        $sql = "SELECT * FROM `teams` WHERE `email` = ? AND `password` = ?";
    } elseif ($role === 'Mentor') {
        $sql = "SELECT * FROM `mentors` WHERE `email` = ? AND `password` = ?";
    } elseif ($role === 'Admin') {
        // Check if the password matches the admin password
        if ($password === ADMIN_PASSWORD) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;
            header("Location: admin_dashboard.php");
            exit;
        } else {
            throw new Exception("Invalid admin password");
        }
    } else {
        throw new Exception("Invalid role selected");
    }

    // If the role is 'Team Leader' or 'Mentor', proceed with DB check
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Successful login
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;

        if ($role === 'Team Leader') {
            header("Location: ../dashboard/teamLead.php");
        } elseif ($role === 'Mentor') {
            header("Location: mentor_dashboard.php");
        }
        exit;
    } else {
        throw new Exception("Invalid email or password");
    }

} catch (Exception $e) {
    echo "<script>alert('Error: " . $e->getMessage() . ". Please try again.');
    window.location.href = '../login.php';</script>";
}

$conn->close();
?>
