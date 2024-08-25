<?php
require_once('../resources/connection.php');

function getDepartmentGroup($dept)
{
    $group1 = ['AI&DS', 'CSE', 'IT'];
    if (in_array($dept, $group1)) {
        return 'Group1';
    } else {
        return 'Group2';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_id = $conn->real_escape_string(trim($_POST["team_id"]));
    $new_member_reg_no = $conn->real_escape_string(trim($_POST["new_member_reg_no"]));

    $check_member_sql = "SELECT * FROM students WHERE reg_no = '$new_member_reg_no' AND team_id IS NULL";
    $check_member_result = $conn->query($check_member_sql);
    if ($check_member_result->num_rows == 0) {
        echo "<script>alert('Invalid registration number');
        window.location.href = 'https://nscet.org/hackathon/dashboard/teamLead.php';</script>";
        exit();
    }

    $team_members_sql = "SELECT dept, gender FROM students WHERE team_id = '$team_id'";
    $team_members_result = $conn->query($team_members_sql);

    if ($team_members_result->num_rows >= 6) {
        echo "<script>alert('The team already has 6 members');
        window.location.href = 'https://nscet.org/hackathon/dashboard/teamLead.php';</script>";
        exit();
    }

    $gender_count = ['male' => 0, 'female' => 0];

    $group1_count = 0;
    $group2_count = 0;
    while ($member = $team_members_result->fetch_assoc()) {
        $gender_count[strtolower($member['gender'])]++;

        $member_dept_group = getDepartmentGroup($member['dept']);
        if ($member_dept_group === 'Group1') {
            $group1_count++;
        } else {
            $group2_count++;
        }
    }

    $new_member_sql = "SELECT dept, gender FROM students WHERE reg_no = '$new_member_reg_no'";
    $new_member_result = $conn->query($new_member_sql);
    $new_member = $new_member_result->fetch_assoc();
    $new_member_dept_group = getDepartmentGroup($new_member['dept']);

    $gender_count[strtolower($new_member['gender'])]++;

    if ($team_members_result->num_rows + 1 >= 4) {
        if ($gender_count['male'] < 2 || $gender_count['female'] < 2) {
            echo "<script>alert('The team must consist of at least 2 boys or 2 girls');
            window.location.href = 'https://nscet.org/hackathon/dashboard/teamLead.php';</script>";
            exit();
        }
    }

    if ($team_members_result->num_rows == 5) {
        if (
            ($new_member_dept_group === 'Group1' && $group1_count > 0 && $group2_count == 0) ||
            ($new_member_dept_group === 'Group2' && $group2_count > 0 && $group1_count == 0)
        ) {
            echo "<script>alert('The team must include at least one member from a different department');
        window.location.href = 'https://nscet.org/hackathon/dashboard/teamLead.php';</script>";
            exit();
        }
    }

    $team_members_sql = "SELECT team_members FROM teams WHERE id = '$team_id'";
    $team_members_result = $conn->query($team_members_sql);
    $team_row = $team_members_result->fetch_assoc();
    $team_members = $team_row['team_members'] ? json_decode($team_row['team_members'], true) : [];

    $team_members[] = $new_member_reg_no;

    $updated_team_members_json = json_encode($team_members);

    $update_team_sql = "UPDATE teams SET team_members = '$updated_team_members_json' WHERE id = '$team_id'";
    if ($conn->query($update_team_sql) === TRUE) {
        $update_sql = "UPDATE students SET team_id = '$team_id' WHERE reg_no = '$new_member_reg_no'";
        if ($conn->query($update_sql) === TRUE) {
            echo "<script>alert('Team Member added successfully');
        window.location.href = 'https://nscet.org/hackathon/dashboard/teamLead.php';</script>";
        } else {
            echo "<script>alert('Database error: Unable to add the member. Please contact the Hackathon Tech Team.');
        window.location.href = 'https://nscet.org/hackathon/dashboard/teamLead.php';</script>";
        }
    } else {
        echo "<script>alert('Database error: Unable to add the member. Please contact the Hackathon Tech Team.');
    window.location.href = 'add_team_member.php';</script>";
    }
}

$conn->close();
?>