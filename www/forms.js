function both(){
  function validateName();
  function myCheckFunction();
}
function validateName() {
  var name = document.getElementById("name").value.trim();
  var errorname = document.getElementById("errorname");
  if (name == "") {
    console.log("Empty");
    errorname.innerHTML = "Please fill in.";
    errorname.classList.add("showerror");
    console.log(errorname);
  } else {
    console.log("Not Empty");
    errorname.innerHTML = "";
    errorname.classList.remove("showerror");
    console.log(errorname);
  }
}

function myCheckFunction() {
  //Getting the checkbox
  var checkBox = document.getElementById("myChecking1");
  document.getElementById("myChecking2");
  document.getElementById("myChecking3");
  //Getting the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true) {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}
