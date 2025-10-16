    document.getElementById('vehicle-type').addEventListener('change', function () {
      const selectedType = this.value; 
      const packages = document.querySelectorAll('.package');


      packages.forEach(pkg => {
        const vehicleTypeText = pkg.querySelector('.type').textContent; 


        if (selectedType === 'All') {
          pkg.style.display = 'flex';
        } 
        else if (vehicleTypeText.includes(selectedType)) {
          pkg.style.display = 'flex';
        } 
        else {
          pkg.style.display = 'none';
        }
      });
    });