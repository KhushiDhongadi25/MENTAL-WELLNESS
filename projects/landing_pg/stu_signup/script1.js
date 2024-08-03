const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.add("active");
});

//Email and Password Validation
document.getElementById('myForm').addEventListener('submit', function(event) {
    // Get the input values
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Get the error message elements
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    var glow = document.getElementById('email');
    var pas = document.getElementById('password');

    // Regular expression for validating email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Reset error messages
    emailError.style.display = 'none';
    passwordError.style.display = 'none';

    

    // Validate email
    if (!emailRegex.test(email)) {
        event.preventDefault();
        emailError.style.display = 'block';
        glow.style.border="0.1vh solid red";
        glow.style.boxShadow="0 0 4px red";
    }

    // Validate password (at least 8 characters)
    if (password.length < 8) {
        passwordError.style.display = 'block';
        event.preventDefault();
        pas.style.border="0.1vh solid red";
        pas.style.boxShadow="0 0 4px red";
    }
});
