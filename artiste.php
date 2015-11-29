<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link rel="stylesheet" href="css/datepicker.css" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="css/styles.css">
                 
         
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
      
        <script src="js/jquery-1.9.0.min.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/jquery-ui.js"></script>
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

    <?php include('search.php'); include('searchevent.php');
    include('searchartiste.php');
              $artiste = requete_artiste('{"query":{"bool":{"must":[],"must_not":[],"should":[{"query_string":{"default_field":"artist.title","query":"'.$_GET["artiste"].'"}},{"query_string":{"default_field":"artist.body","query":"Figuratif"}}]}},"from":0,"size":1,"sort":[],"facets":{}}');
              $oeuvretend = requete_nouveautes('{"query":{"bool":{"must":[{"wildcard":{"nouveau.title":"*"}}],"must_not":[{"wildcard":{"nouveau.title":"*découvertes"}}],"should":[]}},"from":0,"size":3,"sort":[{"@timestamp":{"order":"desc"}}],"facets":{}}');

        ?>

                <script src="js/modernizrdetail.js"></script>

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
	<script src="js/main.js"></script>
   
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
        	<a href="http://www.vosartistes.com/artistes" style="cursor:pointer;"><div id="backtov1">Retourner à la version originale</div></a>
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
                               <li><a href='search.php'><span>Espace Membres</span></a></li>
                               <li class='last'><a href='contact.php'><span>Contact</span></a></li>
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
                                  <option>Type d'oeuvre</option>
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
                              <form class="searchform" action="#" id="eee" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Artiste"  id="tags"><span>|</span>



                              <select class="select" style="width:125px;" >
                                              <option value="All">Type d'oeuvre</option>
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
                                  <option value="">Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option value="naif" >Naif/Primitif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          <!-- Oeuvres -->

                          <form class="searchform" action="#" id="fff" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Œuvre"  id="search_o"><span>|</span>



                               <select class="select" style="width:125px;" id="type">
                                              <option value="All">Type d'oeuvre</option>
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

                              <button id="btnArtistes" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>


                          <!-- evenments -->
                          <form class="searchform" action="#" id="ccc">
                              <input type="text" placeholder="Evénement" style="width:120px;"><span>|</span>

                              <select class="select" style="width:130px;">

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
            
           <section class="sec_article">
           <br>
                 

              <div id="artist_left">
             
                 <div id="search_per">
                  <div id="search_titre">Personnalisez votre recherche</div>
                   <div id="search_form">
                        <form name="FormAll">
                      <label> Artiste :</label><br>
                       <input type="text" id="tags1">
                        <a class="js-open-modal" href="#" data-modal-id="popup1"  style="font-size: 11px;color :#8a1527;display: block; float: right; margin:0px 10px;"> Liste des Artistes</a>
                              
                        <div id="popup1" class="modal-box">
                          <div class="headerbox"> <a href="#" class="js-modal-close close">×</a>
                            <h3>Liste des Artistes</h3>
                          </div>
                          <div class="modal-body">
                            <table>
                              
                              <?php 
                                  $x=requete('{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":600,"sort":[],"facets":{}}');
                                  $results=namesArtist($x);
                                  $a= array_unique($results);
                                  asort($a);
                                  //$q=$_GET["term"];
                                   $i=0;

                                  foreach( $a as $value){echo "<tr><td><a href='#' class='liste'>$value</a></td></tr>";}?>
                            </table>
                          </div>
                          
                        </div>
                      
                      <label> Type d'oeuvre :</label><br>
                                              <select name="typeOeuvre" class="select2" id="SelTest">
                                              <option value="All" selected="selected"></option>
                                              <option value="tableau">Tableaux</option>
                                              <option value="sculpture">Sculptures</option>
                                              <option value="photographie">Photographies</option>
                                              <option value="bijoux">Bijoux</option>
                                              <option value="livre">Livres</option>
                                              <option value="decoration">Objets de décoration</option>
                                              <option value="caftan">Caftans</option>
                                              <option value="meuble">Meubles</option>
                                              <option value="tapis">Tapis</option>
                                              </select><br>

                                            <label> Style : </label><br>
                                            <select class="select2" id="style"><option></option>
                                             <option>Moderne</option>
                                             <option>Figuratif</option>
                                             <option>Abstrait</option>
                                             <option value="naif" >Naif/Primitif/primitif</option></select><br>
                   
                    </form>
                   <br>
                  </div>
                 </div>
                 <br>
                 <br>
                 
                 <div class="artistarticle">
               
                    <div class="seagreen"><span>Nouveautés</span></div>
<div class="evenment">
          <div id="myCarouselMini" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarouselMini" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarouselMini" data-slide-to="1"></li>
                      <li data-target="#myCarouselMini" data-slide-to="2"></li>
                    </ol>
                    
                   
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox" style="height: 370px;width:251px;">
                    <?php
                            for($i=0;$i<3;$i++){
                    $class="";
                
                              $imgs_tend = images($oeuvretend,$i);
                              $p = pubData($oeuvretend,$i);
                              $title = body_title($oeuvretend,$i);
                              
                              if($i==0){
                                $class="active";
                              }
                              echo'<div class="item '.$class.'">';
                                echo'<a href="oeuvre.php?artiste='.$p[0].'&oeuvre='.ID($oeuvretend,$i).'&type='.Type($oeuvretend,$i).'"><div class="oeuvre_detail"><strong>&ldquo;'.$p[0].'&rdquo;</strong><br>'.$title.'</div><br/><img src="'.$imgs_tend[count($imgs_tend)-1].'" width="250"/></a>';
                                  
                              echo'</div>';
                             
                            }
                              ?>
                    </div>
                  
          </div>
      
      </div>
                  </div>
                <br>
                 <br>
              
                <div class="artistarticle">
                
                    <div class="teal"><span>Evénements & News</span></div><br>

                    <div class="evenment">
                    <?php $events = requete_event('{"query":{"bool":{"must":[],"must_not":[],"should":[
                                          {"range":{"event.pubDate":{"from":"'.date("d/m/y").'"}}}]}},
                                          "from":0,"size":1,"sort":[],"facets":{}}'); 
                                          $imag_event = images_event($events,0);
                                           $p_event = pubDate_event_s($events,0);
                    ?>
                    <span class="evenment_titre"><?php echo titre_event($events,0); ?></span>

                    <div class="evenment_img"><?php echo '<img src='.$imag_event[count($imag_event)-1].'>'; ?></div><br>

                    <p>Du <?php echo $p_event[0]; ?> Au <?php echo $p_event[1]; ?>.<br>Au <?php echo place_event($events,0);?>.</p>

                    <div class="evenment_plus"><?php echo '<a class="textdeco" href="evenment.php?event='.titre_event($events,0).'&du='.$p_event[0].'&au='.$p_event[1].'">+</a>'; ?></div>

                    </div>

                </div>

                <br>
                 <br>

             </div>
             <div id="artist_right">

             
              <div style="float: right; margin-right: 20px;">
                    <span><a href="#sui"><img src="images/sui.png"></a></span>
              </div>
            

              <div style="float: left; margin-left: -4px;">
                     <span><a href="#pre"><img src="images/pre.png"></a></span>
              </div>
                
              <div id="h1-id" align="center"><h1><?php $a = titre_artiste($artiste,0); echo $a;?></h1> </div>
          
                
                <div id="artist_detail">
        
                  Artiste : <span> <?php echo $a;?> </span><br><br>
         
                </div>
                 <div id="artist_img">
                 <?php  
                    $idoev = ouevres_artiste($artiste,0);
                    $oeuvre_artiste = requete_oeuvre_artiste($idoev[1]);
                    $imgs = images_oeuvre($oeuvre_artiste);
                    echo'<img src="'.$imgs[count($imgs)-1].'" height="280"><br>'; 
                    ?>
                   
                   <div class="right" style="width:200px;text-align:right;position: relative;">
                   	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo url_social($oeuvre); ?>" data-lang="fr">Tweeter</a>
                   	<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-url="<?php echo url_social($oeuvre); ?>" data-counter="right"></script>
					<!-- Placez cette balise là où vous souhaitez positionner le bouton +1. -->
<g:plusone data-width="65" href="<?php echo url_social($oeuvre); ?>"></g:plusone>

<!-- Placez cet appel d'affichage à l'endroit approprié. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'fr'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

                   	<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
                   	<div class="fb-like" data-href="<?php echo url_social($oeuvre); ?>" data-send="false" data-width="70" data-show-faces="false"></div>
                   	
                   	
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                         
                  </div>
                </div>                <br>
                
                <div id="biographie">
                  <h1>Biographie :</h1>
                  <p><?php $discc = body_div_artiste_cont($artiste,0);
                          echo morcseau_artiste($discc);?>
                  </p><br>
                  <a href="#0" class="cd-popup-trigger right">Lire la suite</a>
                  
                  <div class="cd-popup" role="alert">
                    <div class="cd-popup-container">

                     
                      <?php if($discc != '') echo body_div_artiste($artiste,0);
                            else echo ' ';
                      ?>
                      
                      <a href="#0" class="cd-popup-close img-replace">Close</a>
                    </div> <!-- cd-popup-container -->
                  </div>
                </div>
                <br>

                 <div class="content">
                 <h3>Ses Oeuvres</h3>
                      <div class="slider center">
                      <?php
                      for($i = 1 ;$i<(count($idoev));$i++){
                        $oeuvre_artiste = requete_oeuvre_artiste($idoev[$i]);
                        $imgs = images_oeuvre($oeuvre_artiste);
                        $p = pubData_oeuvre($oeuvre_artiste);
                        echo '<div><h3><a href="'.images_normal_art_oeuvre($imgs[count($imgs)-1]).'" class="zoombox zgallery1" title="oeuvre.php?artiste='.$p[0].'&oeuvre='.$idoev[$i].'&type='.Type_oeuvre($oeuvre_artiste).'+'.$p[8].'"><img src="'.$imgs[count($imgs)-1].'" ></a></h3></div>';

                        }
                      ?>
                      </div>
                  </div>
                <br>

               
                

                <!-- <div id="pagination">
                  <a href="" class="left"> << Précédant </a>
                  <a href="" class="right"> Suivant >> </a>
                </div> -->
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
                              <li><i class="fa fa-phone"></i><a href="tel:+212.6.60.15.94.94"> +212.6.60.15.94.94</a></li>
                              <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                              <li><i class="fa fa-fax"></i><a href="tel:+212.5.22.94.24.13"> +212.5.22.94.24.13</a></li>
                          </ul>
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
            <a href="http://www.vosartistes.com/liste-tableaux" style="cursor:pointer;z-index:999;"><div id="backtov1">Retourner à la version originale</div></a>
            
                <header class="header" style="background: #8A1527">
              <div id="n"><a href="#" class="slideout-menu-toggle" ><i class="fa fa-bars"></i> </a></div>

              <div class="slideout-menu" id="slideout-rose">
               <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href="artistes.php"><i class="fa fa-paint-brush"></i> Artistes</a></li>
                <li><a href="oeuvres.php"><i class="fa fa-picture-o"></i> Oeuvres</a></li>
                <li><a href="evenments.php"><i class="fa fa-calendar"></i> Actualités & Evénements</a></li>
                <li><a href="#"><i class="fa fa-users"></i> Espace Membres</a></li>
                <li><a href="contact.php"><i class="fa fa-user"></i> Contact</a></li>
                <li class="def slideout-rose">Social Media</li>
                <li><a href="https://www.facebook.com/vosartistes"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="https://twitter.com/Vosartistes"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="vosartistes.com@gmail.com"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                <li class="def slideout-rose">Newsletter</li>
                
              </ul>
              <div style="margin: 10px;">
                <h4>Email Newsletters</h4>
                  <p>Abonnez-vous à recevoir l'inspiration, des idées et nouvelles dans votre boîte de réception.</p>

                  <form>
                    <input type="text" placeholder="Newsletter">
                    <span class="nbutton slideout-rose">Souscrire</span>
                  </form>
              </div>
              
              </div>

                    <div id="logo">
                        <img src="images/logo.png">
                    </div>

                    <div id="sos"><i class="fa fa-search"></i></div>

                </header>

                <div class="contents">

                <section>
                  <div class="social">
                <div class="left-social">
                    <span><a href='https://twitter.com/Vosartistes'><img src="images/twitter3.png"></a></span>
                    <span><a href='vosartistes.com@gmail.com'><img src="images/google2.png"></a></span>
                    <span><a href='https://www.facebook.com/vosartistes'>
                    <img src="images/facebook1.png"></a></span>
                  </div>
                  
                  <div class="right-social">
                    <span><div class="fb-like" data-href="https://www.facebook.com/vosartistes" data-width="65" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" style="display: block;margin: -5px;"></div></span>
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
                 <div id="ra" class="racolorrose">

                  <div class="searchmob">
                   
                     <table  style="margin: 0 auto; width:90%; text-align: right;">
                            <tr>
                              <td><label>Artistes</label></td><td><input id="miniart" type="checkbox" ></td>
                              
                               <td><label>Oeuvres</label></td><td><input id="minioeu" type="checkbox"></td>
                             
                               <td><label>Evenement</label></td><td><input id="minieve" type="checkbox"></td>
                              
                            </tr>

                          </table>
                          <form id="kkk" class="raform " action="#" style="display:block;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres,Evénements"><br><br>
                      <button type="button" class=" btm-themesrose ">Valider</button><br>


                  </form>

                  <form id="hhh" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres"><br><br><br><br>

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
                         <option>Style</option>
                          <option>Moderne</option>
                          <option>Figuratif</option>
                          <option>Abstrait</option>
                          <option value="naif" >Naif/Primitif</option>
                      </select><br><br>

                      <button type="button" class=" btm-themesrose ">Valider</button>

                      
                  </form>

                  <form id="ddd" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Evénements"><br><br>
                      <input id="dp5" type="text" placeholder="Date début"><br><br>
                      <input id="dp6" type="text" placeholder="Date fin"><br><br>

                      <button type="button" class=" btm-themesrose ">Valider</button>

                      
                  </form>
                   
                     <br>
                  </div>
                  
               
                    

                </div>
                <br>


                <div class="mini art">


                 <div id="artist_img-responsive">
                 <?php  
                    $idoev = ouevres_artiste($artiste,0);
                    $oeuvre_artiste = requete_oeuvre_artiste($idoev[1]);
                    $imgs = images_oeuvre($oeuvre_artiste);

                echo'<img src='.$imgs[count($imgs)-1].' class="peloton"><br>';
                ?>

                  

                  <div class="detail">
                      <table style="width:100%">
                       
                        <tr>
                          <td><span align="center">Artiste :</span> <?php echo $a;?> </td>
                        </tr>
                        <tr>
                          <td><span>Age :</span>  Mixte</td>
                          <td><span>Style :</span>   Moderne</td>
                        </tr>
                         <tr>
                          <td colspan="2"> <span>Nationalité :</span>  Français </td>
                        </tr>

                      </table>
                    </div>

                  
                     <div class="detail">
                       <h1>Biographie : </h1>
                      <p>
                        <?php 
                              $disc = body_div_artiste($artiste,0);
                        if(strlen($disc)>66){
                          if(strlen($disc)>=165) echo morcseau_artiste($disc).'</div>';
                          else echo morcseau_artiste($disc);
                        }
                        ?>
                      </p>
                      
                      <br>
                      <a class="right" href="#"  style="color:#8A1527;right:16px;top:-58px;position:relative;">Lire la suite</a>
                      <br>
                    </div>

                  
                <br>
                <span class="minibtn" style="background: #8A1527; color:#FFF;">Voir ses Oeuvres </span>

                </div>

                <br>
                <br>
                </section>

                 

                <section class="footer" style="background: #8A1527">
                <div id="fmobil" style="background: #8A1527">
                  <div class="liste no">
                          <ul>
                              <li><i class="fa fa-phone"></i><a href="tel:+212.6.60.15.94.94"> +212.6.60.15.94.94</a></li>
                              <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                              <li><i class="fa fa-fax"></i><a href="tel:+212.5.22.94.24.13"> +212.5.22.94.24.13</a></li>
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
  
  
 $(".select2").change(function(){
        scroll = true;
        selectTypeOeuvre = $("#SelTest option:selected").val();
        selectstyle = $("#style option:selected").val();
        nameart = $("#nameA option:selected").val();
        // nameart = $("#tags1").val();

            $.post( 'restArtistes.php',  {
                TypeOeuvre : selectTypeOeuvre,
                style : selectstyle,
                nameart : nameart

            },
            function(data){  $( "#artist_right" ).html(data);
                $(".oeuvres").on({
                    mouseenter: function () {
                        //$(this).addClass("hover");
                        $( this ).children(".oeuvres_detail").addClass( "visible" );
                    },
                    mouseleave:function () {
                        //$(this).removeClass("hover");
                        $( this ).children(".oeuvres_detail").removeClass( "visible" );
                    }
                });
            }, 'html' );
    });

 $(".liste").click(function(){


              scroll = true;
              selectTypeOeuvre = $("#SelTest option:selected").val();
              selectstyle = $("#style option:selected").val();
              nameart = $(this).text();

              $("#tags1").val(nameart);

              $(".modal-box, .modal-overlay").fadeOut(500, function() {
                  $(".modal-overlay").remove();
              });
              // nameart = $("#tags1").val();

                  $.post( 'restArtistes.php',  {
                      TypeOeuvre : selectTypeOeuvre,
                      style : selectstyle,
                      nameart : nameart

                  },
                  function(data){

                    $( "#artist_right" ).html(data);
                      $(".oeuvres").on({
                          mouseenter: function () {
                              //$(this).addClass("hover");
                              $( this ).children(".oeuvres_detail").addClass( "visible" );
                          },
                          mouseleave:function () {
                              //$(this).removeClass("hover");
                              $( this ).children(".oeuvres_detail").removeClass( "visible" );
                          }
                      });
                  }, 'html' );
          });



  ///////////////////////////////////////////////////////////////////////////////
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


  <script type="text/javascript" src="js/slick.js"></script>
 <script type="text/javascript" src="js/scripts.js"></script>
      <script type="text/javascript" src="js/zoombox.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            $(function(){
                $('a.zoombox').zoombox();
            });

            //]]>
        </script>

 <script>
    $(function(){

    var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

      $('a[data-modal-id]').click(function(e) {
        e.preventDefault();
        $("body").append(appendthis);
        $(".modal-overlay").fadeTo(500, 0.7);
        //$(".js-modalbox").fadeIn(500);
        var modalBox = $(this).attr('data-modal-id');
        $('#'+modalBox).fadeIn($(this).data());
      });  
      
      
    $(".js-modal-close, .modal-overlay").click(function() {
        $(".modal-box, .modal-overlay").fadeOut(500, function() {
            $(".modal-overlay").remove();
        });
     
    });
     
    $(window).resize(function() {
        $(".modal-box").css({
            top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
            left: ($(window).width() - $(".modal-box").outerWidth()) / 2
        });
    });
     
    $(window).resize();
     
    });
    </script>
    <script type="text/javascript">
      $('.carousel-sync').on('slide.bs.carousel', function(ev) {
          var dir = ev.direction == 'right' ? 'prev' : 'next';
        $('.carousel-sync').not('.sliding').addClass('sliding').carousel(dir);
      });
      $('.carousel-sync').on('slid.bs.carousel', function(ev) {
        $('.carousel-sync').removeClass('sliding');
      });
    </script>

	</div>
    </body>
</html>