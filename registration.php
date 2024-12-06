<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $dob = htmlspecialchars($_POST['dob']);
    $department = htmlspecialchars($_POST['department']);
    $gender = isset($_POST['radio-buttons']) ? $_POST['radio-buttons'] : '';
    $address = htmlspecialchars($_POST['address']);
    $pincode = htmlspecialchars($_POST['pincode']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $semester = isset($_POST['prefer']) ? implode(", ", $_POST['prefer']) : '';

    // For demo purposes, you can print the data
    echo "<h2>Form Submitted</h2>";
    echo "Name: " . $name . "<br>";
    echo "Father's Name: " . $fname . "<br>";
    echo "Mother's Name: " . $mname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Date of Birth: " . $dob . "<br>";
    echo "Department: " . $department . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Pincode: " . $pincode . "<br>";
    echo "Phone Number: " . $phonenumber . "<br>";
    echo "Semester(s): " . $semester . "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        h1 {
            color: black;
            font-size: 36px;
            text-align: center;
        }
        .input-field {
            width: 100%;
            padding: 10px;
        }
        .dropdown {
            width: 100%;
            padding: 10px;
        }
        button {
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<h1>REGISTRATION</h1>
<form method="POST" action="">
    <fieldset>
        <table id="t02" align="center">
            <tr>
                <td><label id="name-label" for="name">Name:</label></td>
                <td><input type="text" name="name" id="name" class="input-field" placeholder="Enter Your Name" required></td>
            </tr>
            <tr>
                <td><label id="fname-label" for="fname">Father's Name:</label></td>
                <td><input type="text" name="fname" id="fname" class="input-field" placeholder="Enter Your Father's Name" required></td>
            </tr>
            <tr>
                <td><label id="mname-label" for="mname">Mother's Name:</label></td>
                <td><input type="text" name="mname" id="mname" class="input-field" placeholder="Enter Your Mother's Name" required></td>
            </tr>
            <tr>
                <td><label id="email-label" for="email">Email:</label></td>
                <td><input type="email" name="email" id="email" class="input-field" placeholder="Enter Your Email" required></td>
            </tr>
            <tr>
                <td><label id="number-label" for="age">Age:</label></td>
                <td><input type="number" name="age" id="age" class="input-field" min="1" max="125" placeholder="Age" required></td>
            </tr>
            <tr>
                <td><label id="dob-label" for="dob">D.O.B:</label></td>
                <td><input type="date" name="dob" id="dob" class="input-field" required></td>
            </tr>
            <tr>
                <td><label for="department">Department:</label></td>
                <td>
                    <select id="department" name="department" class="dropdown" required>
                        <option disabled value>Select an option</option>
                        <option value="it">IT</option>
                        <option value="cse">CSE</option>
                        <option value="mech">MCA</option>
                        <option value="civil">CIVIL</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
        </table>

        <table id="t03" align="center">
            <tr>
                <td><label for="gender">Gender:</label></td>
                <td>
                    <ul style="list-style:none;">
                        <li><label><input name="radio-buttons" value="male" type="radio" class="userRatings">Male</label></li>
                        <li><label><input name="radio-buttons" value="female" type="radio" class="userRatings">Female</label></li>
                        <li><label><input name="radio-buttons" value="others" type="radio" class="userRatings">Others</label></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><textarea id="address" name="address" class="input-field" placeholder="Enter Your Address Here..." required></textarea></td>
            </tr>
            <tr>
                <td><label for="pincode">Pincode:</label></td>
                <td><input type="number" name="pincode" id="pincode" class="input-field" placeholder="6 digit Number" required></td>
            </tr>
            <tr>
                <td><label for="phonenumber">Phone Number:</label></td>
                <td><input type="number" name="phonenumber" id="phonenumber" class="input-field" placeholder="10 digit Number" required></td>
            </tr>
            <tr>
                <td><label for="language">Semester:</label></td>
                <td>
                    <ul id="language" style="list-style:none;">
                        <li><label><input name="prefer[]" value="sem1" type="checkbox" class="userRatings">S1</label></li>
                        <li><label><input name="prefer[]" value="sem2" type="checkbox" class="userRatings">S2</label></li>
                        <li><label><input name="prefer[]" value="sem3" type="checkbox" class="userRatings">S3</label></li>
                        <li><label><input name="prefer[]" value="sem4" type="checkbox" class="userRatings">S4</label></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
                <td><button type="reset">Reset</button></td>
            </tr>
        </table>
    </fieldset>
</form>

</body>
</html>
