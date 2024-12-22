function validateForm() {
    var name = document.getElementById("Name").value;
    var gender = document.querySelector('input[name="Gender"]:checked');
    var email = document.getElementById("Email").value;
    var phone = document.getElementById("Phone").value;
    var dob = document.getElementById("Dob").value;
    var address = document.getElementById("Address").value;
    var joiningDate = document.getElementById("JoinDate").value;
    var password = document.getElementById("Password").value;
    var confirmPassword = document.getElementById("ConfirmPassword").value;

    var isAllDataSet = true;

    // Validate Name
    if (name === "" || !/^[a-zA-Z]/.test(name)) {
        document.getElementById("nameError").innerText = "Valid Name is required";
        isAllDataSet = false;
    } else {
        document.getElementById("nameError").innerText = "";
    }

    // Validate Gender
    if (!gender) {
        document.getElementById("genderError").innerText = "Gender is required";
        isAllDataSet = false;
    } else {
        document.getElementById("genderError").innerText = "";
    }

    // Validate Email
    if (email === "" || !/^[a-zA-Z]/.test(email)) {
        document.getElementById("emailError").innerText = "Valid Email is required";
        isAllDataSet = false;
    } else {
        document.getElementById("emailError").innerText = "";
    }

    // Validate Phone
    if (phone === "" || !phone.startsWith("01")) {
        document.getElementById("phoneError").innerText = "Phone number must start with '01'";
        isAllDataSet = false;
    } else {
        document.getElementById("phoneError").innerText = "";
    }

    // Validate Dob
    if (dob === "") {
        document.getElementById("dobError").innerText = "Dob is required";
        isAllDataSet = false;
    } else {
        document.getElementById("dobError").innerText = "";
    }

    // Validate Address
    if (address === "" || !/^[a-zA-Z]/.test(address)) {
        document.getElementById("addressError").innerText = "Address is required";
        isAllDataSet = false;
    } else {
        document.getElementById("addressError").innerText = "";
    }

    // Validate Joining Date
    if (joiningDate === "") {
        document.getElementById("joiningDateError").innerText = "Joining Date is required";
        isAllDataSet = false;
    } else {
        document.getElementById("joiningDateError").innerText = "";
    }

    // Validate Password
    if (password === "" || confirmPassword === "") {
        document.getElementById("passwordError").innerText = "Password and Confirm Password are required";
        isAllDataSet = false;
    } else if (password !== confirmPassword) {
        document.getElementById("passwordError").innerText = "Password and Confirm Password must be the same";
        isAllDataSet = false;
    } else {
        document.getElementById("passwordError").innerText = "";
    }

    // Validate Confirm Password
    if (confirmPassword === "") {
        document.getElementById("confirmPasswordError").innerText = "Confirm Password is required";
        isAllDataSet = false;
    } else {
        document.getElementById("confirmPasswordError").innerText = "";
    }

    return isAllDataSet;
}