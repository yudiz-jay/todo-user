<!DOCTYPE html>
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
        <form class="container">
            <fieldset>
                <legend>
                    <h3>User Login</h3>
                </legend>
                <table>
                    <tr>
                        <th><label for="lblEmail">Email</label></th>
                        <td><input type="text" id="txtEmail" placeholder="Enter Your Email-id"></td>
                        <td><span id="email"></span></td>
                    </tr>      
                    <tr>
                        <th><label for="lblPassword" class="form-label">Password</label></th>
                        <td><input type="password" id="txtPassword" class="form-control" placeholder="Enter Password"></td>
                        <td><span id="password"></span></td>
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-primary" onclick="login()">Log in</button></td>
                    </tr>
                    <tr>
                        <td><a href="Registration.php">If you are new user ?</a></td>
                    </tr>
                </table>
            </fieldset>
            
        </form>
    </section>
    <script type="text/javascript" src="./main.js"></script>
</body>

</html>