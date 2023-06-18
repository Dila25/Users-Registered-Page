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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $Gender = $_POST['Gender']; // Add gender field
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

    // Update query
    $sql = "UPDATE Bdetails SET name='$name', Gender='$Gender', age='$age', birthday='$birthday', address='$address', email='$email', mobile='$mobile', bloodType='$bloodType', fullname='$fullname', nic='$nic', gaddress='$gaddress', Gemail='$Gemail', phone='$phone' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
                alert("Record updated successfully");
                window.location.href = "Main_Display.php";
              </script>';
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
