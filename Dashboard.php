<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="./Common.css">
</head>

<body onload="display()">
  <nav>
    <ul>
      <li><a href="index.php" target="_self">Dashboard</a></li>
      <li><a class="active" href="Dashboard.php" target="_self">User Profile View</a></li>
      <li><a href="Profile.php" target="_self">Profile Edit</a></li>
      <li><a href="ChangePassword.php" target="_self">ChangePassword</a></li>
      <li><button onclick="logout()" class="btnLogout">Logout</button></li>
    </ul>
  </nav>
  <div id="result">
    <table cellspacing="5" cellpadding="5">
      <tr>
        <th>UserName</th>
        <th>:</th>
        <td id="lblName"></td>
      </tr>
      <tr>
        <th>Date of Birth</th>
        <th>:</th>
        <td id="lblDOB"></td>
      </tr>
      <tr>
        <th>Gender</th>
        <th>:</th>
        <td id="lblGender"></td>
      </tr>
      <tr>
        <th>Email</th>
        <th>:</th>
        <td id="lblEmail"></td>
      </tr>
      <tr>
        <th>Mobile Number</th>
        <th>:</th>
        <td id="lblMobile"></td>
      </tr>
    </table>
  </div>
  <script src="main.js"></script>
</body>

</html>