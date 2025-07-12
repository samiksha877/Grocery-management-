<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'dbcon.php';
session_start();

$page = isset($_GET['page']) ? $_GET['page'] . '.php' : 'index.php';
if (isset($_SESSION['USER_ID'])) {
    header("Location: $page");
    exit;
}

$msg = '';

if (isset($_POST['submit'])) {
    $n = trim($_POST['Name']);
    $m = trim($_POST['Mobile']);
    $a1 = trim($_POST['Address']);
    $s = $_POST['State'];

    // Validate city input
    if ($_POST['City'] === 'Other') {
        $c = trim($_POST['OtherCity']);
        if (empty($c)) {
            $msg = "Please enter your city.";
        }
    } else {
        $c = trim($_POST['City']);
        if (empty($c)) {
            $msg = "Please select a city.";
        }
    }

    $pin = trim($_POST['Pincode']);
    $g = isset($_POST['Gn']) ? $_POST['Gn'] : '';
    $u = trim($_POST['Username']);
    $p = trim($_POST['Password']);

    // Server-side validation
    if (!$msg) {
        if (!preg_match('/^\d{6}$/', $pin)) {
            $msg = "Pincode must be exactly 6 digits.";
        } elseif (!preg_match('/^(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/', $p)) {
            $msg = "Password must be at least 8 characters with 1 special character.";
        } elseif (!preg_match('/^\d{10}$/', $m)) {
            $msg = "Mobile number must be exactly 10 digits.";
        } else {
            $sql = "INSERT INTO user(name, mobile, address1, state, city, Pincode, gender, username, password) 
                    VALUES ('$n', '$m', '$a1', '$s', '$c', '$pin', '$g', '$u', '$p')";
            if ($conn->query($sql)) {
                header('Location: login.php');
                exit;
            } else {
                $msg = 'Error: ' . $conn->error;
            }
        }
    }
}

if (isset($_POST['login'])) {
    $un = $_POST['User'];
    $pw = $_POST['Pass'];
    $sql = "SELECT uid, password FROM user WHERE username = '$un'";
    $result = $conn->query($sql);
    if ($result->num_rows) {
        $row = $result->fetch_assoc();
        if ($row['password'] != $pw) {
            $msg = 'Wrong Password';
        } else {
            $_SESSION['USER_ID'] = $row['uid'];
            $_SESSION['USER_NAME'] = $un;
            header("Location: $page");
            exit;
        }
    } else {
        $msg = 'Wrong Username';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login & Register</title>
    <style>
        body { background: #f0f2f5; font-family: Arial, sans-serif; }
        h2 { text-align: center; padding: 20px; }
        .container {
            max-width: 450px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .toggle { text-align: right; cursor: pointer; color: #007BFF; font-size: 14px; }
        .form { display: none; }
        .form.active { display: block; }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type=submit] {
            background: #007BFF;
            color: white;
            border: none;
        }
        input[type=submit]:hover {
            background: #0056b3;
        }
        .text-danger { color: red; font-size: 14px; }
        .gender-group {
            display: flex;
            gap: 15px;
            margin: 10px 0;
        }
        .gender-option {
            display: flex;
            align-items: center;
            gap: 6px;
            background: #f5f5f5;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            border: 1px solid #ccc;
        }
        .gender-option:hover {
            background-color: #e0e0e0;
        }
        .gender-option input[type="radio"] {
            accent-color: #007BFF;
        }
        .password-toggle { position: relative; }
        .password-toggle-icon {
            position: absolute;
            right: 10px;
            top: 36px;
            cursor: pointer;
        }
        .password-toggle-icon img {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>

<h2>User Login & Registration</h2>

<div class="container">
    <div class="toggle" onclick="toggleForms()">Switch to Register/Login</div>

    <div class="form active" id="loginForm">
        <h3>Login</h3>
        <span class="text-danger"><?= $msg ?></span>
        <form method="post">
            <input type="text" name="User" placeholder="Username" required>
            <div class="password-toggle">
                <input type="password" name="Pass" placeholder="Password" id="loginPassword" required>
                <span class="password-toggle-icon" onclick="togglePassword('loginPassword')"></span>
            </div>
            <input type="submit" name="login" value="Login">
        </form>
        <div style="text-align:center; margin-top:10px;">
            <a href="forgot.php">Forgot your password?</a>
        </div>
    </div>

    <div class="form" id="registerForm">
        <h3>Register</h3>
        <span class="text-danger"><?= $msg ?></span>
        <form method="post" onsubmit="return validateForm()">
            <input type="text" name="Name" placeholder="Full Name" required>
            <input type="text" name="Mobile" placeholder="Mobile No" required pattern="\d{10}">
            <input type="text" name="Address" placeholder="Address" required>

            <select name="State" id="stateDropdown" required onchange="populateCities(this.value)">
                <option value="">-- Select State --</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Delhi">Delhi</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Gujarat">Gujarat</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Bihar">Bihar</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Punjab">Punjab</option>
                <option value="Haryana">Haryana</option>
                <option value="Kerala">Kerala</option>
            </select>

            <select name="City" id="cityDropdown" required onchange="toggleOtherCity(this.value)">
                <option value="">-- Select City --</option>
            </select>

            <input type="text" name="OtherCity" id="otherCityInput" placeholder="Enter your city" style="display:none;">
            <input type="text" name="Pincode" placeholder="Pincode" required pattern="\d{6}">

            Gender:
            <div class="gender-group">
                <label class="gender-option">
                    <input type="radio" name="Gn" value="Male" required> Male
                </label>
                <label class="gender-option">
                    <input type="radio" name="Gn" value="Female" required> Female
                </label>
            </div>

            <input type="text" name="Username" placeholder="Username" required>
            <input type="password" id="password" name="Password" placeholder="Password (8+ chars, 1 special)" required>
            <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</div>

<script>
function toggleForms() {
    document.getElementById("loginForm").classList.toggle("active");
    document.getElementById("registerForm").classList.toggle("active");
}

function validateForm() {
    const password = document.getElementById("password").value;
    const confirm = document.getElementById("confirmPassword").value;
    const cityDropdown = document.getElementById("cityDropdown");
    const otherCityInput = document.getElementById("otherCityInput");

    if (password.length < 8 || !/[!@#$%^&*]/.test(password)) {
        alert("Password must be at least 8 characters and include 1 special character.");
        return false;
    }

    if (password !== confirm) {
        alert("Passwords do not match.");
        return false;
    }

    if (cityDropdown.value === "") {
        alert("Please select a city.");
        return false;
    }

    if (cityDropdown.value === "Other" && !otherCityInput.value.trim()) {
        alert("Please enter your city.");
        return false;
    }

    return true;
}

const stateCities = {
    "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad", "Solapur", "Kolhapur", "Thane", "Akola", "Amravati", "Jalgaon", "Satara", "Dhule", "Sangli", "Other"],
    "Delhi": ["New Delhi", "North Delhi", "South Delhi", "East Delhi", "West Delhi", "Central Delhi", "Other"],
    "Karnataka": ["Bangalore", "Mysore", "Mangalore", "Hubli", "Belgaum", "Davanagere", "Ballari", "Tumkur", "Mandya", "Chitradurga", "Udupi", "Other"],
    "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Trichy", "Salem", "Tirunelveli", "Erode", "Vellore", "Chidambaram", "Tiruppur", "Dharmapuri", "Other"],
    "Uttar Pradesh": ["Lucknow", "Kanpur", "Varanasi", "Agra", "Ghaziabad", "Noida", "Meerut", "Allahabad", "Mathura", "Bareilly", "Moradabad", "Aligarh", "Other"],
    "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Nadiad", "Junagadh", "Anand", "Porbandar", "Gandhinagar", "Vapi", "Other"],
    "West Bengal": ["Kolkata", "Siliguri", "Howrah", "Asansol", "Durgapur", "Jalpaiguri", "Medinipur", "Berhampore", "Kharagpur", "Raiganj", "Bardhaman", "Other"],
    "Rajasthan": ["Jaipur", "Udaipur", "Jodhpur", "Ajmer", "Kota", "Bikaner", "Alwar", "Bhilwara", "Tonk", "Chittorgarh", "Sikar", "Other"],
    "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Munger", "Purnia", "Darbhanga", "Saharsa", "Chapra", "Ara", "Bettiah", "Other"],
    "Madhya Pradesh": ["Indore", "Bhopal", "Jabalpur", "Gwalior", "Ujjain", "Sagar", "Rewa", "Satna", "Khandwa", "Khargone", "Dewas", "Other"],
    "Punjab": ["Chandigarh", "Amritsar", "Ludhiana", "Jalandhar", "Patiala", "Bathinda", "Mohali", "Moga", "Hoshiarpur", "Firozpur", "Barnala", "Other"],
    "Haryana": ["Gurgaon", "Faridabad", "Ambala", "Panipat", "Hisar", "Karnal", "Sirsa", "Sonipat", "Rohtak", "Yamunanagar", "Other"],
    "Kerala": ["Kochi", "Thiruvananthapuram", "Kozhikode", "Kollam", "Alappuzha", "Thrissur", "Palakkad", "Kannur", "Malappuram", "Pathanamthitta", "Kottayam", "Idukki", "Other"]
};

function populateCities(state) {
    const cityDropdown = document.getElementById("cityDropdown");
    const otherCityInput = document.getElementById("otherCityInput");
    cityDropdown.innerHTML = '<option value="">-- Select City --</option>';

    if (stateCities[state]) {
        stateCities[state].forEach(city => {
            const option = document.createElement("option");
            option.value = city;
            option.textContent = city;
            cityDropdown.appendChild(option);
        });
    }

    otherCityInput.style.display = "none";
}

function toggleOtherCity(value) {
    const otherInput = document.getElementById("otherCityInput");
    if (value === "Other") {
        otherInput.style.display = "block";
        otherInput.required = true;
    } else {
        otherInput.style.display = "none";
        otherInput.required = false;
    }
}

function togglePassword(id) {
    const field = document.getElementById(id);
    field.type = field.type === "password" ? "text" : "password";
}
</script>

</body>
</html>
