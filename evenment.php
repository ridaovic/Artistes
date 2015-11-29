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
	        <script src="js/modernizrdetail.js"></script>
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
	  /*$(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    */
    </script>
	
    <script type="text/javascript" src="js/jquery-paged-scroll.js"></script>
    <script type="text/javascript" > $('document').ready(function(){ $('.change').niceselect(); }) </script>

    <?php include('search.php');  include('searchartiste.php');  include('searchevent.php'); 
              $ev = $_GET["event"];
              $du = $_GET["du"];
              $au = $_GET["au"];
              $event = requete_event('{"query":{"bool":{"must":[],"must_not":[],"should":[
                                      {"query_string":{"default_field":"event.title","query":"'.$ev.'"}},
                                      {"range":{"event.pubDate":{"from":"'.$du.'","to":"'.$au.'"}}}]}},
                                      "from":0,"size":10,"sort":[],"facets":{}}');
              $artved = requete_artiste('{"query":{"bool":{"must":[],"must_not":[{"constant_score":{"filter":{"missing":{"field":"artist.oeuvres"}}}},{"constant_score":{"filter":{"missing":{"field":"artist.title"}}}}],"should":[{"match_all":{}}]}},"from":0,"size":3,"sort":[],"facets":{}}');
              $oeuvretend = requete_nouveautes('{"query":{"bool":{"must":[{"wildcard":{"nouveau.title":"*"}}],"must_not":[{"wildcard":{"nouveau.title":"*découvertes"}}],"should":[]}},"from":0,"size":3,"sort":[{"@timestamp":{"order":"desc"}}],"facets":{}}');
       ?>
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



                              <select class="select" style="width:125px;" id="type">
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

                              <select class="select" style="width:75px;" id="style2">
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

                          <!-- evenments -->
                          <form class="searchform" action="#" id="ccc">
                              <input type="text" placeholder="Evénement" style="width:120px;" id="search_event"><span>|</span>

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
            <div id="search_titre" style="background-color:#299D8B;">Personnalisez votre recherche</div>
             

            <div id="search_form">
          <form>
            <label> Evénement :</label><br>
             <select id="search_event1" class="select3"><option></option>
                                            <?php 

                      $x=requete_event('{"query":{"bool":{"must":[],"must_not":[],"should":[
                      {"range":{"event.pubDate":{"from":"'.date("d/m/y").'"}}}]}},
                      "from":0,"size":10,"sort":[],"facets":{}}');
                      $results = array();

                      for ($j=0; $j < totale_event($x) ; $j++) { 
                        $results[$j]=titre_event($x,$j);
                      }

                      $i=0;
                      $row_tab[]=array() ;
                      foreach( $results as $value){

                                  echo "<option>".$value."</option>";
                       }
                       echo "</select>";
                      // echo json_encode($row_tab); 
                      ?><br>
            <label> Type d’événement :</label><br>
            <select id="typeEvent" class="select3">
            <option></option>
              <option>Vernisage</option>
              <option>Exposition photo</option>
              <option>Festival</option>
              <option>Conférenc et Galas</option>
              <option>Salon</option>
              <option>Autres</option>
            </select>
            <br>
            <label> Date :</label><br>

             <label>Du</label> <input type="text" placeholder=" debut" value="" id="dpd3" style="width:101px;font-size:10px;">
             <label>Au</label> <input type="text" placeholder=" fin" value="" id="dpd4" style="width:101px;font-size:10px;">
            <br>
            
            
            <label> Lieux :</label><br>
            <select id="ville" class="select3">
            <option></option>
                  <option> Agadir</option>
                  <option> Asilah</option>
                  <option> Azemmour</option>
                  <option> Casablanca</option>
                  <option> El Jadida</option>
                  <option> Essaouira</option>
                  <option> Fes</option>
                  <option> Marrakech</option>
                  <option> Meknes</option>
                  <option> Rabat</option>
                  <option> Safi</option>
                  <option> Tanger</option>
                  <option> Tetuan</option>
                  
                 
              </select><br>
              <label> Artiste :</label><br>
              <select id="nameA" class="select3">
                      <?php 



$x=requete('
{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":600,"sort":[],"facets":{}}');
$results=namesArtist($x);
$a= array_unique($results);
asort($a);
//$q=$_GET["term"];
 $i=0;

foreach( $a as $value){

            echo "<option>".$value."</option>";
 }
 echo "</select>";
// echo json_encode($row_tab); 
?>
            </form>
            <br>
              </div>
                                   
            </div>
            <br>
            <br>
                                 
                                  <div class="artistarticle">
                
                     <div class="deeppink"><span>Artistes Vedettes</span></div>
                    <div style="height:370px">
                    <?php
                    for($i=0;$i<3;$i++){
                    $p = titre_artiste($artved,$i);
                    $idoev = ouevres_artiste($artved,$i);
                     echo '<a class="textdeco" href="artiste.php?artiste='.$p.'">';
                        echo'<div class="artistes">';

                          echo'<h2>'.$p.'</h2>';
                          for($j=0;$j<3 && $j<(count($idoev)-1);$j++){
                            $oeuvre_artiste = requete_oeuvre_artiste($idoev[$j+1]);
                            $imgs = images_oeuvre($oeuvre_artiste);

                            echo'<img width="85" src='.$imgs[count($imgs)-1].'>';
                          }
                         
                      echo'</div>';
                       echo'</a>';
                    }
                    ?>
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

                             </div>
             
             <div id="artist_right">
                
              <div style="float: right; margin-right: 20px;">
                    <span><a href="#sui"><img src="images/sui.png"></a></span>
              </div>
            

              <div style="float: left; margin-left: 0;">
                     <span><a href="#pre"><img src="images/pre.png"></a></span>
              </div>
     
              <div id="h1-id" align="center"> <h1><?php echo titre_event($event,0);?></h1> </div>
                
                 <div id="even_img">
                 <?php 
                        $img_event = images_event($event,0); 
                        $date_event = pubDate_event_s($event,0);
                 ?>
                   <img src=<?php echo $img_event[count($img_event)-1]?>  width="635"><br>
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
                </div>
                <br>
                <div id="evenment_detail">
                <?php 
                      $moisfr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
                              "septembre", "octobre", "novembre", "décembre");
                      // on extrait la date du jour
                      list($jour0, $mois0, $annee0) = explode('/',$date_event[0]);
                      list($jour1, $mois1, $annee1) = explode('/',$date_event[1]);
                ?>
                
                  <p>
                  Date début : <span> <?php echo $date_event[0]; ?>. </span><br>
                  Date Fin : <span> <?php echo $date_event[1]; ?>.</span><br>
                  Ville : <span> <?php echo ville_event($event,0);?>.</span><br>
                  Lieu : <span> <?php echo place_event($event,0);?>.</span><br>
                  <!--Nationalité : <span> Français</span><br>
                  Accés : <span> Gratuit.</span><br>-->
                  </p>
  
                  Plus d’info contactez nous sur:<br><br>
                  <?php echo contact_event($event,0); ?>
                  <!--i class="fa fa-mobile" style="font-size: 25px;"></i><span>   06 55 22 33 22</span><br>
                  <i class="fa fa-envelope"></i><span>   Contact@info.com</span-->
          
                  <br><br>
                </div>
                
                <div id="description">
                  <h1>Description : </h1>
                  <p>
                    <?php $disc = body_event($event,0);
                        echo morcseau_event_detail($disc);
                    ?>
                  </p>
                  <br>
                  <a href="#0" class="cd-popup-trigger rightevent">Lire la suite</a>
                  
                  <div class="cd-popup" role="alert">
                    <div class="cd-popup-container">

                      <?php if($disc != '') echo body_event($event,0);
                            else echo ' ';
                      ?>
                      
                      <a href="#0" class="cd-popup-close img-replace">Close</a>
                    </div> <!-- cd-popup-container -->
                  </div>

                </div>
                <br>

            <!--  <div class="content">
                 <h3>Ses Oeuvres</h3>
                      <div class="slider center">
                        <div><h3><a href="img/11.jpg" class="zoombox zgallery1" title="oeuvre.php" ><img src="img/1.jpg" ></a></h3></div>
                        <div><h3><a href="img/13.jpg" class="zoombox zgallery1" title="oeuvre.php" ><img src="img/2.jpg" ></a></h3></div>
                        <div><h3><a href="img/12.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/3.jpg" ></a></h3></div>
                        <div><h3><a href="img/14.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/4.jpg" ></a></h3></div>
                        <div><h3><a href="img/15.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/5.jpg" ></a></h3></div>
                        <div><h3><a href="img/16.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/6.jpg" ></a></h3></div>
                        <div><h3><a href="img/17.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/7.jpg" ></a></h3></div>
                      </div>
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
                              <li><a href="#">Accès membre</a></li>
                              
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
            
               <header class="header"style="background:#299D8B">
              <div id="n"><a href="#" class="slideout-menu-toggle"><i class="fa fa-bars"></i> </a></div>

              <div class="slideout-menu" id="slideout-e">
               <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href="artistes.php"><i class="fa fa-paint-brush"></i> Artistes</a></li>
                <li><a href="oeuvres.php"><i class="fa fa-picture-o"></i> Oeuvres</a></li>
                <li><a href="evenments.php"><i class="fa fa-calendar"></i> Actualités & Evénements</a></li>
                <li><a href="#"><i class="fa fa-users"></i> Espace Membres</a></li>
                <li><a href="contact.php"><i class="fa fa-user"></i> Contact</a></li>
                <li class="def slideout-e">Social Media</li>
                <li><a href="https://www.facebook.com/vosartistes"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="https://twitter.com/Vosartistes"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="vosartistes.com@gmail.com"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                <li class="def slideout-e">Newsletter</li>
                
              </ul>
              <div style="margin: 10px;">
                <h4>Email Newsletters</h4>
                  <p>Abonnez-vous à recevoir l'inspiration, des idées et nouvelles dans votre boîte de réception.</p>

                  <form>
                    <input type="text" placeholder="Newsletter">
                    <span class="nbutton slideout-e">Souscrire</span>
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
               <div id="ra" class="racolorE">

                  <div class="searchmob">
                    
                     <table  style="margin: 0 auto; width:90%; text-align: right; color:#299D8B;">
                            <tr>
                              <td><label>Artistes</label></td><td><input id="miniart" type="checkbox" ></td>
                              
                               <td><label>Oeuvres</label></td><td><input id="minioeu" type="checkbox"></td>
                             
                               <td><label>Evenement</label></td><td><input id="minieve" type="checkbox"></td>
                              
                            </tr>

                          </table>
                          <form id="kkk" class="raform " action="#" style="display:block;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres,Evénements"><br><br>
                      <button type="button" class=" btm-themesE ">Valider</button><br>


                  </form>

                  <form id="hhh" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres"><br><br>

                      <select>
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
                      </select><br><br>
                      <select>
                         <option>Style</option>
                          <option>Moderne</option>
                          <option>Figuratif</option>
                          <option>Abstrait</option>
                          <option value="naif" >Naif/Primitif</option>
                      </select><br><br>

                      <button type="button" class=" btm-themesE ">Valider</button>

                      
                  </form>

                  <form id="ddd" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Evénements"><br><br>
                      <input id="dp5" type="text" placeholder="Date début"><br><br>
                      <input id="dp6" type="text" placeholder="Date fin"><br><br>

                      <button type="button" class=" btm-themesE ">Valider</button>

                      
                  </form>
                   
                     <br>
                  </div>
                  
               
                    

                </div>
                <br>


               
                <div class="mini eve">
                  <img src=<?php echo $img_event[count($img_event)-1]?> class="peloton">
                    
                   <br>
                  
                  <div class="detail">
                
                  
                  Date début : <span> <?php echo $date_event[0]; ?>. </span><br>
                  Date Fin : <span> <?php echo $date_event[1]; ?>.</span><br>
                  Endroit : <span> <?php echo place_event($event,0);?>.</span><br>
                  Nationalité : <span> Français</span><br>
                  Accés : <span> Gratuit.</span><br>
                  
                  <hr>
  
                  Plus d’info contactez nous sur:<br>
                  <i style="font-size: 25px;" class="fa fa-mobile"></i><span> 06 55 22 33 22</span><br>
                  <i class="fa fa-envelope"></i><span> Contact@info.com</span>
          
                  
                </div>

                  <div class="detail">
                  <h1>Description : </h1>
                  <p><?php echo morcseau_event_detail($disc); ?></p>

                  <br>
                  <a class="right" href="#"  style="color:#299D8B">Lire la suite</a>
                <br>
                </div>
                <br>
                
                <span class="minibtn" style="background:#299D8B; color:#FFF;font-weight: 400;">Autre evénement</span>
                

                </div>

                <br>
                <br>
                </section>

                 

                <section class="footer" style="background:#299D8B">
                <div id="fmobil" style="background:#299D8B">
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

$(function(){
      window.prettyPrint && prettyPrint();
      // disabling dates
        // var nowTemp = new Date();
        // var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd3').datepicker({
          onRender: function(date) {
            //return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.update(newDate);
          }
          checkin.hide();
          $('#dpd4')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd4').datepicker({
          onRender: function(date) {
            // return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          
          checkout.hide();
       


            var selectVille = $("#ville option:selected").val();
            var selectTypeEvent = $("#typeEvent option:selected").val();
            var selectDu = $("#dpd3").val();
            var selectAu = $("#dpd4").val();
            var nameArtiste=$("#nameArtiste").val();

                    // TypeEvent :selectTypeEvent ,
              $.post( 'restEvenments.php',  {
                    Du : selectDu,
                    Au : selectAu,
                    Ville :selectVille ,
                    nomEvent : $( "#search_event1" ).val(),
                    nomArtiste : $("#nameArtiste").val()


                },
                function(data){  $( "#artist_right" ).html(data);}, 'html' );
            

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