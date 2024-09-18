<?php
require_once('../resources/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $conn->real_escape_string(trim($_POST["role"]));
    $email = $conn->real_escape_string(trim($_POST["email"]));
    $password = trim($_POST["password"]);

    if ($role === "Team Leader") {
        $table = "teams";
        $redirect_url = "../dashboard/teamLead.php";
    } elseif ($role === "Mentor") {
        $table = "mentors";
        $redirect_url = "../dashboard/mentor_dashboard.php";
    }elseif ($role === "Hackathon Jury") {
        if ($password === 'JURY@NSCET' && $email === "hackathon@nscet.org") {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;
            $_SESSION['user_id'] = 'JURY';
            header("Location: ../dashboard/juryDashboard.php");
            exit;
        }else{
            header("Location: ../");
        }
    } elseif ($role === 'Admin') {
        if ($email !== 'hackathon@nscet.org') {
            echo "<script>
                alert('Invalid Admin Email Address');
                window.location.href = 'https://nscet.org/hackathon/login.php';
              </script>";
            exit();
        }
        if ($password === 'ADMIN@NSCET') {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;
            header("Location: ../dashboard/admin_dashboard.php");
            exit;
        } else {
            echo "<script>
                alert('Invalid admin password');
                window.location.href = 'https://nscet.org/hackathon/login.php';
              </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('Invalid role selected');
                window.location.href = 'https://nscet.org/hackathon/login.php';
              </script>";
        exit();
    }

    $sql = "SELECT * FROM $table WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $role;

            header("Location: $redirect_url");
            exit();
        } else {
            echo "<script>
                    alert('Incorrect password');
                    window.location.href = 'https://nscet.org/hackathon/login.php';
                  </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('No user found with this email');
                window.location.href = 'https://nscet.org/hackathon/login.php';
              </script>";
        exit();
    }
}

$conn->close();
?>