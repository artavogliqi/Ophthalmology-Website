function validateForm() {
  let x = document.forms["contact"]["Emri"].value;
  if (x == "") {
    alert("Your name");
    return false;
  }
  let y = document.forms["contact"]["mbiemri"].value;
  if (y == "") {
    alert("Your last name");
    return false;
  }
  let z = document.forms["contact"]["mail"].value;
  if (z == "") {
    alert("Your email");
    return false;
  }
  let m = document.forms["contact"]["msg"].value;
  if (m == "") {
    alert("Your message");
    return false;
  }
}
var registerButton = document.getElementById("registerButton");

        var nameMsg = document.getElementById("nameMsg");

        var nameRegex = /^[A-Z][a-z]{2,9}/;

        var emailRegex = /^[A-Za-z]+[._-]?\w+[+]?[A-Za-z]+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;
       
       registerButton.addEventListener("click", function(event){
           var name = document.getElementById("name").value;

           if(name == ""){
            nameMsg.innerText="Please fill the name field!";
               event.preventDefault();

           }else{
           if(nameRegex.test(name) == true){

           }else{
            nameMsg.innerText="Error";
            event.preventDefault();
           }

           }
       })


    
 