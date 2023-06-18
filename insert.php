<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blooddb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required form fields are set
    if (isset($_POST['name'], $_POST['age'], $_POST['birthday'], $_POST['address'], $_POST['email'], $_POST['mobile'], $_POST['bloodType'], $_POST['fullname'], $_POST['nic'], $_POST['gaddress'], $_POST['Gemail'], $_POST['phone'], $_POST['gender'])) {
        // Get the form data
        $name = $_POST['name'];
        $age = $_POST['age'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $bloodType = $_POST['bloodType'];
        $fullname = $_POST['fullname'];
        $nic = $_POST['nic'];
        $gaddress = $_POST['gaddress'];
        $Gemail = $_POST['Gemail'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender']; // Add gender field

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO Bdetails (name, age, birthday, address, email, mobile, bloodtype, fullname, nic, gaddress, Gemail, phone, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sisssssssssss", $name, $age, $birthday, $address, $email, $mobile, $bloodType, $fullname, $nic, $gaddress, $Gemail, $phone, $gender);

        // Execute the statement
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            header("Location: Main_Display.php"); // Redirect to the display page
            exit();
        } else {
            $successMessage = "Error inserting data: " . $stmt->error;
        }
    } else {
        $successMessage = "Please fill out all the required fields.";
    }
}

// Close the connection
$conn->close();
?>
