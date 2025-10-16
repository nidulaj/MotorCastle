

function validatePhoneNumber() {
    
    const phoneNumber = document.getElementById("eContact").value;
    const resultElement = document.getElementById("result");

    
    const phonePattern = /^[0-9]{10}$/;

    
    if (phonePattern.test(phoneNumber)) {
        resultElement.innerHTML = "<span style='color:green;'>Valid phone number</span>";
    } else {
        resultElement.innerHTML = "<span style='color:red;'>Invalid phone number. Please enter a 10-digit number.</span>";
    }

    return false;
}