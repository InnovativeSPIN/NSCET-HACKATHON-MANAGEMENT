const memberDetailDiv = document.querySelector(".member-detail");
const validateBtn = document.querySelector(".validate-btn");
const submitMemberBtn = document.getElementById("submitMemberBtn");
const regNumberInput = document.getElementById("regNumber");
const team_id_input = document.getElementById("team_id");
const studentNameInput = document.getElementById("StudentName");
const departmentInput = document.getElementById("department");
const yearInput = document.getElementById("year");

memberDetailDiv.style.display = "none";

validateBtn.addEventListener("click", function () {
    const regNumber = regNumberInput.value.trim();

    if (!regNumber) {
        alert("Please enter a registration number");
        return;
    }

    fetch(`../controllers/validate_student.php?reg_no=${regNumber}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                studentNameInput.value = data.name;
                departmentInput.value = data.dept;
                yearInput.value = data.year;

                memberDetailDiv.style.display = "block";
            } else {
                alert(data.message);
                memberDetailDiv.style.display = "none";
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Error validating registration number. Please try again.");
            memberDetailDiv.style.display = "none";
        });
});

submitMemberBtn.addEventListener("click", function () {
    const regNumber = regNumberInput.value.trim();
    const team_id = team_id_input.value

    if (!regNumber) {
        alert("Registration number or Team ID missing.");
        return;
    }

    const formData = new FormData();
    formData.append("reg_no", regNumber);
    formData.append("team_id", team_id);

    fetch("../controllers/team_registration.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Member added successfully");
                location.reload();
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Error adding member. Please try again.");
        });
})