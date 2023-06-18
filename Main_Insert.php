<!DOCTYPE html>
<html>
<head>
  <title>Blood Reservation</title>
  <link rel="stylesheet" href="Inseert.css">
</head>
<body>
  <header>
    <h1>Blood Reservation System</h1>
  </header>
  <div class="container">
    <h2>Blood Reservation Form</h2>
    <form action="insert.php" method="POST">
      <table>
        <tr>
          <td><label for="name">Full Name:</label></td>
          <td><input type="text" id="name" name="name" required></td>
        </tr>
        
       
  <tr>
    <td><label>Choose your gender:</label></td>
  </tr>
  <tr>
    <td><label for="male">Male</label></td>
    <td><input type="radio" name="gender" id="male" value="male" checked></td>
  </tr>
  <tr>
    <td><label for="female">Female</label></td>
    <td><input type="radio" name="gender" id="female" value="female"></td>
  </tr>

         
      
        <br>
        <tr>
          <td><label for="age">Age:</label></td>
          <td><input type="number" id="age" name="age" required></td>
        </tr>
        <tr>
          <td><label for="birthday">Birthday:</label></td>
          <td><input type="date" id="birthday" name="birthday" required></td>
        </tr>
        <tr>
          <td><label for="address">Address:</label></td>
          <td><input type="text" id="address" name="address" required></td>
        </tr>
        <tr>
          <td><label for="email">Email:</label></td>
          <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
          <td><label for="mobile">Mobile Number:</label></td>
          <td><input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required></td>
        </tr>
        <tr>
          <td><label for="bloodType">Blood group:</label></td>
          <td>
            <select id="bloodType" name="bloodType" required>
              <option value="">Select Blood group</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
          </td>
        </tr>
      </table>

      <hr>

      <h3>Details Of Guardian</h3>
      <table>
        <tr>
          <td><label>Full Name:</label></td>
          <td><input type="text" name="fullname" required></td>
        </tr>
        <tr>
          <td><label>NIC Number:</label></td>
          <td><input type="text" name="nic" required></td>
        </tr>
        <tr>
          <td><label>Address:</label></td>
          <td><input type="text" name="gaddress" required></td>
        </tr>
        <tr>
          <td><label>E-mail:</label></td>
          <td><input type="email" name="Gemail" required></td>
        </tr>
        <tr>
          <td><label>Mobile Number:</label></td>
          <td><input type="tel" id="guardianMobile" pattern="[0-9]{10}" name="phone" required></td>
        </tr>
      </table>

      <div class="buttons">
        <a href="#">Back</a>
        <button class="regis">Register Now</button>
      </div>
    </form>
  </div>

  <footer>
    <p>&copy; 2023 Blood Reservation System</p>
  </footer>

  <script src="validation.js"></script>

</body>
</html>
