<!DOCTYPE html>
<html>
<head>
  <title>Blood Reservation</title>
  <link rel="stylesheet" href="update.css">
</head>
<body>
  <header>
    <h1>Blood Reservation System</h1>
  </header>
  
  <div class="container">
    <h2>Update Details</h2>
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
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // Fetch existing data from the database
        $id = $_GET['id'];
        $sql = "SELECT * FROM Bdetails WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $Gender = $row['Gender']; // Add gender field
            $age = $row['age'];
            $birthday = $row['birthday'];
            $address = $row['address'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $bloodType = $row['bloodType'];
            $fullname = $row['fullname'];
            $nic = $row['nic'];
            $gaddress = $row['gaddress'];
            $Gemail = $row['Gemail'];
            $phone = $row['phone'];
        } else {
            echo "No record found";
        }
    }

    // Close the connection
    $conn->close();
    ?>

    <form method="POST" action="update.php">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
      </div>
      <tr>
    <td><label>Choose your gender:</label></td>
  </tr>
  <tr>
  <td><label for="male">Male</label></td>
  <td><input type="radio" name="Gender" id="male" value="Male" <?php if ($Gender == 'Male') echo 'checked="checked"'; ?>></td>
</tr>
<tr>
  <td><label for="female">Female</label></td>
  <td><input type="radio" name="Gender" id="female" value="Female" <?php if ($Gender == 'Female') echo 'checked="checked"'; ?>></td>
</tr>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $age; ?>" required>
      </div>
      <div class="form-group">
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" value="<?php echo $birthday; ?>" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $address; ?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" value="<?php echo $mobile; ?>" required>
      </div>
      <div class="form-group">
        <label for="bloodType">Blood Type:</label>
        <select id="bloodType" name="bloodType" required>
          <option value="">Select Blood Type</option>
          <option value="A+" <?php if ($bloodType == 'A+') echo 'selected'; ?>>A+</option>
          <option value="A-" <?php if ($bloodType == 'A-') echo 'selected'; ?>>A-</option>
          <option value="B+" <?php if ($bloodType == 'B+') echo 'selected'; ?>>B+</option>
          <option value="B-" <?php if ($bloodType == 'B-') echo 'selected'; ?>>B-</option>
          <option value="O+" <?php if ($bloodType == 'O+') echo 'selected'; ?>>O+</option>
          <option value="O-" <?php if ($bloodType == 'O-') echo 'selected'; ?>>O-</option>
          <option value="AB+" <?php if ($bloodType == 'AB+') echo 'selected'; ?>>AB+</option>
          <option value="AB-" <?php if ($bloodType == 'AB-') echo 'selected'; ?>>AB-</option>
        </select>
      </div>
      <hr>

      <h3>Details Of Guardian</h3>
      <br>
      <div class="form-group">
        <label>Full Name:</label>
        <input type="text" name="fullname" value="<?php echo  $fullname; ?>" required>
      </div>
      <div class="form-group">
        <label>NIC Number:</label>
        <input type="text" name="nic" value="<?php echo $nic; ?>" required>
      </div>
      <div class="form-group">
        <label>Address:</label>
        <input type="text" name="gaddress" value="<?php echo $gaddress; ?>" required>
      </div>
      <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="Gemail" value="<?php echo $Gemail; ?>" required>
      </div>
      <div class="form-group">
        <label>Mobile Number:</label>
        <input type="tel" id="guardianMobile" name="phone" pattern="[0-9]{10}" value="<?php echo $phone; ?>" required>
      </div>
      <div class="buttons">
        <a href="Main_Display.php">Back</a>
        <button type="submit" class="register-btn">Update Now</button>
      </div>
    </form>
  </div>

  <footer>
    <p>&copy; 2023 Blood Reservation System</p>
  </footer>

  <script src="validation.js"></script>

</body>
</html>
