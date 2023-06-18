<!DOCTYPE html>
<html>
<head>
  <title>Blood Reservation</title>
  <link rel="stylesheet" href="Display.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  
  <div class="container">
    <!-- Your form code here -->
  </div>
  
  <div class="container">
    <h2>Registered Users Details</h2>
    <table id="data-table">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Gender</th>
          <th>Age</th>
          <th>Birthday</th>
          <th>Address</th>
          <th>Email</th>
          <th>Mobile Number</th>
          <th>Blood Type</th>
          <th>Guardian Full Name</th>
          <th>Guardian NIC Number</th>
          <th>Guardian Address</th>
          <th>Guardian E-mail</th>
          <th>Guardian Mobile Number</th>
          <th>button</th>
        </tr>
      </thead>
      <tbody>
        <?php include 'retrieve_data.php'; ?>
      </tbody>
    </table>
  </div>
  <a href="Main_Insert.php" class="float">
    <i class="fa fa-plus fa-2xl my-float"></i>
  </a>
  <div class="label-container">
    <div class="label-text">Add New Reservation</div>
    <i class="fa fa-play label-arrow"></i>
  </div>
  <footer>
    <p>&copy; 2023 Blood Reservation System</p>
  </footer>
</body>
</html>
