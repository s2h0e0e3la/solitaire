<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
</head>
<body>
    
</body>
</html>
<style>
  
</style>
<div class="callbackus">
    
    <!-- Sliding div starts here -->
    <div id="slider" style="right:-342px;">
      <div id="sidebar" onclick="open_panel()"><button class="btn call-back">
        <img src="assets/phone.png" alt="">
        Request a Call Back
      </button>
    </div>
      <div id="header1">
      <!-- <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
        <form id="form" name="frmEnquiry" method="POST">
          <h5 class="text-center">
            
            Request a Call Back
          </h5>
        <div class="mb-1">
    <!-- <label for="exampleInputEmail1" class="form-label">Name</label> -->
    <input type="text" class="form-control" id="name-input" name="name" placeholder="Name">
  </div>
        <div class="mb-1">
    <!-- <label for="exampleInputEmail1" class="form-label">Email Id</label> -->
    <input type="email" class="form-control" id="mail-input" name="email" placeholder="Email Id" >
  </div>
  <div class="mb-1">
    <!-- <label for="exampleInputPassword1" class="form-label"> Mobile No.</label> -->
    <input type="phone" class="form-control" id="phone-input" name="phone" placeholder="Mobile No." >
  </div>
  <select class="form-select form-control" aria-label="Default select example" name="list" id="list-input" >
  <option selected>Interested In Flats</option>
  <option value="1 BHK">1 BHK</option>
  <option value="2 BHK">2 BHK</option>
  <option value="3 BHK">3 BHK</option>
</select>
        <!-- <label for=""> Name<span> *</span></label><br>
          <input class="form-control" name="dname" type="text" placeholder="Type Name" required><br><br> 
        <label for=""> Email Id<span> *</span></label><br>
          <input class="form-control" name="demail" type="email" placeholder="Type Email Id" required><br><br>
          <label for=""> Mobile No.<span> *</span></label><br>
          <input class="form-control" name="dmobile" type="tel" placeholder="Type Mobile No." required><br><br>
      <label for=""> Message<span> *</span></label><br>
          <input class="form-control" name="dmessage" type="text" placeholder="Type Message" required> <br>        -->
          <center><button  type="button"  class="btn" id="submit-btn">Send</button></center><br>
           <!--<button type="button" class="btn" id="submit-btn">Submit</button>-->
          <div id="feedback"></div>
        </form>
      </div>
    </div>

  </div>

<script>
              $(document).ready(function () {
                // Handle the submit button click event
                $('#submit-btn').click(function () {
                  var nameInput = $('#name-input').val();
                  var mailInput = $('#mail-input').val();
                  var phoneInput = $('#phone-input').val();
                  var listInput = $('#list-input').val();

                  // Check if the fields are empty
                  if (nameInput.length == 0) {
                    $('#feedback').text('Please fill all the fields !!').css("color","#a53325").css("background-color","#f5d7d4").css("text-align","center").css("padding","10px 0");
                  } else if(mailInput.length == 0) {
                    $('#feedback').text('Please fill all the fields !!').css("color","#a53325").css("background-color","#f5d7d4").css("text-align","center").css("padding","10px 0");
                  } else if (phoneInput.length == 0) {
                    $('#feedback').text('Please fill all the fields !!').css("color","#a53325").css("background-color","#f5d7d4").css("text-align","center").css("padding","10px 0");
                  // if (nameInput.length == 0 && emailInput.length == 0 && queryInput.length == 0) {
                  //   alert('Please fill all the fields');
                  } else if(listInput.length == 0) {
                    $('#feedback').text('Please fill captcha!!').css("color","#a53325").css("background-color","#f5d7d4");
                  }
                   else {
                      // Validate the captcha value using Ajax
                    $.ajax({
                      url: 'enq.php',
                      method: 'POST',
                      data: { name: nameInput, mail: mailInput,phone: phoneInput, list: listInput},
                      success: function (response) {
                        if (response == 'success!!') {
                          // alert('Captcha is correct!');  
                          // window.location.href="index.php" 
                          $('#feedback').text('Mail sent sucessfully !!').css("color","#155724").css("background-color","#d4edda").css("text-align","center").css("padding","10px 0");
                          $('#name-input').val('');
                          $('#mail-input').val('');
                          $('#phone-input').val('');
                          $('#list-input').val('');
                          // Perform further actions here
                        } else {
                          // alert('Captcha is incorrect. Please try again.');
                          $('#feedback').text('Problem in sending mail !!').css("color","#a53325").css("background-color","#f5d7d4").css("text-align","center").css("padding","10px 0");
                          // Generate a new captcha question
                        
                        }
                      }
                    });
                  }
                  

                });
              });
            </script>
  <script>

function open_panel() {
    slideIt();
    var a = document.getElementById("sidebar");
    a.setAttribute("id", "sidebar1");
    a.setAttribute("onclick", "close_panel()");
    }
    function slideIt() {
    var slidingDiv = document.getElementById("slider");
    var stopPosition = 0;
    if (parseInt(slidingDiv.style.right) < stopPosition) {
    slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
    setTimeout(slideIt, 1);
    }
    }
    function close_panel() {
    slideIn();
    a = document.getElementById("sidebar1");
    a.setAttribute("id", "sidebar");
    a.setAttribute("onclick", "open_panel()");
    }
    function slideIn() {
    var slidingDiv = document.getElementById("slider");
    var stopPosition = -342;
    if (parseInt(slidingDiv.style.right) > stopPosition) {
    slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
    setTimeout(slideIn, 1);
    }
    }
    </script>