<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./Registration.css">
    <link rel="stylesheet" href="./Common.css">
</head>
<body>
    <nav>
        <ul>
          <li><a href="index.php" target="_self">Dashboard</a></li>
          <li><a href="Dashboard.php" target="_self">User Profile View</a></li>
          <li><a href="Profile.php" target="_self">Profile Edit</a></li>
          <li><a class="active" href="ChangePassword.php" target="_self">ChangePassword</a></li>
          <li><button onclick="logout()" class="btnLogout">Logout</button></li>
        </ul>
      </nav>
    <section class="container">
        <form onsubmit="return changePassword()">
            <fieldset>
                <legend>
                    <h3>User Updation Form</h3>
                </legend>
                <table>
                    <tr>
                        <th><label for="lblPassword" class="form-label">Password</label></th>
                        <td><input type="password" id="txtOldPassword" class="form-control" placeholder="Enter Old Password">
                            <span id="Oldpassword"></span>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="lblNewPassword" class="form-label">New Password</label></th>
                        <td><input type="password" id="txtNewPassword" class="form-control" placeholder="Enter New Password">
                            <span id="Newpassword"></span>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="lblCNewPassword" class="form-label">Confirm Password</label></th>
                        <td><input type="password" id="txtCNewPassword" class="form-control" placeholder="Enter Confirm Password">
                        </td>
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-primary">Change Password</button></td>
                    </tr>
                </table>
            </fieldset> 
        </form>
    </section>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>