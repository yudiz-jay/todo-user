<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./Common.css">
    <link rel="stylesheet" href="./Registration.css">

</head>

<body onload="Timer()">
    <nav>
        <ul>
            <li><a class="active" href="Index.php" target="_self">Dashboard</a></li>
            <li><a href="Dashboard.php" target="_self">User Profile View</a></li>
            <li><a href="Profile.php" target="_self">Profile Edit</a></li>
            <li><a href="ChangePassword.php" target="_self">ChangePassword</a></li>
            <li><button onclick="logout()" class="btnLogout">Logout</button></li>
        </ul>
    </nav>
    <!-- Sidebar -->
    <div style="width:25%;background-color: wheat;color:black;padding: 15px;position: relative;">
        <h3 class="w3-bar-item">Dashboard</h3>
        <hr />
        <div>
            <h3 class="" id="temperature"></h3>
            <h3 class="" id="icon"></h3>
            <h3 class="" id="description"></h3>
            <h3 class="" id="location"></h3>
        </div>
        <div class="divImage">
            <img id="img1" style="width:75%;height:30%">
        </div>
        <hr />
        <div class="divTimer">
            <h1 id="lblTime"></h1>
        </div>
    </div>
    <!--End Sidebar-->
    <div style="margin-left:27%;position:absolute;top:60px">
        
        <div>
            <h2>Add Tasks</h2>

            <label id="lblsuccess" style="display: none;"></label>

            <form id="addForm">
                <div>
                    <input type="text" onkeyup="toggleButton(this, 'submit')" id="item">

                    <input type="submit" id="submit" value="Submit">
                </div>
            </form>
            <h3>Tasks</h3>

            <form id="addForm">
                <ul id="items">

                </ul>
            </form>
        </div>
    </div>

    <script src="main.js"></script>
    <script type="text/javascript" src="Task.js"></script>
</body>

</html>
