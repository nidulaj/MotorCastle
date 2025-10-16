document.getElementById("calculate-btn").addEventListener("click", function() {
  const chargeMethod = document.getElementById("charge-method").value;
  const vehicleType = document.getElementById("vehicle-type").value;
  const chargingTime = parseFloat(document.getElementById("charging-time").value);
  let chargeRate = 0;

  
  const rates = {
      daily: {
          small: 10,  
          medium: 15,  
          large: 20    
      },
      monthly: {
          small: 200,  
          medium: 300, 
          large: 400   
      }
  };

  
  chargeRate = rates[chargeMethod][vehicleType];

  
  let totalCost;
  if (chargeMethod === "daily") {
      totalCost = chargeRate * chargingTime;
  } else {
      totalCost = chargeRate; 
  }

  
  document.getElementById("result").innerText = `Total Charge: $${totalCost.toFixed(2)}`;
});
