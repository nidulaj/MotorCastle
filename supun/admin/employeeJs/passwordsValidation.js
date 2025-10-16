function validatePasswords() {
    var password = document.forms["employeeForm"]["ePassword"].value;
    var confirmPassword = document.forms["employeeForm"]["eConfirmPassword"].value;
    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Check if passwords match
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false; 
    }

    
    if (!passwordPattern.test(password)) {
        alert("Password must be at least 8 characters long, include uppercase and lowercase letters, a number, and a symbol.");
        return false; 
    }

    return true; 
}