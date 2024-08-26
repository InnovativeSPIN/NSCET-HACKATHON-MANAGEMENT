<?php
require_once('../resources/connection.php');

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

// session_start();
header('Content-Type: application/json');
function getDepartmentCategory($dept)
{
    $cse_domain = ['AI&DS', 'CSE', 'IT'];
    $civil = 'CIVIL';
    $mech = 'MECH';
    $eee = 'EEE';
    $ece = 'ECE';

    if (in_array($dept, $cse_domain)) {
        return 'CSE_DOMAIN';
    } elseif ($dept === $civil) {
        return 'CIVIL';
    } elseif ($dept === $mech) {
        return 'MECH';
    } elseif ($dept === $eee) {
        return 'EEE';
    } elseif ($dept === $ece) {
        return 'ECE';
    } else {
        return 'UNKNOWN';
    }
}

// $team_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_member_reg_no = $conn->real_escape_string(trim($_POST["reg_no"]));
    $team_id = $conn->real_escape_string($_POST["team_id"]);

    $check_member_sql = "SELECT * FROM students WHERE reg_no = '$new_member_reg_no' AND team_id IS NULL";
    $check_member_result = $conn->query($check_member_sql);
    if ($check_member_result->num_rows == 0) {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid registration number'
        ]);
        exit();
    }
    $dept_categories = [];
    // rule 1
    $team_members_sql = "SELECT dept, gender FROM students WHERE team_id = '$team_id'";
    $team_members_result = $conn->query($team_members_sql);

    if ($team_members_result->num_rows > 6) {
        echo json_encode([
            'success' => false,
            'message' => 'The team already has 6 members'
        ]);
        exit();
    }

    // rule 2
    $gender_count = ['male' => 0, 'female' => 0];

    $group1_count = 0;
    $group2_count = 0;
    while ($member = $team_members_result->fetch_assoc()) {
        $gender_count[strtolower($member['gender'])]++;

        $dept_category = getDepartmentCategory($member['dept']);
        if (!in_array($dept_category, $dept_categories)) {
            $dept_categories[] = $dept_category;
        }
    }

    $new_member_sql = "SELECT dept, gender FROM students WHERE reg_no = '$new_member_reg_no'";
    $new_member_result = $conn->query($new_member_sql);
    $new_member = $new_member_result->fetch_assoc();

    $temp_gender_count = $gender_count;
    $temp_gender_count[strtolower($new_member['gender'])]++;

    $current_team_size = $team_members_result->num_rows;
    if ($current_team_size >= 4) {
        if ($current_team_size == 4) {
            if ($temp_gender_count['male'] > 4 || $temp_gender_count['female'] > 4) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Adding this member will violate the gender balance rule for the final team'
                ]);
                exit();
            }
        }

        if ($current_team_size == 5) {
            if ($temp_gender_count['male'] < 2 || $temp_gender_count['female'] < 2) {
                echo json_encode([
                    'success' => false,
                    'message' => 'The team must have at least 2 males and 2 females'
                ]);
                exit();
            }
        }
    }

    // rule 3
    if ($current_team_size == 5) {
        $new_member_dept_category = getDepartmentCategory($new_member['dept']);
        if (!in_array($new_member_dept_category, $dept_categories)) {
            $dept_categories[] = $new_member_dept_category;
        }

        if (count($dept_categories) < 2) {
            echo json_encode([
                'success' => false,
                'message' => 'The team must include members from at least two different departments'
            ]);
            exit();
        }
    }

    $team_members_sql = "SELECT team_members FROM teams WHERE id = '$team_id'";
    $team_members_result = $conn->query($team_members_sql);
    $team_row = $team_members_result->fetch_assoc();
    $team_members = $team_row['team_members'] ? json_decode($team_row['team_members'], true) : [];

    $team_members[] = $new_member_reg_no;

    $updated_team_members_json = json_encode($team_members);

    $update_team_sql = "UPDATE teams SET team_members = '$updated_team_members_json', updated_at = NOW() WHERE id = '$team_id'";
    if ($conn->query($update_team_sql) === TRUE) {
        $update_sql = "UPDATE students SET team_id = '$team_id' WHERE reg_no = '$new_member_reg_no'";
        if ($conn->query($update_sql) === TRUE) {
            echo json_encode([
                'success' => true,
                'message' => 'Team Member added successfully'
            ]);
            exit();
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Unable to add the member. Please contact the Hackathon Tech Team'
            ]);
            exit();
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Unable to add the member. Please contact the Hackathon Tech Team'
        ]);
        exit();
    }
}

$conn->close();
?>