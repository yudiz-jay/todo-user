<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./Registration.css">
</head>
<body>
    <section class="container">
        <form onsubmit="return validate()">
            <fieldset>
                <legend>
                    <h3>User Registration Form</h3>
                
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
                        <th><label for="lblGender">Gender</label></th>
                        <td><input type="radio" id="rbMale" name="gender"  required="required">&nbsp;<label>
                                Male</label>&nbsp;&nbsp;
                            <input type="radio" id="rbFemale" name="gender"  >&nbsp;<label> Female</label>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="lblBirthDate">Birth Date</label></th>
                        <td><input type="date" id="dtBirthDate" required="required"> </td>
                    </tr>
                    <tr>
                        <th><label for="lblPassword" class="form-label">Password</label></th>
                        <td><input type="password" id="txtPassword" class="form-control" placeholder="Enter Password">
                            <span id="password"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-primary">Sign UP</button></td>
                    </tr>
                    <tr>
                        <td><a href="Login.php">If you have already a user ?</a></td>
                    </tr>
                </table>
            </fieldset>
            
        </form>
    </section>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>