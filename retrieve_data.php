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

// Fetch data from the database
$sql = "SELECT * FROM Bdetails";
$result = $conn->query($sql);

// Display the retrieved data in the table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['birthday'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";       
        echo "<td>" . $row['bloodType'] . "</td>";
        echo "<td>" . $row['fullname'] . "</td>";
        echo "<td>" . $row['nic'] . "</td>";        
        echo "<td>" . $row['gaddress'] . "</td>";
        echo "<td>" . $row['Gemail'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>";
        echo "<a href='Main_update.php?id=" . $row['id'] . "'>Update</a>";
        echo "<form method='POST' action='delete.php' style='display:inline-block;'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<button type='submit'>Delete</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
}

// Close the connection
$conn->close();
?>
