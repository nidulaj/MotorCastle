function updatePayment() {
    const vehicle = document.getElementById("vehicle").value;
    const packageType = document.getElementById("package").value;

    let payment = 0;

    
    if (vehicle == "car") {
        payment += 1000.00;
    } else if (vehicle == "van") {
        payment += 1500.00;
    } else if (vehicle == "jeep") {
        payment += 2000.00;
    } else if (vehicle == "bus") {
        payment += 2500.00;
    } else if (vehicle == "cab") {
        payment += 3000.00;
    }

    
    if (packageType == "General") {
        payment += 0.00;
    } else if (packageType == "Premium") {
        payment += 750.00;
    } else if (packageType == "VIP") {
        payment += 1500.00;
    }

    
    document.getElementById("payment_total").innerHTML = "Total Payment: Rs." + payment;
}



