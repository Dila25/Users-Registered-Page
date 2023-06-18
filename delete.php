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

    // Delete query
    $sql = "DELETE FROM Bdetails WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
                alert("Record Delete successfully");
                window.location.href = "Main_Display.php";
            </script>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
