<?php
require_once('../resources/connection.php'); // Database connection
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $email = $conn->real_escape_string($_POST["email"]);
    $team_id = $conn->real_escape_string($_POST["team_id"]);
    $team_name = $conn->real_escape_string($_POST["team_name"]);
    $team_lead_reg_no = $conn->real_escape_string($_POST["team_lead_reg_no"]);
    $team_lead_name = $conn->real_escape_string($_POST["team_lead_name"]);
    $account_number = $conn->real_escape_string($_POST["account_number"]);
    $bank_name = $conn->real_escape_string($_POST["bank_name"]);
    $transaction_id = $conn->real_escape_string($_POST["transaction_id"]);

    // Handle file upload for Payment Proof
    $payment_proof_path = '';

    if (isset($_FILES['payment_proof']) && $_FILES['payment_proof']['error'] == 0) {
        // Check for file size and type
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($_FILES['payment_proof']['type'], $allowed_types) && $_FILES['payment_proof']['size'] <= 10 * 1024 * 1024) { // 10MB limit
            $payment_proof_path = '../PaymentUploads/' . basename($_FILES['payment_proof']['name']);
            if (move_uploaded_file($_FILES['payment_proof']['tmp_name'], $payment_proof_path)) {
                // File uploaded successfully
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Failed to move uploaded file. Contact Hackathon Tech Team'
                ]);
                exit();
            }
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid file type or size exceeded. Contact Hackathon Tech Team'
            ]);
            exit();
        }
    } else {
        if (isset($_FILES['payment_proof'])) {
            echo json_encode([
                'success' => false,
                'message' => 'File upload error: ' . $_FILES['payment_proof']['error']
            ]);
            exit();
        }
    }

    // Start a transaction
    $conn->begin_transaction();
    try {
        // Insert the registration data into the 'team_registrations' table
        $insert_registration_sql = "
            INSERT INTO team_registrations (email, team_id, team_name, team_lead_reg_no, team_lead_name, account_number, bank_name, transaction_id, payment_proof, created_at) 
            VALUES ('$email', '$team_id', '$team_name', '$team_lead_reg_no', '$team_lead_name', '$account_number', '$bank_name', '$transaction_id', '$payment_proof_path', NOW())
        ";
        $conn->query($insert_registration_sql);

        // Commit the transaction
        $conn->commit();

        header('Location: ../dashboard/teamLead.php');
    } catch (Exception $e) {
        // Rollback transaction if any error occurs
        $conn->rollback();

        header('Location: ../dashboard/teamLead.php');
        exit();
    }
} else {
    header('Location: ../');
}

$conn->close();
?>
