
function validate() {

    const dUser = {};
    const name = document.getElementById('txtName').value;
    const mobile = document.getElementById('txtMobile').value;
    const strEmail = document.getElementById('txtEmail').value.trim().toLowerCase();
    const birthdate = document.getElementById('dtBirthDate').value
    const password = document.getElementById('txtPassword').value;
    var checkEmail = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
    let aUser = [];
    aUser = JSON.parse(localStorage.getItem("users")) ? JSON.parse(localStorage.getItem("users")) : [];

    if (checkEmail.test(strEmail)) {
        document.getElementById('email').innerHTML = '';

    }
    else {
        document.getElementById('email').innerHTML = "<b>Please enter a valid Email ID</b>";
        return false;
    }


    var checkMobile = /^[789][0-9]{9}$/;

    if (checkMobile.test(mobile)) {
        document.getElementById('mobileno').innerHTML = '';
    }
    else {
        document.getElementById('mobileno').innerHTML = "<b>Please enter a valid mobile number</b>";
        return false;
    }



    var checkPassword = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

    if (checkPassword.test(password)) {
        document.getElementById('password').innerHTML = '';
    }
    else {
        document.getElementById('password').innerHTML = "<b>Password must be less than 8 to 16 length</b>";
        return false;
    }

    dUser.name = name;
    dUser.email = strEmail;
    dUser.password = password;
    dUser.mobile = mobile;
    dUser.birthdate = birthdate;


    if (document.getElementById('rbMale').checked) {
        dUser.gender = 'Male';
    }
    else if (document.getElementById('rbFemale').checked) {
        dUser.gender = 'Female';
    }
    aUser.push(dUser);

    localStorage.setItem('users', JSON.stringify(aUser));
    window.open('./Login.php');
}
var userArray = JSON.parse(localStorage.getItem('users'));
function login() {

    const strEmail = document.getElementById('txtEmail').value.trim().toLowerCase();
    const password = document.getElementById('txtPassword').value;


    for (let i = 0; i < userArray.length; i++) {
        if (userArray[i].email == strEmail) {
            if (userArray[i].password == password) {
                sessionStorage.setItem('userIndex', i);
                window.open("./Dashboard.php");
                return true;
            }
        }

    }
}

function logout() {
    sessionStorage.clear();
    window.open('Login.php');
}


function display() {

    let dUser = {};
    let details = JSON.parse(localStorage.getItem("users"));
    let index = sessionStorage.getItem("userIndex");
    dUser = details[index];
    document.getElementById("lblName").innerHTML = dUser.name;
    document.getElementById('lblDOB').innerHTML = dUser.birthdate;
    document.getElementById('lblGender').innerHTML = dUser.gender;
    document.getElementById('lblEmail').innerHTML = dUser.email;
    document.getElementById('lblMobile').innerHTML = dUser.mobile;
}

function fillField() {
    let dUser = {};
    let details = JSON.parse(localStorage.getItem("users"));
    let index = sessionStorage.getItem("userIndex");
    dUser = details[index];
    document.getElementById('txtName').value = dUser.name;
    document.getElementById('txtEmail').value = dUser.email;
    document.getElementById('txtMobile').value = dUser.mobile;
}

function edit() {
    let oUser = {};
    let details = JSON.parse(localStorage.getItem("users"));
    let index = sessionStorage.getItem("userIndex");

    const newName = document.getElementById('txtName').value;
    const newMobile = document.getElementById('txtMobile').value;
    const newEmail = document.getElementById('txtEmail').value.trim().toLowerCase();
    oUser = details[index];

    var checkEmail = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
    if (checkEmail.test(newEmail)) {
        document.getElementById('email').innerHTML = '';
    }
    else {
        document.getElementById('email').innerHTML = "<b>Please enter a valid Email ID</b>";
        return false;
    }


    var checkMobile = /^[789][0-9]{9}$/;

    if (checkMobile.test(newMobile)) {
        document.getElementById('mobileno').innerHTML = '';
    }
    else {
        document.getElementById('mobileno').innerHTML = "<b>Please enter a valid mobile number</b>";
        return false;
    }

    if (confirm("Are you sure you want to update")) {
        details[index].name = newName;
        details[index].email = newEmail;
        details[index].mobile = newMobile;
        localStorage.setItem('users', JSON.stringify(details));
        document.getElementById('txtName').value = '';
        document.getElementById('txtMobile').value = '';
        document.getElementById('txtEmail').value = '';
        alert('Profile updated successfully');
    }
    window.open('Dashboard.php');
}

function changePassword() {

    let oUser = {};
    let details = JSON.parse(localStorage.getItem("users"));
    let index = sessionStorage.getItem("userIndex");


    const oldPassword = document.getElementById('txtOldPassword').value;
    const newPassword = document.getElementById('txtNewPassword').value;
    const cNewPassword = document.getElementById('txtCNewPassword').value;
    oUser = details[index];
    var checkPassword = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

    if (checkPassword.test(oldPassword)) {
        document.getElementById('Oldpassword').innerHTML = '';
    }
    else {
        document.getElementById('Oldpassword').innerHTML = "<b>Password must be less than 8 to 16 length</b>";
        return false;
    }


    if (details[index].password == oldPassword) {

        if (confirm('Are you sure you want to change your password?')) {
            if (cNewPassword == newPassword) {
                details[index].password = newPassword;
                localStorage.setItem('users', JSON.stringify(details));
                document.getElementById('txtOldPassword').innerHTML = "";
                document.getElementById('txtNewPassword').innerHTML = "";
                alert('Password changed successfully');
            }
            else{
                alert('Password must be same as new password');
            }
        }
        window.open('Login.php');
    }

    else {
        document.getElementById('NewPassword').innerHTML = 'Old Password and New Password must be the same';
    }

}

function Timer() {
   
}





