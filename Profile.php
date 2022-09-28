<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./Registration.css">
    <link rel="stylesheet" href="./Common.css">
</head>
<body onload="fillField()">
    <nav>
        <ul>
          <li><a href="#home" target="_self">Dashboard</a></li>
          <li><a  href="Dashboard.php" target="_self">User Profile View</a></li>
          <li><a class="active" href="Profile.php" target="_self">Profile Edit</a></li>
          <li><a href="ChangePassword.php" target="_self">ChangePassword</a></li>
          <li><button onclick="logout()" class="btnLogout">Logout</button></li>
        </ul>
      </nav>
    <section class="container">
        <form onsubmit="return edit()">
            <fieldset>
                <legend>
                    <h3>User Updation Form</h3>
                </legend>
                <table>
                    <tr>
                        <th><label for="lblName">Name</label></th>
                        <td><input type="text" id="txtName" placeholder="Enter Your Full Name" required="required"></td>
                    </tr>
                    <tr>
                        <th><label for="lblEmail">Email</label></th>
                        <td><input type="text" id="txtEmail" placeholder="Enter Your Email-id">
                            <span id="email"></span>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="lblMobile">Mobile No.</label></th>
                        <td><input type="number" id="txtMobile" placeholder="Enter 10 digit Mobile No">
                            <span id="mobileno"></span>
                        </td>    
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-primary">Edit</button></td>
                    </tr>
                </table>
            </fieldset> 
        </form>
    </section>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>