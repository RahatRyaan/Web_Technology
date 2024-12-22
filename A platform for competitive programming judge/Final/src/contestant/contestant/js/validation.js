function validation() { 
    var firstName = document.getElementById('first_name').value;
        var lastName = document.getElementById('last_name').value;
        var email = document.getElementById('email').value;
        var dob = document.getElementById('dob').value;
        var organization = document.getElementById('organization').value;
        var phone = document.getElementById('phone').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirm_password').value;
        var terms = document.getElementById('terms').checked;

        var firstNameError = document.getElementById('firstNameError');
        var lastNameError = document.getElementById('lastNameError');
        var emailError = document.getElementById('emailError');
        var dobError = document.getElementById('dobError');
        var organizationError = document.getElementById('organizationError');
        var phoneError = document.getElementById('phoneError');
        var passwordError = document.getElementById('passwordError');
        var confirmPasswordError = document.getElementById('confirmPasswordError');
        var termsError = document.getElementById('termsError');

        // Clear any previous error messages
        firstNameError.textContent = '';
        lastNameError.textContent = '';
        emailError.textContent = '';
        dobError.textContent = '';
        organizationError.textContent = '';
        phoneError.textContent = '';
        passwordError.textContent = '';
        confirmPasswordError.textContent = '';
        termsError.textContent = '';

        if (!firstName) {
            firstNameError.textContent = 'First name is required.';
            e.preventDefault();
        }

        if (!lastName) {
            lastNameError.textContent = 'Last name is required.';
            e.preventDefault();
        }

        // Email Validation
        var emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
        if (!emailRegex.test(email)) {
            emailError.textContent = 'Please enter a valid email.';
            e.preventDefault();
        }

        // Date of Birth Validation
        var dobDate = new Date(dob);
        var today = new Date();
        var age = today.getFullYear() - dobDate.getFullYear();
        if (age < 5) {
            dobError.textContent = 'You must be at least 5 years old.';
            e.preventDefault();
        }

        if (!organization) {
            organizationError.textContent = 'Organization is required.';
            e.preventDefault();
        }

        // Phone Number Validation
        var phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(phone)) {
            phoneError.textContent = 'Please enter a valid 10-digit phone number.';
            e.preventDefault();
        }

        // Password Strength Validation
        var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        if (!passwordRegex.test(password)) {
            passwordError.textContent = 'Password must be 8 to 15 characters and contain at least one uppercase letter, one lowercase letter, one number, and one special character.';
            e.preventDefault();
        }

        if (password !== confirmPassword) {
            confirmPasswordError.textContent = 'Passwords do not match.';
            e.preventDefault();
        }

        if (!terms) {
            termsError.textContent = 'You must agree to the terms and conditions.';
            e.preventDefault();
        }
};
