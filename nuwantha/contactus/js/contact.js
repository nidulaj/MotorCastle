document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contactForm");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); 

       
        
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        

        
        if (name !== "" && email !== "" && message !== "") {
          
            alert("Do you want to send inquiry");
            form.submit(); 
        } else {
            
            alert("Unsuccessful");
        }
    });
});
