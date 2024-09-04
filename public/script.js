document.getElementById('registrationForm').addEventListener('submit', function(event) {
    let isValid = true;

    const username = document.getElementById('username').value;
    const usernameError = document.getElementById('usernameError');
    if (username.length < 3) {
        usernameError.textContent = 'Username must be at least 3 characters long.';
        isValid = false;
    } else {
        usernameError.textContent = '';
    }

    const email = document.getElementById('email').value;
    const emailError = document.getElementById('emailError');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        emailError.textContent = 'Please enter a valid email address.';
        isValid = false;
    } else {
        emailError.textContent = '';
    }

    const password = document.getElementById('password').value;
    const passwordError = document.getElementById('passwordError');
    if (password.length < 6) {
        passwordError.textContent = 'Password must be at least 6 characters long.';
        isValid = false;
    } else {
        passwordError.textContent = '';
    }

    if (!isValid) {
        event.preventDefault();
    }
});
