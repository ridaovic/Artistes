<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/datepicker.css" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



  <script src='https://www.google.com/recaptcha/api.js'></script>

         

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]--> 
        <title>Oeuvres d'art Maroc : Tableaux, Sculptures, Photos et Arts d'exception | Vos artistes</title>
        <meta name="keywords" content="Artistes, Maroc, Peinture, Vente, Art, Galerie, Exposition, Valès Edmond">
		<meta name="description" content="Le site www.vosartistes.com expose une collection d’œuvres d'art (Peinture, Sculpture, Arts d'exception...)  Cet espace permet de les mettre en valeur et les présenter à la vente au niveau marocain et à l'international.  Les grands noms de l'art pictural au Maroc y sont présentés, ainsi que les nouvelles tendances qui dynamisent notre monde artistique.">
		<link rel="shortcut icon" href="../sites/all/themes/exupery/favicon.png" type="image/x-icon">
           <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet" />
        <script src="js/app.js"></script>
        <script src="js/autocomplete_ar.js"></script>
        <script src="js/autocomplete_ar2.js"></script>
        <script src="js/autocomplete_art_oeuvre.js"></script>
        <script src="js/autocomplete_all.js"></script>
        <script src="js/autocomplete_oeuvre.js"></script>
        <script src="js/autocomplete_event.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/nice_select.js"></script>
        <link href="css/nice_select.css" rel="stylesheet">
        <!-- translator -->
		<link rel="stylesheet" type="text/css" href="translator/styles/jquery.translator.css" />
		<script type="text/javascript" src="translator/javascript/jquery.translator.min.js"></script>
		<script type="text/javascript">
							$.translator.ready(function() {
								
								$(".translator").translator({
									excludeSelector: ".not-translate",
									names: false,
									cookie: true,
									from: 'fr',
									onComplete: function(){
										$('.usa').html("");
										var $button = $('.translator-completed-left').clone();
										$('.usa').html($button);

									}
								});
								$('.usa').html("");
										var $button = $('.translator-completed-left').clone();
										$('.usa').html($button);
							});
		</script>
		<!-- translator -->

            <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
            <style>
.ui-autocomplete {
    max-height: 400px;
    overflow-y: auto;
  
    overflow-x: hidden;
  }
  
  * html .ui-autocomplete {
    height: 100px;
  }
.ui-autocomplete-category {
font-weight: bold;
padding: .2em .4em;
margin: .8em 0 .2em;
line-height: 1.5;
}
</style>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 5,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        
        

      });
    </script>

    <script type="text/javascript" > $('document').ready(function(){ $('.change').niceselect(); }) </script>

    <?php 
          require_once("./swiftmailer/lib/swift_required.php"); 

          // Class that contains the information of the email that will be sent (from, to, etc.)
          require_once("./classes/EmailParts.php");

          // The class that "breaks" the data sent with the HTML form to a more "usable" format.
          require_once("./classes/ContactForm.php");

          define("EMAIL_SUBJECT", "Contact VosArtiste");    // Subject of the contact mail
          define("EMAIL_TO", "vosartistes.com@gmail.com");    // Where the contact mail should be sent
          
          // SMTP configuration
          define("SMTP_SERVER", 'localhost');       // Your SMTP server host
          define("SMTP_PORT", 1025);            // Your SMTP server port

  ?>
   
	<!--google analytics-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-65895713-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!--google analytics-->
	
    </head>

    <body>
    <div class="translator">
        <div id="bloc_page">
        	<a href="http://www.vosartistes.com/liste-tableaux" style="cursor:pointer;"><div id="backtov1">Retourner à la version originale</div></a>
            <header>
                   <div id="header_top">
                     <div id="logo">
						<a href='index.php'><img src="images/logo.png"></a> 
                     </div>
                     <div id="header_left">
                      <div id="lang">
							<div class="btn-group">
							  <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
								  Langue
								  <span class="caret"></span>
								</button>
								<!-- translator -->
								<ul class="dropdown-menu">
									<li><a href="javascript:;" title="French" class="translator-language-fr"><img src="translator/images/French.gif" alt="French" /></a></li>
									<li><a href="javascript:;" title="English" class="translator-language-en"><img src="translator/images/English.gif" alt="English" /></a></li>
									<li><a href="javascript:;" title="Spanish" class="translator-language-es"><img src="translator/images/Spanish.gif" alt="Spanish" /></a></li>
									<li><a href="javascript:;" title="Arabic" class="translator-language-ar"><img src="translator/images/Arabic.gif" alt="Arabic" /></a></li>
								</ul>
								
								
								<!-- translator -->
								<!--<ul class="dropdown-menu">
								  <li><a href="#">fr</a></li>
								  <li><a href="#">en</a></li>
								</ul>-->
							  </div>
							</div>
						</div> 
                      <div id="newsletter">
                      <form class="newsletterform" action="#">
                      <input type="text" placeholder="Newsletter">
                      <button class="btn btn-default" type="submit"><i class="fa fa-check"></i></button>
                      </form> </div>


                       <nav>
                            <div id='cssmenu'>
                            <ul>
                               <li><a href='index.php'><span>Accueil</span></a></li>
                               <li><a href='artistes.php'><span>Artistes</span></a></li>
                               <li><a href='oeuvres.php'><span>Oeuvres</span></a></li>
                               <li><a href='evenments.php'><span>Actualités & Evénements</span></a></li>
                               <li><a href='#'><span>Espace Membres</span></a></li>
                               <li class='active'><a href='contact.php'><span>Contact</span></a></li>
                            </ul>
                            </div>
                    </nav>
                     </div> <br>
                   </div> 

               
                    <div id="header_bottom">
                     
                     <div style="float: left;width: 500px;">
                      

                      <div id="search">
                          <!--All -->
                          <form class="searchform" id="aaa" action="#">
                              <input style="width:454px;" type="text" placeholder=" Artiste, Evènement, Œuvre..." id="search_all">


                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>

                          <!-- Artistes Oeuvres -->
                          <form class="searchform" action="#" id="bbb" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Artiste, Œuvre"  id="search_a_o"><span>|</span>



                              <select class="select" style="width:125px;">
                                  <option>Type d’oeuvre</option>
                                  <option value="tableau">Tableaux</option>
                                              <option value="sculpture">Sculptures</option>
                                              <option value="photographie">Photographies</option>
                                              <option value="bijoux">Bijoux</option>
                                              <option value="livre">Livres</option>
                                              <option value="decoration">Objets de décoration</option>
                                              <option value="caftan">Caftans</option>
                                              <option value="meuble">Meubles</option>
                                              <option value="tapis">Tapis</option>
                              </select>
                              <span>|</span>

                              <select class="select" style="width:75px;">
                                  <option>Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option value="naif" >Naif/Primitif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          <!-- Artistes -->
                         <form class="searchform" action="#" id="eee" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Artiste"  id="tags"><span>|</span>



                              <select id="typeA" class="select" style="width:125px;" >
                                              <option value="All">Type d’oeuvre</option>
                                              <option value="tableau">Tableaux</option>
                                              <option value="sculpture">Sculptures</option>
                                              <option value="photographie">Photographies</option>
                                              <option value="bijoux">Bijoux</option>
                                              <option value="livre">Livres</option>
                                              <option value="decoration">Objets de décoration</option>
                                              <option value="caftan">Caftans</option>
                                              <option value="meuble">Meubles</option>
                                              <option value="tapis">Tapis</option>
                                              
                              </select>
                              <span>|</span>

                              <select id="styleA" class="select" style="width:75px;" >
                                  <option value="">Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option value="naif" >Naif/Primitif</option>
                              </select>

                              <button  class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          <!-- Oeuvres -->

                          <form class="searchform" action="#" id="fff" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Œuvre"  id="search_o"><span>|</span>



                               <select  id="type" class="select" style="width:125px;">
                                              <option value="All">Type d’oeuvre</option>
                                              <option value="tableau">Tableaux</option>
                                              <option value="sculpture">Sculptures</option>
                                              <option value="photographie">Photographies</option>
                                              <option value="bijoux">Bijoux</option>
                                              <option value="livre">Livres</option>
                                              <option value="decoration">Objets de décoration</option>
                                              <option value="caftan">Caftans</option>
                                              <option value="meuble">Meubles</option>
                                              <option value="tapis">Tapis</option>
                                              
                              </select>
                              <span>|</span>

                              <select id="style2" class="select" style="width:75px;" >
                                  <option value="">Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option value="naif" >Naif/Primitif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>

                          <!-- evenments -->
                           <form class="searchform" action="#" id="ccc">
                              <input type="text" placeholder="Evénement" style="width:120px;" id="search_event"><span>|</span>

                              <select id="typeEvent" class="select" style="width:130px;">

                                  <option>Type d’événement</option>
                                  <option>Vernisage</option>
                                  <option>Exposition photo</option>
                                  <option>Festival</option>
                                  <option>Conférenc et Galas</option>
                                  <option>Salon</option>
                                  <option>Autres</option>
                              </select>
                              <span>|</span>
                              <input type="text" placeholder=" debut" value="" id="dpd1" style="width:80px;">
                              <span>|</span>
                              <input type="text" placeholder=" fin" value="" id="dpd2" style="width:80px;">



                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                     </div>
                     </div>
                    
                     <div id="search_av"><span id="sva">Recherche avancée</span> 
                       
                       <div id="search_sub">
                          
                          <table style="width:100%">
                            <tr>
                              <td><label>Artistes</label></td>
                              <td><input type="checkbox" id="art" value="artiste" checked=""></td>
                            </tr>

                            <tr>
                              <td><label>Oeuvres</label></td>
                              <td><input type="checkbox" id="oeu" value="oeuvre" checked=""></td>
                            </tr>

                            <tr>
                              <td><label>Evénements</label></td>
                              <td><input type="checkbox" id="eve" value="Evenement" checked=""></td>
                            </tr>
                          </table>

                       </div>
                     </div>

                     <div class="social">
                       
                      <span><a href='https://twitter.com/Vosartistes'><img src="images/twitter.png"></a></span>
                       <span><a href='vosartistes.com@gmail.com'><img src="images/google.png"></a></span>
                       <span><a href='https://www.facebook.com/vosartistes'><img src="images/facebook.png"></a></span>
                     </div>
                      <br>
                   </div>
            </header>
            
           <section class="sec_article" >

                         

                          <?php 
                                function main($contactForm) {

                                  // Checks if something was sent to the contact form, if not, do nothing
                                  if (!$contactForm->isDataSent()) {
                                    return;
                                  }

                                  // validates the contact form and initialize the errors
                                  // echo ("aaaaaaaaa");
                                  // var_dump($contactForm);
                                  $contactForm->validate();

                                  $errors = array();

                                  // if the contact form is not valid...
                                  if (!$contactForm->isValid()) {
                                    // gets the error in the array $errors
                                    $errors = $contactForm->getErrors();

                                  } else {
                                    // if the contact form is valide...
                                    try {       
                                      // send the email created with the contact form
                                      // echo ("bbbbbbbbb");
                                      // var_dump($contactForm);if(isset($_POST['g-recaptcha-response'])){
                                      if(isset($_POST['g-recaptcha-response'])){
                                        $captcha=$_POST['g-recaptcha-response'];
                                      }
                                      if(!$captcha){
                                        $errors['oops'] = 'verifie le Captcha.';
                                        echo '<div class="error">verifie le Captcha.</div>';
                                        //exit;
                                      }
                                      $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeqrwoTAAAAAJhyNcZouKDEDycL4oaUnjuv1kNv&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
                                      //var_dump($response);
                                      $json = json_decode($response);
                                      // var_dump($json);
                                      // var_dump($json->success);
                                      if($json->success == false)
                                      {
                                        //echo '1111111111111111&';
                                        $errors['oops'] = 'You are spammer !';
                                        echo 'You are spammer !';
                                      }else
                                      {
                                        //echo '22222222222222222&';
                                        $result = sendEmail($contactForm);
                                        //echo '33333333333333333&';
                                        $errors['oops'] = 'Message Envoyé';
                                        echo 'Message Envoyé';
                                      }
                                      
                                      // echo ("ccccccccccccc");
                                      // var_dump($contactForm);       

                                      // after the email is sent, redirect and "die".
                                      // We redirect to prevent refreshing the page which would resend the form
                                      //header("Location: ./success.php");
                                      
                                      //header("location: contact.php");
                                      //exit;
                                    } catch (Exception $e) {
                                      // an error occured while sending the email. 
                                      // Log the error and add an error message to display to the user.
                                      error_log('An error happened while sending email contact form: ' . $e->getMessage());
                                      $errors['oops'] = 'Ooops! an error occured while sending your email! Please try again later!';
                                      echo 'Ooops! an error occured while sending your email! Please try again later!';
                                    }

                                  }

                                  return $errors;
                                }

                                // Sends the email based on the information contained in the contact form
                                function sendEmail($contactForm) {
                                  // Email part will create the email information needed to send an email based on
                                  //echo ("111111111111111111111"); 
                                  // what was inserted inside the contact form
                                  //var_dump($contactForm);
                                  $emailParts = new EmailParts($contactForm);
                                 // echo ("2222222222222222"); 

                                  // This is the part where we initialize Swiftmailer with 
                                  // all the info initialized by the EmailParts class
                                  $emailMessage = Swift_Message::newInstance()
                                  ->setSubject($emailParts->getSubject())
                                  ->setFrom($emailParts->getFrom())
                                  ->setTo($emailParts->getTo())
                                  ->setBody($emailParts->getBodyMessage());
                                  //echo ("33333333333333333"); 

                                  // If an attachment was included, add it to the email
                                  if ($contactForm->hasAttachment()) {
                                    //echo ("00000000000000000000000000"); 
                                    $attachmentPath = $contactForm->getAttachmentPath();
                                    $emailMessage->attach(Swift_Attachment::fromPath($attachmentPath));
                                  }

                                  // Another Swiftmailer configuration. You can change SMTP mode to Mail, Sendmail, etc.
                                  // see http://swiftmailer.org/docs/sending.html for more details
                                  $transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
                                                  ->setUsername('mamrh100@gmail.com')
                                                  ->setPassword('imiae123456789azerty');
                                      //echo ("4444444444444444444444444444"); 
                                  $mailer = Swift_Mailer::newInstance($transport);
                                  // var_dump($mailer);
                                  // echo ("55555555555555555555"); 
                                  $result = $mailer->send($emailMessage);
                                  // var_dump($result);
                                  // echo ("6666666666666666666"); 


                                  return $result;
                                }

                                // instantiate the ContactForm with the information of the form and the possible uploaded file
                                $contactForm = new ContactForm($_POST, $_FILES);
                                
                                // we are calling the "main" method. It will return a list of errors. 
                                $errors = main($contactForm);
                          ?>

                          <?php 
                               if (isset($errors)) {
                                 foreach ($errors as &$error) { 
                            ?>
                                <div class="error"><?php $error ?></div>
                            <?php   }
                               }
                          ?>
                       
                      <div class="left ">
                        <div style="margin:0 25px ;">
                        <br><br>
Le concept du site "vosartistes.com" est mis en place pour que les détenteurs d'œuvres d'art (Propriétaires, Artistes et Galeries) puissent nous confier "virtuellement" leurs œuvres afin que nous les mettions à la vente au niveau du Maroc et à l'international avec discrétion et professionnalisme.
<br><br>
Pour exposer vos oeuvres sur le site, il suffit de nous envoyer les photos par mail à vosartistes.com@gmail.com en précisant bien le nom du ou des artistes concernés ainsi que vos coordonnées complètes.
<br><br>
Nos conditions sont les suivantes : 
<br><br>
- Chaque photo est accompagnée d'un descriptif complet (Dimensions, Artiste, Prix, Année d'exécution, Technique, Biographie de l'artiste...etc.)<br>
- Nous sélectionnons quelques oeuvres pour les intégrer sur notre site. La publication sur le site est GRATUITE.<br>
- Nous les présentons aussi à nos clients par nos catalogues, mailings ou autres.<br>
- Nous réalisons nous même la démarche commerciale auprès d'acquéreurs potentiels. <br>
- L'oeuvre publiée reste chez son propriétaire pour que ce dernier ait la possibilité de la vendre par lui même s'il le désire. Nous ne les déplaçons que si nous trouvons preneur (En échange d'un bon de consignation)<br>
- La rémunération due à « VOSARTISTES.COM » est fixée à 15 % HT du prix de la vente conclue entre le propriétaire et l’acheteur. Cette rémunération est versée par le propriétaire à la remise de l’œuvre à l’acheteur et au règlement de l’achat. <br>
- Aucune exclusivité n'est demandée, les propriétaires (Artistes ou collectionneurs) sont en droit de vendre par eux même leurs tableaux. Dans le cas où une oeuvre est vendue par son propriétaire directement, retirée de la vente ou cédée, un simple courrier suffit pour la retirer du site, sans frais. <br>
<br><br>
1) Pour les Collectionneurs/Propriétaires :<br>
- Nous prenons nous même les photos des oeuvres si cela nous est demandé. <br>
- Nous pouvons nous déplacer pour mieux "guider" les propriétaires (En fonction de la localisation) <br>
<br><br>
2) Pour les Galeries : <br>
- Nous réalisons nous même la publicité des différents évènements à venir (Expositions, Vernissages...etc.)<br>
- Nous nous chargeons d'exposer les oeuvres d'une exposition précédente par exemple.<br>
<br><br>
3) Pour les Artistes : <br>
- Il suffit de nous envoyer votre biographie ainsi que votre parcours artistique.<br>
- La diffusion sur le site n'engage en rien l'Artiste, libre de vendre et d'exposer ses oeuvres lui même. <br>
- Le nombre de photos à envoyer est d'environ 10, avec une très bonne résolution, en prenant soin de marquer dans chaque photo ses dimensions, son prix, un numéro de référence ainsi que votre nom d'artiste. <br>


                        </div>
                           
                      </div>
                      
               
                        <br>
                            
            </section>
          

            
            <footer>
           
                <div id="footer_top"> <br>
                  <div class="row">
                      <div class="col-lg-2">
                        <div class="liste">
                                  <ul>
                                      <li><a href="artistes.php">Artistes</a></li>
                                      <li><a href="oeuvres.php">Oeuvres</a></li>
                                      <li><a href="evenments.php">Actualités & Evénements</a></li>
                                      
                                  </ul>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="liste">
                                  <ul>
                                      <li><a href="exposer.php">Comment exposer</a></li>
                                      <li><a href="qsn.php">Qui sommes nous</a></li>
                                      <li><a href="mentions.php">Conditions Générales de Vente</a></li>
                                      
                                  </ul>
                        </div>
                      </div>
                      
                      <div class="col-lg-2">
                        <div class="liste">
                          <ul>
                              <li><a href="mentions.php">Mentions légales</a></li>
                              <li><a href="#">Accès partenaire</a></li>
                              <li><a href="#">Accés membre</a></li>
                              
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-lg-4">
                        <div class="liste no">
                          <ul>
                              <li><i class="fa fa-phone"></i><a href="#"> +212.6.60.15.94.94</a></li>
                              <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                              <li><i class="fa fa-fax"></i><a href="#"> +212.5.22.94.24.13</a></li>
                          </ul>
                        </div>
                      </div>
        
                    </div>

                  <br>
                  </div>

                 <div id="footer_bottom">
                  <div id="footer_bottom_left">Copyright @2014</div>
                  <div id="footer_bottom_center"><img src="images/logoeco.png"></div>
                  <div id="footer_bottom_right">
                      <a href="http://www.vosartistes.com/rss.xml"><img src="images/rss-footer.png" /></a>
                      <a href="https://twitter.com/Vosartistes"><img src="images/twitter-footer.png" /></a>
                      <a href="https://www.facebook.com/vosartistes"><img src="images/facebook-footer.png" /></a>
                  </div>
                  

                </div>

               
                
            </footer>
        </div>


        <div class="xxx">
            
                <header class="header">
              <div id="n"><a href="#" class="slideout-menu-toggle"><i class="fa fa-bars"></i> </a></div>

              <div class="slideout-menu" id="slideout-bleu">
               <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href="artistes.php"><i class="fa fa-paint-brush"></i> Artistes</a></li>
                <li><a href="oeuvres.php"><i class="fa fa-picture-o"></i> Oeuvres</a></li>
                <li><a href="evenments.php"><i class="fa fa-calendar"></i> Actualités & Evénements</a></li>
                <li><a href="#"><i class="fa fa-users"></i> Espace Membres</a></li>
                <li><a href="contact.php"><i class="fa fa-user"></i> Contact</a></li>
                <li class="def slideout-bleu ">Social Media</li>
                <li><a href="https://www.facebook.com/vosartistes"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="https://twitter.com/Vosartistes"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="vosartistes.com@gmail.com"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                <li class="def slideout-bleu ">Newsletter</li>
                
              </ul>
              <div style="margin: 10px;">
                <h4>Email Newsletters</h4>
                  <p>Abonnez-vous à recevoir l'inspiration, des idées et nouvelles dans votre boîte de réception.</p>

                  <form>
                    <input type="text" placeholder="Newsletter">
                    <span class="nbutton slideout-bleu ">Souscrire</span>
                  </form>
              </div>
              
              </div>

                    <div id="logo">
                        <img src="images/logo.png">
                    </div>

                    <div id="sos"><i class="fa fa-search"></i></div>

                </header>

                <div class="content">

                <section>
                  <div class="social">
                  <div class="left-social">
                        <span><a href='https://twitter.com/Vosartistes'><img src="images/twitter3.png"></a></span>
                    <span><a href='vosartistes.com@gmail.com'><img src="images/google2.png"></a></span>
                    <span><a href='https://www.facebook.com/vosartistes'>
                    <img src="images/facebook1.png"></a></span>
                  </div>
                  
                  <div class="right-social">
                  <div class="btn-group">
							  <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
								  Langue
								  <span class="caret"></span>
								</button>
								<!-- translator -->
								<ul class="dropdown-menu">
									<li><a href="javascript:;" title="French" class="translator-language-fr"><img src="translator/images/French.gif" alt="French" /></a></li>
									<li><a href="javascript:;" title="English" class="translator-language-en"><img src="translator/images/English.gif" alt="English" /></a></li>
									<li><a href="javascript:;" title="Spanish" class="translator-language-es"><img src="translator/images/Spanish.gif" alt="Spanish" /></a></li>
									<li><a href="javascript:;" title="Arabic" class="translator-language-ar"><img src="translator/images/Arabic.gif" alt="Arabic" /></a></li>
								</ul>
								
								
								<!-- translator -->
								<!--<ul class="dropdown-menu">
								  <li><a href="#">fr</a></li>
								  <li><a href="#">en</a></li>
								</ul>-->
							  </div>
							</div>
                  
                 </div>                  
                 </div>
                </section>

                <section>
                 <div id="ra" class="racolorbleu">

                  <div class="searchmob">
                    
                     <table  style="margin: 0 auto; width:90%; text-align:center; ">
                            <tr>
                              <td><label>Artistes</label></td><td><input id="miniart" type="checkbox" ></td>
                              
                               <td><label>Oeuvres</label></td><td><input id="minioeu" type="checkbox"></td>
                             
                               <td><label>Evenement</label></td><td><input id="minieve" type="checkbox"></td>
                              
                            </tr>

                          </table>
                          <form id="kkk" class="raform " action="#" style="display:block;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres,Evénements"><br><br>
                      <button type="button" class=" btm-themes ">Valider</button><br>


                  </form>

                  <form id="hhh" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres"><br><br>

                      <select>
                          <option>TYPE D'OEUVRE</option>
                         <option value="tableau">Tableaux</option>
                                              <option value="sculpture">Sculptures</option>
                                              <option value="photographie">Photographies</option>
                                              <option value="bijoux">Bijoux</option>
                                              <option value="livre">Livres</option>
                                              <option value="decoration">Objets de décoration</option>
                                              <option value="caftan">Caftans</option>
                                              <option value="meuble">Meubles</option>
                                              <option value="tapis">Tapis</option>
                      </select><br><br>
                      <select>
                         <option>STYLE</option>
                          <option>Moderne</option>
                          <option>Figuratif</option>
                          <option>Abstrait</option>
                          <option value="naif" >Naif/Primitif</option>
                      </select><br><br>

                      <button type="button" class=" btm-themes ">Valider</button>

                      
                  </form>

                  <form id="ddd" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Evénements"><br><br>
                      <input id="dp5" type="text" placeholder="Date début"><br><br>
                      <input id="dp6" type="text" placeholder="Date fin"><br><br>

                      <button type="button" class=" btm-themes ">Valider</button>

                      
                  </form>
                   
                     <br>
                  </div>
                  
               
                    

                </div>
                <br>

                  
               <section class="sec_article" >
                                      
                      <div style="width:90%; margin: 0 auto;"  >
                       <div style="margin:0 5px ;">
                        <br><br>
Le concept du site "vosartistes.com" est mis en place pour que les détenteurs d'œuvres d'art (Propriétaires, Artistes et Galeries) puissent nous confier "virtuellement" leurs œuvres afin que nous les mettions à la vente au niveau du Maroc et à l'international avec discrétion et professionnalisme.
<br><br>
Pour exposer vos oeuvres sur le site, il suffit de nous envoyer les photos par mail à vosartistes.com@gmail.com en précisant bien le nom du ou des artistes concernés ainsi que vos coordonnées complètes.
<br><br>
Nos conditions sont les suivantes : 
<br><br>
- Chaque photo est accompagnée d'un descriptif complet (Dimensions, Artiste, Prix, Année d'exécution, Technique, Biographie de l'artiste...etc.)<br>
- Nous sélectionnons quelques oeuvres pour les intégrer sur notre site. La publication sur le site est GRATUITE.<br>
- Nous les présentons aussi à nos clients par nos catalogues, mailings ou autres.<br>
- Nous réalisons nous même la démarche commerciale auprès d'acquéreurs potentiels. <br>
- L'oeuvre publiée reste chez son propriétaire pour que ce dernier ait la possibilité de la vendre par lui même s'il le désire. Nous ne les déplaçons que si nous trouvons preneur (En échange d'un bon de consignation)<br>
- La rémunération due à « VOSARTISTES.COM » est fixée à 15 % HT du prix de la vente conclue entre le propriétaire et l’acheteur. Cette rémunération est versée par le propriétaire à la remise de l’œuvre à l’acheteur et au règlement de l’achat. <br>
- Aucune exclusivité n'est demandée, les propriétaires (Artistes ou collectionneurs) sont en droit de vendre par eux même leurs tableaux. Dans le cas où une oeuvre est vendue par son propriétaire directement, retirée de la vente ou cédée, un simple courrier suffit pour la retirer du site, sans frais. <br>
<br><br>
1) Pour les Collectionneurs/Propriétaires :<br>
- Nous prenons nous même les photos des oeuvres si cela nous est demandé. <br>
- Nous pouvons nous déplacer pour mieux "guider" les propriétaires (En fonction de la localisation) <br>
<br><br>
2) Pour les Galeries : <br>
- Nous réalisons nous même la publicité des différents évènements à venir (Expositions, Vernissages...etc.)<br>
- Nous nous chargeons d'exposer les oeuvres d'une exposition précédente par exemple.<br>
<br><br>
3) Pour les Artistes : <br>
- Il suffit de nous envoyer votre biographie ainsi que votre parcours artistique.<br>
- La diffusion sur le site n'engage en rien l'Artiste, libre de vendre et d'exposer ses oeuvres lui même. <br>
- Le nombre de photos à envoyer est d'environ 10, avec une très bonne résolution, en prenant soin de marquer dans chaque photo ses dimensions, son prix, un numéro de référence ainsi que votre nom d'artiste. <br>


                        </div>

                           
                      </div>
                       <br>
 <br>

                     
               
                      
            </section>
                 

             <section class="footer" style="background:#01648B">
                <div id="fmobil" style="background:#01648B">
                  <div class="liste no">
                          <ul>
                              <li><i class="fa fa-phone"></i><a href="#"> +212.6.60.15.94.94</a></li>
                              <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                              <li><i class="fa fa-fax"></i><a href="#"> +212.5.22.94.24.13</a></li>
                          </ul>
                  </div>
                    
                   <div class="bottom_right">
                    
                    <div class="ftr">
                    <a style="color:#fff" href="https://www.facebook.com/vosartistes"> <i class="fa fa-facebook"></i></a>
                      <a style="color:#fff" href="https://twitter.com/Vosartistes"> <i class="fa fa-twitter"></i></a>
                      <a style="color:#fff" href="http://www.vosartistes.com/rss.xml"> <i class="fa fa-rss"></i></a>
                    </div>
                    
                    
                    <div>Copyright @2014</div>
                  

                  </div>


                </div>

                </section>

                   
                </div>

                
        </div>
    
<script type="text/javascript" src="js/app.js"></script>

<script src="js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('.slideout-menu-toggle').on('click', function(event){
      event.preventDefault();
      // create menu variables
      var slideoutMenu = $('.slideout-menu');
      var slideoutMenuWidth = $('.slideout-menu').width();
      
      // toggle open class
      slideoutMenu.toggleClass("open");
      
      // slide menu
      if (slideoutMenu.hasClass("open")) {
        slideoutMenu.animate({
          left: "0px"
        }); 
         $( "#ra" ).removeClass( "visible" )
           $( '.peloton' ).removeClass( "blur" );
        $( '.miniartistes' ).removeClass( "blur" );
      } else {
        slideoutMenu.animate({
          left: -slideoutMenuWidth
        }, 250);  
      }
    });
});
</script>
  <script>
  
    $(function(){
      window.prettyPrint && prettyPrint();
      // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            //return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });


$(function(){
      window.prettyPrint && prettyPrint();
      // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd3').datepicker({
          onRender: function(date) {
            //return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd4')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd4').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });
$(function(){
      window.prettyPrint && prettyPrint();
      // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dp5').datepicker({
          onRender: function(date) {
            //return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dp6')[0].focus();
        }).data('datepicker');
        var checkout = $('#dp6').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });


  </script>
</div>
    </body>
</html>