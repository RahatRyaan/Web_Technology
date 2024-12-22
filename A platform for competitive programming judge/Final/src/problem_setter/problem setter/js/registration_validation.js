function validation() {
    var isValid = true;

    isValid = validateFirstName() && isValid;
    isValid = validateLastName() && isValid;
    isValid = validateEmail() && isValid;
    isValid = validateDOB() && isValid;
    isValid = validateGender() && isValid;
    isValid = validateOrganization() && isValid;
    isValid = validateCountry() && isValid;
    isValid = validatePhone() && isValid;
    isValid = validateBio() && isValid;
    isValid = validatePassword() && isValid;
    isValid = validateConfirmPassword() && isValid;
    isValid = validateProfilePicture() && isValid;
    isValid = validateTerms() && isValid;

    if (isValid) {
        alert('Registration Successful!');
        document.getElementById('registrationStatus').innerHTML = "Registration Successful!";
    } else {
        alert('Registration Failed ');
        document.getElementById('registrationStatus').innerHTML = "Registration Failed ";
    }

    return isValid;
}

function validateFirstName() {
    var firstName = document.getElementById('first_name').value;

    if (firstName === "") {
        document.getElementById('firstNameError').innerHTML = "Please enter your first name.";
        return false;
    }

    for (var i = 0; i < firstName.length; i++) {
        if (!isNaN(parseInt(firstName[i]))) {
            document.getElementById('firstNameError').innerHTML = "First name should not contain numeric characters.";
            return false;
        }
    }

    return true;
}

function validateLastName() {
    var lastName = document.getElementById('last_name').value;

    if (lastName === "") {
        document.getElementById('lastNameError').innerHTML = "Please enter your last name.";
        return false;
    }

    for (var i = 0; i < lastName.length; i++) {
        if (!isNaN(parseInt(lastName[i]))) {
            document.getElementById('lastNameError').innerHTML = "Last name should not contain numeric characters.";
            return false;
        }
    }

    return true;
}

function validateEmail() {
    var email = document.getElementById('email').value;

    if (email === "") {
        document.getElementById('emailError').innerHTML = "Please enter your email address.";
        return false;
    }

    return true;
}

function validateDOB() {
    var dob = document.getElementById('dob').value;

    if (dob === "") {
        document.getElementById('dobError').innerHTML = "Please enter your date of birth.";
        return false;
    }

    // Add additional date of birth validation logic if needed

    return true;
}

function validateGender() {
    var gender = document.querySelector('input[name="gender"]:checked');

    if (!gender) {
        document.getElementById('genderError').innerHTML = "Please select your gender.";
        return false;
    }

    return true;
}

function validateOrganization() {
    var organization = document.getElementById('organization').value;

    if (organization === "") {
        document.getElementById('organizationError').innerHTML = "Please enter your organization.";
        return false;
    }

    return true;
}

function validateCountry() {
    var country = document.getElementById('country').value;

    if (country === "select country") {
        document.getElementById('countryError').innerHTML = "Please select your country.";
        return false;
    }

    return true;
}

function validatePhone() {
    var phone = document.getElementById('phone').value;

    if (phone === "") {
        document.getElementById('phoneError').innerHTML = "Please enter your phone number.";
        return false;
    } 

    for (var i = 0; i < phone.length; i++) {
        if (phone[i] < '0' || phone[i] > '9') {
            return false;
        }
    }

    return true;
}

function validateBio() {
    var bio = document.getElementById('bio').value;

    if (bio === "") {
        document.getElementById('bioError').innerHTML = "Please enter your bio.";
        return false;
    }

    return true;
}

function validatePassword() {
    var password = document.getElementById('password').value;

    if (password === "") {
        document.getElementById('passwordError').innerHTML = "Please enter your password.";
        return false;
    } else if (password.length < 8) {
        document.getElementById('passwordError').innerHTML = "Password must be at least 8 characters long.";
        return false;
    }

    return true;
}

function validateConfirmPassword() {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm_password').value;

    if (confirmPassword === "") {
        document.getElementById('confirmPasswordError').innerHTML = "Please confirm your password.";
        return false;
    } else if (password !== confirmPassword) {
        document.getElementById('confirmPasswordError').innerHTML = "Passwords do not match.";
        return false;
    }

    return true;
}

function validateProfilePicture() {
    var profilePicture = document.getElementById('profile_picture').value;

    if (profilePicture === "") {
        document.getElementById('profilePictureError').innerHTML = "Please upload your profile picture.";
        return false;
    }

    var allowedExtensions = ['jpeg', 'jpg', 'png'];
    var fileExtension = profilePicture.split('.').pop().toLowerCase();

    if (!allowedExtensions.includes(fileExtension)) {
        document.getElementById('profilePictureError').innerHTML = "Profile picture must be in JPG, JPEG, or PNG format.";
        return false;
    }

    return true;
}


function validateTerms() {
    var terms = document.getElementById('terms').checked;

    if (!terms) {
        document.getElementById('termsError').innerHTML = "Please agree to the terms and conditions.";
        return false;
    }

    return true;
}