 
 function showDiv() {
    var div = document.getElementById('dashboardHeading');
    div.style.display = 'block'; 

    setTimeout(function() {
        div.textContent = 'Administrator Dashboard'; 
    }, 5000); 
}


window.onload = function() {
    showDiv();
};