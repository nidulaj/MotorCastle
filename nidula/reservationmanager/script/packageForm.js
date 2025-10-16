function disablePriceUnit(){
  let dropdownValue = document.getElementById("packageUnit").value;
  if(dropdownValue==='none'){
    console.log("done");
    document.getElementById("unitPrice").disabled=true;
  }
  else{
    document.getElementById("unitPrice").disabled=false;
  }
};

function disableTotalPrice(){
  let dropdownValue = document.getElementById("packageUnit").value;
  if(dropdownValue==='hourly' || dropdownValue==='daily' || dropdownValue==='weekly' || dropdownValue==='monthly'){
    console.log("done");
    document.getElementById("totalPrice").disabled=true;
  }
  else{
    document.getElementById("totalPrice").disabled=false;
  }
};

document.getElementById("submit-button").addEventListener("click", function() {
  document.getElementsByClassName("popup")[0].classList.add("active"); 
});

document.getElementById("dismiss-popup-button").addEventListener("click", function() {
  document.getElementsByClassName("popup")[0].classList.remove("active"); 
});
