 
 function showDiv() {
    var div = document.getElementById('dashboardHeading');
    div.style.display = 'block'; 

    setTimeout(function() {
        div.textContent = 'Employee Management'; 
    }, 5000); 
}


window.onload = function() {
    showDiv();
};