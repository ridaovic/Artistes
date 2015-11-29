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
        <script type="text/javascript">
          var scl=true;
        </script>

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
        <?php include('search.php');  include('searchartiste.php'); include('searchevent.php'); 
              $artved = requete_artiste('{"query":{"bool":{"must":[],"must_not":[{"constant_score":{"filter":{"missing":{"field":"artist.oeuvres"}}}},{"constant_score":{"filter":{"missing":{"field":"artist.title"}}}}],"should":[{"match_all":{}}]}},"from":0,"size":3,"sort":[],"facets":{}}');
       ?>

        <script type="text/javascript" src="js/jquery-paged-scroll.js"></script>


        <style>
          /* Paste this css to your style sheet file or under head tag */
          /* This only works with JavaScript, 
          if it's not present, don't show loader */
          .no-js #loader { display: none;  }
          .js #loader { display: block; position: absolute; left: 100px; top: 0; }
          .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/Preloader_8.gif) center no-repeat #fff;
          }
          </style>

          <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
          <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
              $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
              });
          </script>


		<script type="text/javascript" > $('document').ready(function(){   
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
	 }) </script>
   
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
    <div class="se-pre-con"></div>
    <div id="largeData">
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
                               <li class='active'><a href='#'><span>Oeuvres</span></a></li>
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
                      <form class="searchform" id="aaa"  action="results.php" method="post">
                      <input style="width:454px;" type="text" placeholder=" Artiste, Evènement, Œuvre..." id="search_all" name="search_a_o">
              							  <input  type="hidden" value="aaa" name="form"/>
        
                     
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                      </form>

                      <!-- Artistes Oeuvres -->
                       <form class="searchform"  action="results.php" method="post" id="bbb" style="display:none">
                      <input style="width:226px;" type="text" placeholder=" Artiste, Œuvre"  id="search_a_o" name="search_a_o"><span>|</span>
                      

							  <input  type="hidden" value="bbb" name="form"/>

                      <select class="select" style="width:125px;" name="type_o">
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

                      <select class="select" style="width:75px;" name="style_o">
                          <option>Style</option>
                          <option>Moderne</option>
                          <option>Figuratif</option>
                          <option>Abstrait</option>
                          <option value="naif" >Naif/Primitif</option>
                      </select>

                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                      </form>
                      <!-- Artistes -->
                        <form class="searchform"  action="results.php" method="post" id="eee" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Artiste"  id="tags" name="tags"><span>|</span>
							  <input  type="hidden" value="eee" name="form"/>



                              <select id="typeA" class="select" style="width:125px;" name="type_o">
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

                              <select id="styleA" class="select" style="width:75px;" name="style_o">
                                  <option value="">Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option value="naif" >Naif/Primitif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                      <!-- Oeuvres -->

                      <form class="searchform"  action="results.php" method="post" id="fff" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Œuvre"  id="search_o" name="search_o"><span>|</span>
							  <input  type="hidden" value="fff" name="form"/>



                               <select class="select" style="width:125px;" id="type" name="type_o">
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

                              <select id="style2" class="select" style="width:75px;" name="style_o">
                                  <option value="">Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option value="naif" >Naif/Primitif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>

                      <!-- evenments -->
                        <form class="searchform"  action="results.php" method="post" id="ccc">
                              <input type="text" placeholder="Evénement" style="width:120px;" id="search_event" name="search_event"><span>|</span>
							  <input  type="hidden" value="ccc" name="form"/>

                              <select id="typeEvent" class="select" style="width:130px;" name="type_ev">

                                  <option>Type d’événement</option>
                                  <option>Vernissage</option>
                                  <option>Exposition photo</option>
                                  <option>Festival</option>
                                  <option>Conférence et Galas</option>
                                  <option>Salon</option>
                                  <option>Autres</option>
                              </select>
                              <span>|</span>
                              <input type="text" placeholder=" debut" value="" id="dpd1" style="width:80px;" name="debut">
                              <span>|</span>
                              <input type="text" placeholder=" fin" value="" id="dpd2" style="width:80px;" name="fin">



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
                  <div id="search_titre" style="background-color:#01648B;">Personnalisez votre recherche</div>
                   <div id="search_form">
                  <form name="FormAll">
                      <label> Artiste :</label><br><input type="text" id="tags1" ><br>

                      <a class="js-open-modal" href="#" data-modal-id="popup1"  style="color:#01648b;display: block; float: right; margin: 0px 10px;font-size: 11px;"> Liste des Artistes</a>
                              
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
                                              <select name="typeOeuvre" class="select1" id="SelTest">
                                              <option value="All" selected="selected"></option>
                                              <option value="tableau">Tableaux</option>
                                              <option value="sculpture">Sculptures</option>
                                              <option value="photographie">Photographies</option>
                                              <option value="bijoux">Bijoux</option>
                                              <option value="livre">Livres</option>
                                              <option value="deco">Objets de décoration</option>
                                              <option value="caftan">Caftans</option>
                                              <option value="meuble">Meubles</option>
                                              <option value="tapis">Tapis</option>
                                              </select><br>

                                           <label> Style :</label><br>
                                            <select class="select1" id="style"><option></option>
                                             <option>Moderne</option>
                                             <option>Figuratif</option>
                                             <option>Abstrait</option>
                                             <option value="naif">Naif/Primitif</option></select><br>

                       <div id="Autres">                      
                      <label> Prix : </label><br>
                      <select class="select1" id="prix1">
                      <option></option>
                        <option></option>
                        <option value="- 2 000 DH">- 2 000 DH</option>
                        <option value="2 000 DH à 5 000 DH">2 000 DH à 5 000 DH</option>
                        <option value="5 000 DH à 20 000 DH">5 000 DH à 20 000 DH</option>
                        <option value="20 001 DH à 80 000 DH">20 001 DH à 80 000 DH</option>
                        <option value="80 001 DH à 200 000 DH">80 001 DH à 200 000 DH</option>
                        <option value="200 001 DH et +">200 001 DH et +</option>
                      </select><br>
                      </div>



                      <div id="Tableau" style="display:none">
                        <label> Prix : </label><br>
                        <select  class="select1" id="prix2">
                        <option></option>
                        <option value="- 2 000 DH">- 2 000 DH</option>
                        <option value="2 000 DH à 5 000 DH">2 000 DH à 5 000 DH</option>
                        <option value="5 000 DH à 20 000 DH">5 000 DH à 20 000 DH</option>
                        <option value="20 001 DH à 80 000 DH">20 001 DH à 80 000 DH</option>
                        <option value="80 001 DH à 200 000 DH">80 001 DH à 200 000 DH</option>
                        <option value="200 001 DH et +">200 001 DH et +</option>                        </select><br>
                        </div>
                      

                      <div id="selectFormat" style="display:none">
                       <br><label>Format : </label><br>
                       <select class="select1" id="Format">
                       <option></option>
                         <option>Petit(< 50 cm) </option>
                        <option>Moyen(< 100 cm) </option>
                        <option>Grand(< 150 cm) </option>
                        <option>Trés Grand(> 150 cm) </option>
                      </select> <br>
                      </div>
                    

                      
                    </form>
                   <br>
                  </div>
                 </div>
<br><br>
                  <div id="btn_suggestions" class="btn_suggestions" style="cursor:pointer;background-color:#01648B;"><span style="color:white;display: inline-block;margin-top: 10px;">Suggestions de "Vos Artistes"</span></div>
                 
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
                <?php 
            
                 $result = requete('{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":8,"sort":[],"facets":{}}');
                  $i = 0;
                  foreach($result['hits']['hits'] as $r){
                    $imgs = images_new($r);
                    $p = pubData_new($r);
                    $a=$p[0];

                    //echo $a;
                    echo '<div class="oeuvres">';
                    echo '<img src='.$imgs[count($imgs)-1].'>';
                        echo '<div class="oeuvres_detail">';
                           echo '<div id="oeuvres_detail_title" class="oeuvres_titre"><span>'.$a.'</span><br></div>';
                        echo '<div id="oeuvres_detail_img" class="oeuvres_servol"><span><a href="oeuvre.php?artiste='.$p[0].'&oeuvre='.ID($result,$i).'&type='.Type($result,$i).'"><img src="images/survol2.png"></a></span></div>';
                        echo '</div>';
                    echo '</div>';
                    $i++;
                  }
   
                  ?>
              
               </div>
               <div class="animation_image" style="display:none; position: relative; top: 30px; left: 160px;" align="center"><img src="loader1.gif"></div>
                <br>
                <br>
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
         
            <header class="header" style="background:##01648B">
              <div id="n"><a href="#" class="slideout-menu-toggle"><i class="fa fa-bars"></i> </a></div>

              <div class="slideout-menu" id="slideout-vert">
               <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href="artistes.php"><i class="fa fa-paint-brush"></i> Artistes</a></li>
                <li><a href="oeuvres.php"><i class="fa fa-picture-o"></i> Oeuvres</a></li>
                <li><a href="evenments.php"><i class="fa fa-calendar"></i> Actualités & Evénements</a></li>
                <li><a href="#"><i class="fa fa-users"></i> Espace Membres</a></li>
                <li><a href="contact.php"><i class="fa fa-user"></i> Contact</a></li>
                <li class="def slideout-vert ">Social Media</li>
                <li><a href="https://www.facebook.com/vosartistes"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="https://twitter.com/Vosartistes"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="vosartistes.com@gmail.com"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                <li class="def slideout-vert ">Newsletter</li>
                
              </ul>
              <div style="margin: 10px;">
                <h4>Email Newsletters</h4>
                  <p>Abonnez-vous à recevoir l'inspiration, des idées et nouvelles dans votre boîte de réception.</p>

                  <form>
                    <input type="text" placeholder="Newsletter">
                    <span class="nbutton slideout-vert">Souscrire</span>
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

                <section id="loadmobil">

           <div id="ra" class="racolorvert ">

                  <div class="searchmob">
                   
                     <table  style="margin: 0 auto; width:90%; text-align: right; ">
                            <tr>
                              <td><label>Artistes</label></td><td><input id="miniart" type="checkbox" ></td>
                              
                               <td><label>Oeuvres</label></td><td><input id="minioeu" type="checkbox"></td>
                             
                               <td><label>Evenement</label></td><td><input id="minieve" type="checkbox"></td>
                              
                            </tr>

                          </table>
                          <form id="kkk" class="raform " action="#" style="display:block;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres,Evénements"><br><br>
                      <button type="button" class=" btm-themesvert ">Valider</button><br>


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
                                              <option value="deco">Objets de décoration</option>
                                              <option value="caftan">Caftans</option>
                                              <option value="meuble">Meubles</option>
                                              <option value="tapis">Tapis</option>
                      </select><br><br>
                      <select>
                         <option>Style</option>
                          <option>Moderne</option>
                          <option>Figuratif</option>
                          <option>Abstrait</option>
                          <option value="naif">Naif/Primitif</option>
                      </select><br><br>

                      <button type="button" class=" btm-themesvert ">Valider</button>

                      
                  </form>

                  <form id="ddd" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Evénements"><br><br>
                      <input id="dp5" type="text" placeholder="Date début"><br><br>
                      <input id="dp6" type="text" placeholder="Date fin"><br><br>

                      <button type="button" class=" btm-themesvert ">Valider</button>

                      
                  </form>
                   
                     <br>
                  </div>
                  
               
                    

                </div>
                <br>



               <div id="minioeuvress">
               


                <?php 
                  $result = requete('{"query":{"bool":{"must":[{"query_string":{"default_field":"parentUrl","query":"tendance"}}],"must_not":[],"should":[{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}');
                  for($i=0; $i<3 ; $i++ ){
                    $imgs = images($result,$i);
                    $p = pubData($result,$i);

                    $a=$p[0];

                  echo'<div class="minioeuvres">';
                  echo'<a href="oeuvre.php?artiste='.$p[0].'&oeuvre='.ID($result,$i).'&type='.Type($result,$i).'"><img src='.$imgs[count($imgs)-1].' class="peloton"></a>';
                  
                  echo'<div>';
                    echo'<div class="left">';
                      echo'<p>'.$a.'</p>';
                    echo'</div>';
                    echo'</div>';
                    echo'<br>';
                    echo'</div>';

                  }
                  ?>
                  <div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
                   	<div class="fb-like" data-href="<?php echo url_social($oeuvre); ?>" data-send="false" data-width="70" data-show-faces="false"></div>
                  </div>
                  <div class="animation_image" style="display:none;" align="center"><img src="loader1.gif"></div>

                </section>

                 <br>
                <br>
              

                <section class="footer" style="background:#01648B">
                <div id="fmobil" style="background:#01648B">
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
 </div>   
<script type="text/javascript" src="js/app.js"></script>

<script src="js/bootstrap-datepicker.js"></script>


<?php
$total = 1000;
?>

<script type="text/javascript">
$(document).ready(function() {
 /////////////////////////////////////////////////////////////////////////////////////////////////
 
$("#tags1").focusout(function(){


        scroll = true;
        selectTypeOeuvre = $("#SelTest option:selected").val();
        selectstyle = $("#style option:selected").val();
        selectprix1 = $("#prix1 option:selected").val();
        selectprix2 = $("#prix2 option:selected").val();
        selectformat = $("#Format option:selected").val();
              nameart = $(this).val();

              //$("#tags1").val(nameart);

              $(".modal-box, .modal-overlay").fadeOut(500, function() {
                  $(".modal-overlay").remove();
              });
              // nameart = $("#tags1").val();

                  $.post( 'restOeuvres.php',  {
                        TypeOeuvre : selectTypeOeuvre,
		                style : selectstyle,
		                prix1 : selectprix1,
		                prix2 : selectprix2,
		                format : selectformat,
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



// function extractUrlParams(){  
//   var t = location.search.substring(1).split('&');
//   var f = [];
//   for (var i=0; i<t.length; i++){
//     var x = t[ i ].split('=');
//     f[x[0]]=x[1];
//   }
//   return f;
// }
// var x=extractUrlParams();
// var nameA=x['nameartistes'];
// var typeO=x['typeOeuvre'];
// var styleO=x['style'];

// var res = nameA.replace(/%20/g, " ");

//  document.getElementById("tags1").value = res;

//     var style = document.getElementById('style');
//     var opts = style.options;
//     for(var opt, j = 0; opt = opts[j]; j++) {
//         if(opt.value == styleO) {
//             style.selectedIndex = j;
//             break;
//         }
//     }


//     var SelTest = document.getElementById('SelTest');
//     var opts = SelTest.options;
//     for(var opt, i = 0; opt = opts[i]; i++) {
//         if(opt.value == typeO) {
//             SelTest.selectedIndex = i;
//             break;
//         }
//     }

$(".btn_suggestions").click(function(){
  		$.post( 'restSuggestions.php',
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
        selectprix1 = $("#prix1 option:selected").val();
        selectprix2 = $("#prix2 option:selected").val();
        selectformat = $("#Format option:selected").val();
              nameart = $(this).text();

              $("#tags1").val(nameart);

              $(".modal-box, .modal-overlay").fadeOut(500, function() {
                  $(".modal-overlay").remove();
              });
              // nameart = $("#tags1").val();

                  $.post( 'restOeuvres.php',  {
                        TypeOeuvre : selectTypeOeuvre,
		                style : selectstyle,
		                prix1 : selectprix1,
		                prix2 : selectprix2,
		                format : selectformat,
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




    $("#SelTest").change(function(){
        scroll = true;
        var selectTypeOeuvre = $("#SelTest option:selected").val();


        if(selectTypeOeuvre == "tableau")
        {
            $('#selectFormat').show();
            $('#Tableau').show();
            $('#Autres').hide();

        }

        else{
            $('#selectFormat').hide();
            $('#Autres').show();
            $('#Tableau').hide();


        }

    });
    //////////////////////////////////////////////////////////////////////

    $(".select1").change(function(){
     
        scroll = true;
        selectTypeOeuvre = $("#SelTest option:selected").val();
        selectstyle = $("#style option:selected").val();
        selectprix1 = $("#prix1 option:selected").val();
        selectprix2 = $("#prix2 option:selected").val();
        selectformat = $("#Format option:selected").val();
        nameart = $("#tags1").val();
             

             if (selectTypeOeuvre=="All" && selectstyle=="" && nameart=="" && selectprix1=="" && selectprix2=="" && selectformat=="") {
                scl=true;
                
              } else{
                scl=false;

              };

            $.post( 'restOeuvres.php',  {
                TypeOeuvre : selectTypeOeuvre,
                style : selectstyle,
                prix1 : selectprix1,
                prix2 : selectprix2,
                format : selectformat,
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
        selectprix1 = $("#prix1 option:selected").val();
        selectprix2 = $("#prix2 option:selected").val();
        selectformat = $("#Format option:selected").val();
        nameart = $(this).text();

              $("#tags1").val(nameart);
              
              $(".modal-box, .modal-overlay").fadeOut(500, function() {
                  $(".modal-overlay").remove();
              });
             
            $.post( 'restOeuvres.php',  {
                TypeOeuvre : selectTypeOeuvre,
                style : selectstyle,
                prix1 : selectprix1,
                prix2 : selectprix2,
                format : selectformat,
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





  ///////////////////////////////////////////////////////////////////////////////////////
  var track_load = 11; //total loaded record group(s)
  var loading  = false; //to prevents multipal ajax loads
  var total = <?php echo $total; ?>; //total record group(s)
  
  //$('#artist_right').load("autoload_oeuvres.php", {'group_no':track_load}, function() {track_load++;}); //load first group
  
  $(window).scroll(function() { //detect page scroll
    
    if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
    {
      
      if(track_load <= total && loading==false) //there's more data to load
      {
        loading = true; //prevent further ajax loading
        $('.animation_image').show(); //show loading image
        
        //load data from the server using a HTTP POST request
        $.post('autoload_oeuvres.php',{'group_no': track_load}, function(data){
                  
          $("#artist_right").append(data);
           //append received data into the element
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
               
          //hide loading image
          $('.animation_image').hide(); //hide loading image once data is received
          
          track_load++; //loaded group increment
          loading = false; 
        
        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          
          alert(thrownError); //alert with HTTP error
          $('.animation_image').hide(); //hide loading image
          loading = false;
        
        });
        
        
      }
    }
  });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  var track_load = 11; //total loaded record group(s)
  var loading  = false; //to prevents multipal ajax loads
  var total = <?php echo $total; ?>; //total record group(s)
  
  //$('#artist_right').load("autoload_oeuvres.php", {'group_no':track_load}, function() {track_load++;}); //load first group
  
  $(window).scroll(function() { //detect page scroll
    
    if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
    {
      
      if(track_load <= total && loading==false) //there's more data to load
      {
        loading = true; //prevent further ajax loading
        $('.animation_image_responsive').show(); //show loading image
        
        //load data from the server using a HTTP POST request
        $.post('autoload_oeuvres_responsive.php',{'group_no': track_load}, function(data){
                  
          $(".miniartistess").append(data);
           //append received data into the element

               

          //hide loading image
          $('.animation_image_responsive').hide(); //hide loading image once data is received
          
          track_load++; //loaded group increment
          loading = false; 
        
        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          
          alert(thrownError); //alert with HTTP error
          $('.animation_image_responsive').hide(); //hide loading image
          loading = false;
        
        });
        
      }
    }
  });
});
</script>



<script type="text/javascript">
$(document).ready(function() {

  var track_load = 3; //total loaded record group(s)
  var loading  = false; //to prevents multipal ajax loads
  var total = <?php echo $total; ?>; //total record group(s)
  
  //$('#artist_right').load("autoload_oeuvres.php", {'group_no':track_load}, function() {track_load++;}); //load first group
  
  $(window).scroll(function() { //detect page scroll
    
    if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
    {
      
      if(track_load <= total && loading==false) //there's more data to load
      {
        loading = true; //prevent further ajax loading
        $('.animation_image_responsive').show(); //show loading image
        
        //load data from the server using a HTTP POST request
        $.post('autoload_oeuvres_responsive.php',{'group_no': track_load}, function(data){
                  
          $("#minioeuvress").append(data);
           //append received data into the element

               

          //hide loading image
          $('.animation_image_responsive').hide(); //hide loading image once data is received
          
          track_load++; //loaded group increment
          loading = false; 
        
        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          
          alert(thrownError); //alert with HTTP error
          $('.animation_image_responsive').hide(); //hide loading image
          loading = false;
        
        });
        
      }
    }
  });
});
</script>












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

// $('.oeuvres').hover(function(e){
//          e.preventDefault();
//          $( this ).children(".oeuvres_detail").toggleClass( "visible" );
        

//     });


  // $(window).paged_scroll({
  //       handleScroll:function (page,container,doneCallback) {
  //           setTimeout(function () {
  //               // console.log("Page is:", page);
  //               $('#artist_right').append('<div class="oeuvres"><img src="images/oeuvre.jpg"><div class="oeuvres_detail"><span class="oeuvres_titre">Anderbouhr Paul</span><br><span class="oeuvres_servol"><a href="oeuvre.php"><img src="images/survol2.png"></a> </span></div></div><div class="oeuvres"><img src="images/oeuvre.jpg"><div class="oeuvres_detail"><span class="oeuvres_titre">Anderbouhr Paul</span><br><span class="oeuvres_servol"><a href="oeuvre.php"><img src="images/survol2.png"></a> </span></div></div>');

  //                  $('#loadmobil').append('<div class="minievenments"><a href="evenment.php"><img src="images/mobil/even.jpg" class="peloton"></a><div style="margin: -15px 10px;"><h1>Festival d’Art Video (Du 22 Au 25 Avril)</h1><div class="left"><p>Au Théatre Agdal<br>Accée : 100dhs</p></div><div class="right"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-linkedin"></i></div></div><br></div>');

  //                   if ($('#ra').hasClass('visible')) {
  //                       $( '.peloton' ).addClass( "blur" );
  //                       $( '.miniartistes' ).addClass( "blur" );

  //                    }else{

  //                       $( '.peloton' ).removeClass( "blur" );
  //                       $( '.miniartistes' ).removeClass( "blur" );
                     
  //                    }

  //                    $(".oeuvres").on({
  //               mouseenter: function () {
  //                  //$(this).addClass("hover");
  //                  $( this ).children(".oeuvres_detail").addClass( "visible" );
  //               },
  //               mouseleave:function () {
  //                  //$(this).removeClass("hover");
  //                  $( this ).children(".oeuvres_detail").removeClass( "visible" );
  //               }
  //           });
  //           }, 5000);
              
  //           //   $('.oeuvres').hover(function(e){
  //           //    e.preventDefault();
  //           //    $( this ).children(".oeuvres_detail").toggleClass( "visible" );
  //           // });

             

            
  //           return true;
  //       },
  //       // Uncomment to enable infinite scroll
  //       //pagesToScroll : 5,
  //       triggerFromBottom:'5%',
  //       loader:'<div class="loader"></div>',
  //       pagesToScroll:120,
  //       targetElement:$('#largeData'),
  //       debug:true

  //   });

  //   // $( ".oeuvres" ).on( "mouseenter", function(e) {
  //   //    e.preventDefault();
  //   //    $( this ).children(".oeuvres_detail").toggleClass( "visible" );
  //   //    //alert("message");
  //   // });

  
  // </script>


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
	</div>
    </body>
</html>