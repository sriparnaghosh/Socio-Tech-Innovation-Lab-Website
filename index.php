<!DOCTYPE html>
<html>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/mystyle.css">
<link rel="stylesheet" href="style/projectstyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: "Lato", sans-serif
  }
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top" style="width:100%;">
    <div class="w3-bar w3-white w3-card-2" style="height:70px;">
      <div style="float:left;">
        <a href="#">
        <img src="media/logo-new.png" height="70" width="100"></a>
      </div>
      <div class="menu">
        <a href="#about us" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
        <a href="blog.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BLOG</a>
        <a href="#events" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EVENTS</a>
        <a href="#success" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SUCCESS STORIES</a>
        <a href="projectpage.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PROJECTS</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT US</a>
      </div>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#about us" class="w3-bar-item w3-button w3-padding-large">ABOUT US</a>
    <a href="blog.html" class="w3-bar-item w3-button w3-padding-large">BLOG</a>
    <a href="#events" class="w3-bar-item w3-button w3-padding-large">EVENTS</a>
    <a href="#success" class="w3-bar-item w3-button w3-padding-large">SUCCESS STORIES</a>
    <a href="projectpage.html" class="w3-bar-item w3-button w3-padding-large">PROJECTS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>

  </div>

  <!-- Page content -->
  <div class="w3-main w3-content" style="max-width:100%;margin-top:70px">

    <!-- Automatic Slideshow Images -->
    <div class="w3-display-container w3-center">
      <img src="media/poster.jpg" style="width:100%;height:500px">
    </div>

    <!-- The About us Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="about us">
      <h2 class="w3-wide">ABOUT US</h2>
      <p class="w3-justify"></p>
      <h5 class="w3-wide" style="padding-top:20px">OUR VISION</h5>
      <p class="w3-justify w3-center">To incubate a social innovation platform to encourage technopreneaurship among students and enhance the quality of humankind by providing solutions to societal problems.</p>
      <h5 class="w3-wide">OUR MISSION</h5>
      <p class="w3-justify">
          <li>To create a sanguine environment for students to think, learn, inspire and serve the society.</li>
          <li>To collaborate and partner with government and non-profit organizations to solve real life problems.</li>
          <li>To epitomize and instill students with innovation, entrepreneurship and social responsibility.</li>
          <li>To enhance the life of specially abled citizens through use of path breaking and multidisciplinary technologies</li>
        </ol>
      </p>
    </div>

    <!-- The Meet our team Section -->
    <div class="w3-light-grey" id="tour" style="height:500px">
      <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <h2 class="w3-wide w3-center">MEET OUR TEAM</h2>
        <div class="w3-row w3-padding-32">
          <div class="w3-third">
            <figure>
              <img src="media/rameshbabu.jpg" class="w3-round w3-margin-bottom img-circle" alt="Random Name" style="width:60%">
              <figcaption>Dr. Ramesh Babu D R</figcaption>
            </figure>
          </div>
          <div class="w3-third">
            <figure>
              <img src="media/preethimaam.jpg" class="w3-round w3-margin-bottom img-circle" alt="Random Name" style="width:60%">
              <figcaption>Mrs. Preeti Satish</figcaption>
            </figure>
          </div>
          <div class="w3-third">
            <figure>
              <img src="media/swethamaam.jpg" class="w3-round w3-margin-bottom img-circle" alt="Random Name" style="width:60%">
              <figcaption>Mrs. Swetha M D</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
      <h2 class="w3-wide w3-center">CONTACT US</h2>
      <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
          <i class="fa fa-map-marker" style="width:30px"></i> Bengaluru, India<br>
          <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9999999999<br>
          <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
        </div>

        <div class="w3-col m6">
        <form name="contactform" method="post" action="" >
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px;padding:5px">
            <div class="w3-half" style="padding:5px">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half" style="padding:5px">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px;padding:5px">
            <div style="padding:5px">
              <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
            </div>
            <div style="padding:5px">
              <input type="submit" value="Submit" id="btn">
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>

    <!-- End Page Content -->
  </div>
  <!-- Add Google Maps -->
  <div id="googleMap" style="height:300px;padding-left:350px">
  </div>
  <script>
    function myMap() {
      myCenter = new google.maps.LatLng(12.909513, 77.566732);
      var mapOptions = {
        center: myCenter,
        zoom: 12,
        scrollwheel: false,
        draggable: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

      var marker = new google.maps.Marker({
        position: myCenter,
      });
      marker.setMap(map);
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBCDfnlJNUph255KqQ_uv83W4Sl9utOj3I&callback=myMap"></script>
  <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge" style="heih">
    <a href="https://www.facebook.com/csedsce2017/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  </footer>

  <script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <!-- Contact us email send-->
  <?php
  if(isset($_POST['Email'])) {

      $email_to = "g.sriparna@yahoo.co.in";
      $email_subject = "SIL lab : Contact Us";

      function died($error) {
          echo "We are very sorry, but there were error(s) found with the form you submitted. ";
          echo "These errors appear below.<br /><br />";
          echo $error."<br /><br />";
          echo "Please go back and fix these errors.<br /><br />";
          die();
      }

      // validation expected data exists
      if(!isset($_POST['Name']) ||
          !isset($_POST['Email']) ||
          !isset($_POST['Message'])) {
          died('We are sorry, but there appears to be a problem with the form you submitted.');
      }



      $name = $_POST['Name']; // required
      $email_from = $_POST['Email']; // required
      $message = $_POST['Message']; // required

      $error_message = "";
      $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'; //validating email address

    if(!preg_match($email_exp,$email_from)) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

      $string_exp = "/^[A-Za-z .'-]+$/"; //validating name

    if(!preg_match($string_exp,$name)) {
      $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }

    if(strlen($message) < 2) {   //validating message length
      $error_message .= 'The Message you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
      died($error_message);
    }

      $email_message = "Form details below.\n\n";
      $email_message .= "Name: ".$name."\n";
      $email_message .= "Email: ".$email_from."\n";
      $email_message .= "Message: ".$message."\n";

  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  $checkmail = mail($email_to, $email_subject, $email_message, $headers);
  /*if($checkmail) {
          var element = document.getElementById("modaltext");
          element.innerHTML = "Thank you for contacting us. We will be in touch with you very soon.";
          echo "<script>
         $(window).load(function(){
             $('#thankyouModal').modal('show');
         });
    </script>";
      }
      else
          var element = document.getElementById("modaltext");
          element.innerHTML = "Sorry! Could not send the email!";
          echo "<script>
         $(window).load(function(){
             $('#thankyouModal').modal('show');
         });
    </script>";*/
  }

  ?>
  <!-- The Thankyou Modal -->
  <div id="thankyouModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="w3-light-grey" id="thanku" style="height:500px">
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
          <h4 class="w3-wide w3-center" id="modaltext">Thank you for contacting us. We will be in touch with you very soon.</h4>
        </div>
      </div>
    </div>
  </div>
  <script>
  var modal = document.getElementById('thankyouModal');
  // Get the button that opens the modal
  var btn = document.getElementById("Btn");
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  // When the user clicks the button, open the modal
  btn1.onclick = function() {
      modal1.style.display = "block";
  }
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>

</body>

</html>
