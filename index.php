<!doctype html>
<html lang="en" class="no-js">
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
<body>
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
                <li><a class="main-navUlA" href="dietas.php">Dietas</a></li>
                <li><a class="main-navUlA" href="recetas.php">Recetas</a></li>
                <li><a class="main-navUlA" href="bebidas.php">Bebidas para Adelgazar</a></li>
                <li><a class="main-navUlA" href="nutricion.php">Nutricion y Ejercicios</a></li>
                <li><a class="main-navUlA" href="ContactForm2.html">Contact Us</a></li>

            </ul>
	</nav>
    <!--This shadow layer is to be applied when the menu is open for mobile devices-->
	<div id="cd-shadow-layer"></div>
    
    <!--This navigation bar is to be used for the computer and screen greater than 1024px-->
    
    <div class="w3-topnav w3-large w3-white navigationBigScreen w3-border w3-light-white" id="nav" style="padding-left:50px;border-bottom: black;">
      <div style="width:1100px;margin: auto;">
      <a href="index.html"  style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;"><i class="fa fa-home w3-large"></i></a>
      <a href="dietas.php" style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;color:green;margin:auto">Dietas</a>
      <a href="recetas.php" style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;color:orange;">Recetas</a>
      <a href="bebidas.php" style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;color:teal">Bebidas para Adelgazar</a>
      <a href="nutricion.php" style="padding-top:10px;padding-bottom:10px;padding-right:45px;padding-left:45px;color:#D23639;">Nutricion y Ejercicios</a>
      </div>
    </div>
    
    <div id="wrapper" class="w3-container" style="background-color: #FFFFFF">    
    <div class="w3-row-padding w3-section">
        <div class="w3-half" >
            <a href="#"><div class="w3-card-2 cardA" style="position:relative">
      		
                <img id="apio" src="img/apio1.jpg" style=" height:inherit; width:100%;" alt="apio">
                
                <div class="bottomleft">
                    <div class="category">Propiedades del Apio</div>
                    <p class="fontSize pTagModified">EL apio te puede ayudar a perder peso</p>
                </div>
        
                </div></a>
        </div>
    
        <div class="w3-half" >
            <a href="#"><div class="w3-card-2 cardA" style="position:relative">
      		
                <img id="apio" src="img/manzanilla.jpg" style=" height:inherit; width:100%;" alt="apio">
  		<div class="bottomleft">
                    <div class="category">El Te de Manzanilla</div>
                    <p class="fontSize pTagModified">Te puede ayudar a relajarte y perder peso</p>
                </div>
      
                </div></a>
        </div>
</div>
    
    <div class="w3-row-padding w3-section">
        <div class="w3-quarter">
            <a href="#"><div class="w3-card-2 cardA" style="position:relative">

                <img id="apio" src="img/remolacha1.jpg" style=" height:inherit; width:100%;" alt="apio">
                <div class="bottomleft">
                    <div class="category">La Remolacha</div>
                    <p class="fontSize pTagModified">EL apio te puede ayudar a perder peso</p>
                </div>
                </div></a>
        </div>
    
        <div class="w3-quarter">
            <a href="#"><div class="w3-card-2 cardA" style="position:relative">

                <img id="apio" src="img/miel1.jpg" style=" height:inherit; width:100%;" alt="apio">
                <div class="bottomleft">
                    <div class="category">Miel de Abeja</div>
                    <p class="fontSize pTagModified">EL apio te puede ayudar a perder peso</p>
                </div>

                </div></a>
        </div>
    
        <div class="w3-quarter w3-margin-bottom" >
            <a href="#"><div class="w3-card-2 cardA" style="position:relative">

                <img id="apio" src="img/mb71fitness1.jpg" style=" height:inherit; width:100%;" alt="apio">
                <div class="bottomleft">
                    <div class="category">El Ejercicio</div>
                    <p class="fontSize pTagModified">EL apio te puede ayudar a perder peso</p>
                </div>

                </div></a>
        </div>
    
        <div class="w3-quarter">
            <a href="#"><div class="w3-card-2 cardA" style="position:relative">
      		
      		<img id="apio" src="img/las-manzanas.jpg" style=" height:inherit; width:100%;" alt="apio">
                <div class="bottomleft">
                    <div class="category">Manzana</div>
                    <p class="fontSize pTagModified">Es Saludable comer al menos una manzana diaria</p>
                </div>
        
                </div></a>
        </div>
    
    </div> <!--End of the navigation squares -->
    
    <div class="w3-row w3-pale-green w3-topbar w3-bottombar w3-border-green" style="margin-right: -16px;margin-left: -16px; margin-bottom: 20px">
        <div class="w3-col w3-right w3-container w3-green" style="width:110px"><a href="#"><p><span style="color: white">Ver Mas </span><i class="fa fa-angle-double-right"></i></p></a>
        </div>
        <div class="w3-rest w3-container"><p><span style="color: green">Dietas</span></p></div>
    </div>
    
    <div class="w3-container border">
        <a href="#"> <div class="w3-green w3-hover-shadow FirstDivision">
        </div> </a>
        <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
            <p>Some text explaining the article </p>
        </div>

    </div>
    <hr>
    
    <div class="w3-container" style="margin-left: -16px;">
        <div class="w3-container border floatingDivision">
            <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
                <p>Put an image here that would lead to the article</p>
            </div> </a>
            <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
                <p>Some text explaining the article </p>
            </div>

        </div>
    <hr class="hr">
        <div class="w3-container border floatingDivision">
            <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
                <p>Put an image here that would lead to the article</p>
            </div> </a>
            <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
                <p>Some text explaining the article </p>
            </div>
        </div>
    </div>
    
    <div class="w3-row w3-topbar w3-bottombar w3-border-orange" style="margin-right: -16px;margin-left: -16px; margin-bottom: 20px;background-color: #FFEFBF;">
        <div class="w3-col w3-right w3-container w3-orange" style="width:110px"><a href="#"><span style="color: white"><p>Ver Mas <i class="fa fa-angle-double-right"></i></p></span></a>
        </div>
        <div class="w3-rest w3-container"><p><span style="color: orange">Recetas</span></p></div>
    </div>
    
    <div class="w3-container border">
        <a href="#"> <div class="w3-green w3-hover-shadow FirstDivision">
        </div> </a>
        <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
            <p>Some text explaining the article </p>
        </div>

    </div>
    <hr>
    
    <div class="w3-container" style="margin-left: -16px;">
        <div class="w3-container border floatingDivision">
            <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
                <p>Put an image here that would lead to the article</p>
            </div> </a>
            <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
                <p>Some text explaining the article </p>
            </div>

        </div>
    <hr class="hr">
        <div class="w3-container border floatingDivision">
            <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
                <p>Put an image here that would lead to the article</p>
            </div> </a>
            <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
                <p>Some text explaining the article </p>
            </div>

        </div>
    </div>
    
    
    <div class="w3-row w3-topbar w3-bottombar w3-border-teal" style="margin-right: -16px;margin-left: -16px; margin-bottom: 20px;background-color: #cee2e3;">
        <div class="w3-col w3-right w3-container w3-teal" style="width:110px"><a href="#"><p>Ver Mas <i class="fa fa-angle-double-right"></i></p></a>
        </div>
        <div class="w3-rest w3-container"><p><span style="color: teal">Bebidas para Adelgazar</span></p></div>
    </div>
    
    <div class="w3-container border">
        <a href="#"> <div class="w3-green w3-hover-shadow FirstDivision">
        </div> </a>
        <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
            <p>Some text explaining the article </p>
        </div>

    </div>
    <hr>
    
    <div class="w3-container" style="margin-left: -16px;">
        <div class="w3-container border floatingDivision">
            <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
                <p>Put an image here that would lead to the article</p>
            </div> </a>
            <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
                <p>Some text explaining the article </p>
            </div>

        </div>
    <hr class="hr">
        <div class="w3-container border floatingDivision">
            <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
                <p>Put an image here that would lead to the article</p>
            </div> </a>
            <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
                <p>Some text explaining the article </p>
            </div>

        </div>
    </div>
    
    
    <div class="w3-row w3-pale-red w3-topbar w3-bottombar w3-border-red" style="margin-right: -16px;margin-left: -16px; margin-bottom: 20px">
        <div class="w3-col w3-right w3-container w3-red" style="width:110px"><a href="#"><p><span style="color:white">Ver Mas </span><i class="fa fa-angle-double-right"></i></p></a>
        </div>
        <div class="w3-rest w3-container"><p style="color: red">Nutricion y Ejercicios</p></div>
    </div>
    
        <div class="w3-container border">
            <a href="#"> <div class="w3-green w3-hover-shadow FirstDivision">
            </div> </a>
            <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
                <p>Some text explaining the article </p>
            </div>

        </div>
    <hr>
    
    <div class="w3-container" style="margin-left: -16px;">
    <div class="w3-container border floatingDivision">
        <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
            <p>Put an image here that would lead to the article</p>
        </div> </a>
        <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
            <p>Some text explaining the article </p>
        </div>

    </div>
    <hr class="hr">
    <div class="w3-container border floatingDivision">
        <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
            <p>Put an image here that would lead to the article</p>
        </div> </a>
        <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
            <p>Some text explaining the article </p>
        </div>

    </div>
    </div>
    

    <hr>
    
    <div class="w3-container" style="margin-left: -16px;">
    <div class="w3-container border floatingDivision">
        <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
            <p>Put an image here that would lead to the article</p>
        </div> </a>
        <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
            <p>Some text explaining the article </p>
        </div>

    </div>
    <hr class="hr">
    <div class="w3-container border floatingDivision">
        <a href="#"> <div class="w3-green w3-hover-shadow w3-center imageSize">
            <p>Put an image here that would lead to the article</p>
        </div> </a>
        <div class="w3-container" style="float: left;"><a href="#"><p>the Tittle of the Article</p></a>
            <p>Some text explaining the article </p>
        </div>

    </div>
    </div>
    
    
   <div class="w3-container w3-white">
   <h2 style="border-bottom: thick solid #DCFFFA;">Articulo Reciente</h2>
   <h3>La Canela</h3>
   
   <div class="videoWrapper">
   <iframe src="https://www.youtube.com/embed/PrdefHB-ifY" frameborder="0" allowfullscreen></iframe></div>
   <p>Sabemos que es un alimento completo con múltiples propiedades terapéuticas pero, ¿sabías que también sirve para bajar de peso?<br><br>

Por lo regular utilizamos la miel en remedios caseros para eliminar tos, ronquera y dolor de garganta; para aliviar contusiones (heridas, golpes, torceduras y grietas en los pezones de madres con lactantes); para suavizar la piel, disminuir cicatrices, arrugas, estrías y celulitis; como depurador de la sangre, revitalizado y tónico para el cerebro.<br><br>
Sencillamente es deliciosa pero, ¿a que no sabías que también es utilizada para bajar de peso? ¡Así es, últimamente se está poniendo de moda para adelgazar con ayuda de otro ingrediente: canela en polvo.<br><br>

Increíble, ¿pero cierto?<br><br>

El uso de la miel y canela en polvo (diluida en agua) para bajar de peso, fue descubierta por un farmacéutico de la ciudad escocesa de Edimburgo. Su nombre es Mike Mclnnes quien junto con su hijo, el nutriólogo Stuart Mclnnes, crearon una innovadora dieta con productos naturales y que no afectan la salud de la persona.<br><br>

En el libro La dieta de hibernación, los Mclnnes aseguran que solo una cucharadita todas las noches es necesaria para perder peso y controlar el insomnio. "Este alimento es casi perfecto para bajar de peso, ya que provoca cambios metabólicos que llevan a perder hasta un kilo y medio por semana".<br><br>

Pero, ¿cómo llegaron a esta conclusión? Los Mclnnes se dieron cuenta que en muchas dietas, las golosinas y postres que normalmente son prohibidas, eran permitidas si se realizaban con miel. "El secreto es sustituir el azúcar por miel durante todo el día y tomar una cucharada de miel diluida con agua (o alguna bebida caliente), antes de ir a la cama. De esta manera los antojos de azúcar pueden apagarse por completo", dijeron al periódico Daily Mail.<br><br>
ellos se dieron cuenta que en muchas dietas, las golosinas y postres que normalmente son prohibidas, eran permitidas si se realizaban con miel. "El secreto es sustituir el azúcar por miel durante todo el día y tomar una cucharada de miel diluida con agua (o alguna bebida caliente), antes de ir a la cama. De esta manera los antojos de azúcar pueden apagarse por completo".<br><br>

¿Por qué funcionaría?<br><br>

La teoría de los científicos es que un hígado alimentado con miel sería la clave para un sueño reparador y hay indicios de que la falta de sueño provoca obesidad. Además, la miel también ayuda a reducir la producción de hormonas del estrés y acelera el metabolismo.<br><br>

Sin embargo, para que la dieta funcione, sería necesario eliminar por completo el azúcar y los alimentos procesados, "incluso los bajos en grasa porque a menudo están llenos de azúcares ocultos y harina blanca que el cuerpo convierte en azúcar.<br><br>

¿Cómo va la dieta?<br><br>

Los ingredientes son muy sencillos, necesitas agua caliente, miel y canela en polvo. Pon a hervir un vaso con agua y agrega una cucharadita de miel y canela en polvo. Toma la infusión antes de dormir y media hora antes del desayuno. Según los autores de esta dieta debes tomar en cuenta las siguientes recomendaciones:</p>

<ul id="text">
	<li>Cambia todo el azúcar y edulcorantes por miel.</li>
	<li>Añade miel durante todo el día (en el café, yogurt, cereales, etc).</li>
	<li>No es bueno exagerar con la miel porque, aunque es más sana, también es azúcar.</li>
	<li>Además de usar miel, modifica tus hábitos alimenticios. Evita comida chatarra, grasas saturadas, harinas blancas y alimentos procesados.</li>
<li>Incorpora, frutas y verduras en tu alimentación. </li>
<li>Evita productos light.</li>
</ul>
 <p>
Aunque no existe evidencia científica de que esta dieta funcione muchas personas aseguran que con la dieta han visto disminuida su ansiedad. Quizá pueda deberse al efecto placebo.<br><br>
</p>
   
   </div>   
   </div>   <!--The wrapper-->   
  
   <hr>
   
   <div id="footer" class="w3-sand">
        <div>
            <div class="w3-half w3-container" style="background-color: #eeeff7;margin-top: -20px;">
              <h3>Articulos Recientes</h3>
              <ul id="text">
              	<li>Forever Fitness <span style="color:#1F4391">TV</span></li>
                <li><a href="ContactForm2.html" style="color:#D23639;">Contact Us</a></li>
                <li><a href="ContactForm2.html" style="color:#D23639;">Contact Us</a></li>
                <li><a href="ContactForm2.html" style="color:#D23639;">Contact Us</a></li>
                <li><a href="ContactForm2.html" style="color:#D23639;">Contact Us</a></li>
              </ul> 
            </div>
            
            <div class="w3-half w3-container" style="background-color: #eeeff7;margin-top: -20px;">
              <h3>Otros</h3>
              <ul id="text">
                <li><a href="ContactForm2.html" style="color:#D23639;">Contact Us</a></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
     	</div>
     
        <div id="footerNavigation">
            <div id="twitter" style="float: left; ">
                <a href="http://www.w3schools.com/w3css/w3css_responsive.asp" 
                target="_blank" ><i class="fa fa-twitter fa-2x"></i></a></div>
         
                <div id="pinterest">
                <a  href="" target="_blank" ><i class="fa fa-pinterest fa-2x"
                target="_blank"></i></a></div>
           
            <div id="instagram">
            <a  href="" target="_blank" ><i class="fa fa-instagram fa-2x" 
            ></i></a></div>
          
            <div id="google">
            <a  href="" target="_blank" ><i class="fa fa-google-plus fa-2x" 
            target="_blank"></i></a></div>
          
          <div id="facebook">
          <a  href="" target="_blank" ><i class="fa fa-facebook fa-2x" 
          target="_blank"></i></a></div>
          
          <div id="youtube" >
          <a  href="" target="_blank" ><i class="fa fa-youtube fa-2x"></i></a></div>
         </div> <!--end media navigation-->
         
       </div>        
     
</body>
</html>