function validation() {
    var email = document.getElementById('email').value;
    var org = document.getElementById('organization').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm_password').value;
    var profilePicture = document.getElementById('profile_picture').value;
    var dob = document.getElementById('dob').value;

    document.getElementById('emailError').innerHTML = "";
    document.getElementById('organizationError').innerHTML = "";
    document.getElementById('passwordError').innerHTML = "";
    document.getElementById('confirmPasswordError').innerHTML = "";
    document.getElementById('profilePictureError').innerHTML = "";
    document.getElementById('dobError').innerHTML = "";

    var flag = true;

    if (email.trim() === "" || !email.endsWith(".com")) {
        document.getElementById('emailError').innerHTML = "Please enter a valid email ending with .com.";
        flag = false;
    }

    if (!isNaN(parseInt(org))) {
        document.getElementById('organizationError').innerHTML = "Organization name cannot be numeric.";
        flag = alse;
    }

    if (password.trim() === "" || !containsCapitalLetter(password)) {
        document.getElementById('passwordError').innerHTML = "Password must contain at least one capital letter.";
        flag = false;
    }

    if (confirmPassword.trim() === "" || password !== confirmPassword) {
        document.getElementById('confirmPasswordError').innerHTML = "Passwords do not match.";
        flag = false;
    }

    if (profilePicture.trim() === "") {
        document.getElementById('profilePictureError').innerHTML = "Please upload your profile picture.";
        flag = false;
    }

    var today = new Date();
    var dobDate = new Date(dob);
    if (dob.trim() === "" || dobDate > today) {
        document.getElementById('dobError').innerHTML = "Please enter a valid date of birth in the past.";
        flag = false;
    }

    return flag;
}

function containsCapitalLetter(str) {
    for (var i = 0; i < str.length; i++) {
        if (str[i] >= 'A' && str[i] <= 'Z') {
            return true;
        }
    }
    return false;
}