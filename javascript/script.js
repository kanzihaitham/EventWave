var editImage = document.getElementById('edit-image');
if(editImage){

  editImage.addEventListener('click', function() {
      document.getElementById('edit-file-input').click();
  });
    
}



var adminBtn = document.getElementById("adminLoginBtn");
console.log(adminBtn)
if (adminBtn) {
  
  // adminBtn.addEventListener('click' , function () {
  //   window.location.href = "functions/loginAdmin.php";
  // }  );
}


  $(document).ready(function() {
    var element = $("#myNav li a"); 
    var lastOpened = "myEvents";
    element.click(function(){
        var attributeName = "data"; 
        var attributeValue = $(this).attr(attributeName);
        // alert(attributeValue);
        $("#"+lastOpened).toggleClass("hide");
        $("#"+attributeValue).toggleClass("hide");
        lastOpened = attributeValue;
    }); 

   });

  $("#profile-pic").click(function(){
    $("#bigPImage").toggleClass("hide");
  });
  $("#closeImage").click(function(){
    $("#bigPImage").addClass("hide");

  });

 

  const elements = document.getElementsByClassName('event');
  const elementsArray = Array.from(elements);
  elementsArray.forEach(element => {
      element.addEventListener('mouseover', function() {
          this.style.transform='scale(1.1)';
        
      });
      element.addEventListener('mouseout', function() {
          this.style.transform='scale(1)';
         
      }); 
  });




  var loginForm = document.getElementById("loginForm");
  if (loginForm) {
    
  loginForm.addEventListener("submit" , function(event){
  
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var userMsg = document.getElementById("usermsg");
    var passMsg = document.getElementById("passmsg");
    var isValid = true;

    userMsg.innerText = "";
    passMsg.innerText = "";

    if (username.trim() === "") {
        userMsg.innerText = "Please enter your username";
        isValid = false;
        event.preventDefault();
    }

   
    if (password.trim() === "") {
        passMsg.innerText = "Please enter your password";
        isValid = false;
        event.preventDefault();
    }

    return isValid;
  });
  
}




var signForm = document.getElementById("signForm");
if (signForm) {
signForm.addEventListener("submit" , function(event){
  // event.preventDefault();

  var fullname = document.getElementById("fullname").value;
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirmP = document.getElementById("confirmP").value;
  var dob = document.getElementById('dob').value;

  var nameMsg = document.getElementById("namemsg");
  var usernameMsg = document.getElementById("usernamemsg");
  var emailMsg = document.getElementById("emailmsg");
  var dobMsg = document.getElementById("dobmsg");
  var passMsg = document.getElementById("passmsg");
  var dobMsg = document.getElementById("dobmsg");

  var isValid = true;

  nameMsg.innerText = "";
  usernameMsg.innerText = "";
  emailMsg.innerText = "";
  dobMsg.innerText = "";
  passMsg.innerText = "";

  // Validate Full Name
  if (fullname.trim() === "") {
      nameMsg.innerText = "Please enter your full name";
      isValid = false;
  }  else if (!/[a-zA-Z]/.test(fullname)) {
    // No alphabet characters found in the username
    nameMsg.innerText += "name must contain alphabet characters";
    event.preventDefault(); 
    isValid = false; 
}

  // Validate Username
  if (username.trim() === "") {
      usernameMsg.innerText += "Please enter a username ";
      isValid = false;
  } else if (!/[a-zA-Z]/.test(username)) {
    // No alphabet characters found in the username
    usernameMsg.innerText += "Username must contain alphabet characters";
    event.preventDefault(); 
    isValid = false; 
}


  // Validate Email
  if (email.trim() === "") {
      emailMsg.innerText = "Please enter your email address";
      isValid = false;
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    // Invalid email format
    emailMsg.innerText = "Enter a valid email address";
    event.preventDefault(); // Prevent form submission
    isValid = false; // Set isValid flag to false
}

  // Validate date of birth
  if (dob == "") {
    dobMsg.innerText = "Please enter your date of birth";
    isValid = false;
} 
  // Validate Password
  if (password.trim() === "") {
    passMsg.innerText = "Please enter a password";
    isValid = false;
} else if (!/[a-z]/.test(password) || !/[A-Z]/.test(password)) {
    passMsg.innerText = "Password must contain at least one uppercase letter and one lowercase letter";
    isValid = false;
} else if (password !== confirmP) {
    passMsg.innerText = "Passwords do not match";
    isValid = false;
} 

  return isValid;
});

}

var logoutBtn = document.getElementById("logoutBtn");
if (logoutBtn) {
  logoutBtn.addEventListener('click' , function () {
    window.location.href = "functions/logout.php";
  });
}