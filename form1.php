<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "2primefitness@gmail.com";
 
    $email_subject = "Contact Form";
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Comments: ".clean_string($comments)."\n";
 
       
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
<html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">	
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">

	 
    <!--<link rel="stylesheet" href="css/reset.css"> CSS reset -->
    <link href="css/style.css" rel="stylesheet" type="text/css"> <!-- Gem style -->

    <!--<script src="js/modernizr.js"></script>  Modernizr -->
    <link href="resources/css/indexCss.css" rel="stylesheet" type="text/css">
    
    <!-- JS files -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/main.js"></script> <!-- Gem jQuery -->
    <script src="js/googleAnalytics.js"></script>

  	<script>
function myFunction() {
    document.getElementById("donate").classList.toggle("w3-show");
}
</script>
	<title>Forever Fitness</title>
</head>
<body style="background-color:;">
    <header id="header">
	  <div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
      <div id="logo"><a href="index.html" ><img src="img/manzana.jpg" style="height:50px; width:50px;" alt="Logo"></a></div>
	  <div id="cd-cart-trigger"></div>  
        
        <div id="Home-icon/logo" class="w3-third w3-container" >
          <a href="#"><h1></h1></a>
        </div>
	</header>
    
    <div class="w3-container">
    <div id="MediaNavigation">
          <div id="twitter" style="float: left; ">
          <a href="https://twitter.com/DIESELXP00" 
          target="_blank" ><i class="fa fa-twitter fa-2x"></i></a></div>
         
          <div id="pinterest">
          <a  href="https://www.pinterest.com/herbartcarcamoa/" target="_blank" ><i class="fa fa-pinterest fa-2x"
           target="_blank"></i></a></div>
           
          <!--<div id="instagram">
          <a  href="" target="_blank" ><i class="fa fa-instagram fa-2x" 
          ></i></a></div>-->
          
          <div id="google">
          <a  href="https://plus.google.com/u/2/102977685739246026050/posts" target="_blank" ><i class="fa fa-google-plus fa-2x" 
          target="blank"></i></a></div>
          
          <div id="facebook">
          <a  href="https://www.facebook.com/bebidasparaadelgazarrapido/" target="_blank" ><i class="fa fa-facebook fa-2x" 
          target="_blank"></i></a></div>
          
          <div id="youtube" >
          <a  href="https://www.youtube.com/channel/UCVXtP5C7LaAC6VmP6qvtHnQ" target="_blank" ><i class="fa fa-youtube fa-2x"></i></a></div>
          
          <div class="w3-dropdown-click donate" style="float: left;">
          <button onclick="myFunction()" class="w3-btn" style="background-color: #1B51A5;color:white;border-radius: 20px;">Donate</button>

  		<div id="donate" class="w3-dropdown-content w3-card-4" style="width:250px; padding-top: 10px;">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                  <input type="hidden" name="cmd" value="_donations">
                  <input type="hidden" name="business" value="ernesto.afane2015@gmail.com">
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="item_name" value="Salud">
                  <input type="hidden" name="no_note" value="0">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                  <input type="image" src="resources/donate.PNG" 
                  border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              </form>
    			
   		  </div>
		</div>             
       </div> <!--end media navigation-->
       </div>
       
       
<!--<div class="w3-dropdown-click donate" >
          <button onclick="myFunction()" class="w3-btn" style="background-color: #1B51A5;color:white;">Donate</button>

  			<div id="donate" class="w3-dropdown-content w3-card-4" style="width:250px; padding-top: 10px;">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                  <input type="hidden" name="cmd" value="_donations">
                  <input type="hidden" name="business" value="ernesto.afane2015@gmail.com">
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="item_name" value="Salud">
                  <input type="hidden" name="no_note" value="0">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                  <input type="image" src="resources/donate.PNG" 
                  border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              </form>
    			
   		  </div>
		</div> -->          
        <nav id="main-nav" class="main-nav">
	    <ul id="link">
                <li><a class="main-navUlA" href="index.html">Home</a></li>
                <li><a class="main-navUlA" href="dietas.html">Dietas</a></li>
                <li><a class="main-navUlA" href="recetas.html">Recetas</a></li>
                <li><a class="main-navUlA" href="bebidas.html">Bebidas para Adelgazar</a></li>
                <li><a class="main-navUlA" href="nutricion.html">Nutricion y Ejercicios</a></li>
                <li><a class="main-navUlA" href="ContactForm2.html">Contact Us</a></li>
            </ul>
	</nav>
    <!--This shadow layer is to be applied when the menu is open for mobile devices-->
	<div id="cd-shadow-layer"></div>
    
    <!--This navigation bar is to be used for the computer and screen greater than 1024px-->
    
    <div class="w3-topnav w3-large w3-white navigationBigScreen w3-border w3-light-white" id="nav" style="padding-left:50px;border-bottom: black;">
      <div style="width:1100px;margin: auto;">
      <a href="index.html"  style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;"><i class="fa fa-home w3-large"></i></a>
      <a href="dietas.html" style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;color:green;margin:auto">Dietas</a>
      <a href="recetas.html" style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;color:orange;">Recetas</a>
      <a href="bebidas.html" style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;color:teal">Bebidas para Adelgazar</a>
      <a href="nutricion.html" style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;color:#D23639;">Nutricion y Ejercicios</a>
      </div>
    </div>
    
    <div id="wrapper" class="w3-container" style="background-color: #FFFFFF">  
 
<!-- include your own success html here -->
 
 <h3>Thank you for contacting us! We will be in touch with you very soon.</h3>
 </div>
 </html>
 
<?php
 
}
 
?>