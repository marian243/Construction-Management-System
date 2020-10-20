<html lang="en">
<title>Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="Login">LOGIN <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="login.php" class="w3-bar-item w3-button">Client</a>
        <a href="login1.php" class="w3-bar-item w3-button">Manager</a>
        <a href="login2.php" class="w3-bar-item w3-button">Admin</a>
      </div>
    </div>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="Login">PROJECTS <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="pic.php" class="w3-bar-item w3-button">RecentlyCompleted</a>
        <a href="pic1.php" class="w3-bar-item w3-button">Incomplete</a>
      </div>
    </div>
  </div>
</div>

<!-- Page content -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">SOME OF OUR PROJECTS</h2>
</div> 
    
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="img/7.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/8.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/9.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/10.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/11.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/14.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/15.jpg" style="width:100%">
  </div>    

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">THE HANDY MAN</h2>
    <p class="w3-justify">“Every morning I jump out of bed and step on a landmine. The landmine is me. After the explosion, I spend the rest of the day putting the pieces together.” </p>
    <p class="w3-opacity"><i>― Ray Bradbury, Zen in the Art of Writing</i></p>
  </div>
    
  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-black" id="contact">    
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT US</h2>
    <p class="w3-justify"><i>Want to build your own dreams? What are you waiting for?</i></p>
      <p class="w3-opacity"><i>We are a just a call away.</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Dhaka, Bangladesh<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +88 01654000000<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: handyman@gmail.com<br>
      </div>
    </div>
   </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="img/12.jpg" class="w3-image w3-greyscale-min" style="width:100%">
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">OUR OFFICE</h2>
</div> 
<img src="img/13.jpg" class="w3-image w3-greyscale-min" style="width:100%">   

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <i class="fa fa-whatsapp w3-hover-opacity"></i>
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
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
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

</body>
</html>