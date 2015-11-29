<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />

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
		<link rel="alternate" href="http://www.vosartistes.com/node/1">
        <script src="js/jquery.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/autocomplete_ar.js"></script>
        <script src="js/autocomplete_ar2index.js"></script>
        <script src="js/autocomplete_art_oeuvre.js"></script>
        <script src="js/autocomplete_all.js"></script>
        <script src="js/autocomplete_event.js"></script>
        <script src="js/autocomplete_oeuvre.js"></script>
       
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

    <script type="text/javascript" > $('document').ready(function(){ $('.change').niceselect(); }) </script>
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

        <?php include('search.php'); include('searchevent.php'); include('searchartiste.php');
              $artved = requete_artiste('{"query":{"bool":{"must":[],"must_not":[{"constant_score":{"filter":{"missing":{"field":"artist.oeuvres"}}}},{"constant_score":{"filter":{"missing":{"field":"artist.title"}}}}],"should":[{"match_all":{}}]}},"from":0,"size":3,"sort":[],"facets":{}}');
              $oeuvretend = requete_nouveautes('{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5,"sort":[{"lastModified":{"order":"asc"}},{"executionTime":{"order":"desc"}}],"facets":{}}');
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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
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
                               <li class='active'><a href='#'><span>Accueil</span></a></li>
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
                       <span><div class="fb-like" data-href="https://www.facebook.com/vosartistes" data-width="65" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></span>
                     </div>
                      <br>
                   </div> 
            </header>
            <section id="restart">

            <section class="sec_article" style="height:500px;">
              <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div id="alaune"><img src="images/alaune.png"></div>
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <?php               
      $event = requete_event('{"query":{"bool":{"must":[],"must_not":[],"should":[{"query_string":{"default_field":"event.title","query":"vernissage"}},{"query_string":{"default_field":"event.body","query":"Chahid"}},{"query_string":{"default_field":"event.place","query":"Rabat"}},{"range":{"event.pubDate":{"from":"11/05/2015","to":"15/05/2015"}}}]}},"from":0,"size":10,"sort":[],"facets":{}}');
      $classact = array(' class="active"','');
      for($i=0;$i<totale($event);$i++){ 
        echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"'.$classact[$i].'></li>';
      }

      ?>

      </ol>
      <div class="carousel-inner" role="listbox">
       <?php 
              $items = array(' active','');
              $alts = array('First','Second','Third','fourth','fifth','sixth','seventh','eighth','ninth','tenth');
              for($i=0;$i<totale($event);$i++){       
              echo '<div class="item'.$items[$i].'" style="width:960px !important;height:387px !important;">';
          
                          $imgs_event = images_event($event,$i);
                          $p = pubDate_event_s($event,$i);
                echo'<img src='.$imgs_event[count($imgs_event)-1].'   alt="'.$alts[$i].' slide" style="width:960px !important;height:387px !important;">';
                          
                    
          
            echo'<div class="carousel-caption">';
            echo'<div class="citation">';
                        echo'<div class="button">';
                            echo'<a href="evenment.php?event='.titre_event($event,$i).'&du='.$p[0].'&au='.$p[1].'"> En savoir plus . . .</a>';
                        echo'</div>';

                        echo'<div class="rbutton">';
                            echo'<a href="oeuvre.php">...</a>';
                        echo'</div>';
                        echo'<div class="citation_detail">';
                            echo '<span>'.titre_event($event,$i).'</span>'; 
                        echo'<p>';
                          echo strip_tags(morcseau_event(body_event($event,$i)));
                        echo'</p>';
                        echo'</div>';
                      
                      
              echo'</div>';
              
            echo'</div>';
          
            echo'</div>';
        }
        ?>
        
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
            </section>
            
            <section class="sec_article">
              <br>
              
                <div class="article">
                
                    <div class="deeppink"><a href="artistes.php"><span style="color:#fff;">Artistes Vedettes</span></a></div>
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
                    <div class="sub_deeppink"><a href="contact.php?q=artiste"><span style="color:#fff;">Ajouter un Artiste</span></a></div><br>

                </div><div class="sep"></div>

              
                <div class="article">
                
                    <div class="seagreen"><a href="oeuvres_recentes.php"><span style="color:#fff;">Nouveautés</span></a></div>

                   <div id="myCarouselMini" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#myCarouselMini" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarouselMini" data-slide-to="1"></li>
					    <li data-target="#myCarouselMini" data-slide-to="2"></li>
					    <li data-target="#myCarouselMini" data-slide-to="3"></li>
					    <li data-target="#myCarouselMini" data-slide-to="4"></li>
					  </ol>
					
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox" style="height: 370px;width:295px;">
					  <?php
                    for($i=0;$i<5;$i++){
					  $class="";
				
                      $imgs_tend = images($oeuvretend,$i);
                      $p = pubData($oeuvretend,$i);
                      $title = body_title($oeuvretend,$i);
                      
                      if($i==0){
                      	$class="active";
                      }
                      echo'<div class="item '.$class.'">';
                        echo'<a href="oeuvre.php?artiste='.$p[0].'&oeuvre='.ID($oeuvretend,$i).'&type='.Type($oeuvretend,$i).'"><div class="oeuvre_detail"><strong>&ldquo;'.$p[0].'&rdquo;</strong><br>'.$title.'</div><br/><img src="'.$imgs_tend[count($imgs_tend)-1].'" width="295"/></a>';
                          
                      echo'</div>';
                     
                    }
                      ?>
					  </div>
					
					</div>
                    

                   


                    <div class="sub_seagreen"><a href="contact.php?q=oeuvre"><span style="color:#fff;">Ajouter une Oeuvre</span></a></div><br>
                    


                </div><div class="sep"></div>

              
                <div class="article">
                
                    <div class="teal"><span>Evénements & News</span></div><br>
                    <div style="height:370px">
                    <div class="evenment">
                    <?php $events = requete_event('{"query":{"bool":{"must":[],"must_not":[],"should":[
                                          {"range":{"event.pubDate":{"from":"'.date("d/m/y").'"}}}]}},
                                          "from":0,"size":1,"sort":[],"facets":{}}'); 
                                          $imag_event = images_event($events,0);
                                           $p_event = pubDate_event_s($events,0);
                    ?>
                    <?php echo '<a class="textdeco" href="evenment.php?event='.str_replace("/","",titre_event($events,0)).'&du='.$p_event[0].'&au='.$p_event[1].'">'; ?>
                    <span class="evenment_titre"><?php echo titre_event($events,0); ?></span><br><br>

                    <div class="evenment_img"><?php echo '<img src='.$imag_event[count($imag_event)-1].''; ?>></div><br><br>

                    <p><?php if($p_event[0]!=""){echo "Du ".$p_event[0]; }?> <?php if($p_event[1]!=""){echo "Du ".$p_event[1]; }?>.<br>Lieu : <?php echo place_event($events,0);?>.</p>

                    <!--div class="acces">Accès : <span>Gratuit.</span></div><div class="evenment_plus">+</div-->
					<?php echo "</a>"; ?>
                    </div>
                    </div>
                    <div class="sub_teal"><a href="contact.php?q=event"><span style="color:#fff;">Ajouter un Evénement</span></a></div><br>

                </div>

              <br>
              <br>
            </section>

            <section id="desc">
   
            <br>
              <span><img src="images/left_blockquote.png"></span>
              <p>« La peinture, c'est très facile quand vous ne savez pas comment faire. Quand vous le savez, c'est très difficile. »  Edgar Degas (1834-1917)</p>  
              <span class="right"><img src="images/right_blockquote.png"></span>


            <br>

             
            </section>


            <section id="special">
            <br>
              
              <div class="round">Artistes vedettes
                <span class="f"><i class="fa fa-angle-right"></i></span>
              </div>
              <div class="round">Nouveautés
                <span class="f"><i class="fa fa-angle-right"></i></span>
              </div>
              <div class="round">Evénements & News
              <span class="f"><i class="fa fa-angle-right"></i></span>
              </div>

            <br>

            </section>
            </section>
            
            
           
            <footer>
                
                <div id="fmobil">
                  <div class="liste no">
                          <ul>
                              <li><i class="fa fa-phone"></i><a href="tel:+212.6.60.15.94.94"> +212.6.60.15.94.94</a></li>
                              <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                              <li><i class="fa fa-fax"></i><a href="tel:+212.5.22.94.24.13"> +212.5.22.94.24.13</a></li>
                          </ul>
                  </div>


                  <div class="bottom_right">
                    
                    <div class="ftr">
                    <span><img src="images/facebook-footer.png"></span>
                    <span><img src="images/twitter-footer.png"></span>
                    <span><img src="images/rss-footer.png"></span>
                    </div>
                    
                    
                    <div>Copyright @2014</div>
                  

                  </div>


                </div>

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
                <li class="def slideout-bleu">Social Media</li>
                <li><a href="https://www.facebook.com/vosartistes"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="https://twitter.com/Vosartistes"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="vosartistes.com@gmail.com"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                <li class="def slideout-bleu">Newsletter</li>
                
              </ul>
              <div style="margin: 10px;">
                <h4>Email Newsletters</h4>
                  <p>Abonnez-vous à recevoir l'inspiration, des idées et nouvelles dans votre boîte de réception.</p>

                  <form>
                    <input type="text" placeholder="Newsletter">
                    <span class="nbutton slideout-bleu">Souscrire</span>
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
                <br>

                
                <section class="sec_article" style="max-height:500px;">
                <div id="ra" class="racolorbleu" style="top:129px;">

                  <div class="searchmob">
                  

                     <table  style="margin: 0 auto; width:90%; text-align: right; color:#01648B;font-weight:bold;margin-left:0 0 0 2px;">
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
                          <option>Type d’oeuvre</option>
                          <option value="Sculptures">Sculptures</option>
                          <option value="Photographies">Photographies</option>
                          <option value="Bijoux">Bijoux</option>
                          <option value="Livres">Livres</option>
                          <option value="Objets de décoration">Objets de décoration</option>
                          <option value="Caftans">Caftans</option>
                          <option value="Meubles">Meubles</option>
                          <option value="Tapis">Tapis</option>
                          <option value="Tableaux">Tableaux</option>
                      </select><br><br>
                      <select>
                         <option>Style</option>
                          <option>Moderne</option>
                          <option>Figuratif</option>
                          <option>Abstrait</option>
                          <option value="naif">Naif/Primitif</option>
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




                 <div id="carousel-a" class="carousel slide carousel-sync peloton" data-ride="carousel" data-pause="false" >
                  <div class="carousel-inner-responsive">


       <?php 
              
              for($i=0;$i<totale($event);$i++){       
               echo'<div class="item'.$items[$i].'">';
                      echo'<img src="'.$imgs_event[count($imgs_event)-1].'" height="300" width="100%">';
                        echo'<div class="citation">';
                          echo'<div class="button">';
                              echo'<a href="#">...</a>';
                          echo'</div>';

                          echo'<div class="rbutton">';
                              echo'<a href="#">...</a>';
                          echo'</div>';

                          echo'<div class="citation_detail">';
                              echo'<span>'.titre_event($event,$i).'</span>';
                          echo'<p>';
                            echo morcseau_event(body_event($event,$i));
                          echo'</p>';
                          echo'</div>';
                        echo'</div>';
                    echo'</div>';
        }
        ?>            


                  </div>
                    
                    
                    

                  <a class="left carousel-control" href="#carousel-a" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-a" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                
              </div>
                </section>

                 <section id="special">
            <br>
              
              <div class="round" style="background:#8A1527"><a class="textdeco" href="artistes.php">Artistes vedettes</a>
                <span class="f"><a class="textdeco" href="artistes.php"><i class="fa fa-angle-right"></i></a></span>
              </div>
              <div class="round" style="background:#01648B"><a class="textdeco" href="oeuvres.php">Nouveautés</a>
                <span class="f"><a class="textdeco" href="oeuvres.php"><i class="fa fa-angle-right"></i></a></span>
              </div>
              <div class="round" style="background:#299D8B"><a  class="textdeco" href="evenments.php">Evénements & News</a>
              <span class="f"><a class="textdeco" href="evenments.php"><i class="fa fa-angle-right"></i></a></span>
              </div>

            <br>

            </section>

                <section class="footer" style="background:#01648B">
                <div id="fmobil" style="background:#01648B">
                  <div class="liste no">
                      <ul>
                          <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                          <li><i class="fa fa-phone"></i><a href="tel:+212.6.60.15.94.94"> +212.6.60.15.94.94</a></li>
                          <li><i class="fa fa-fax"></i><a href="tel:+212.5.22.94.24.13"> +212.5.22.94.24.13</a></li>
                      </ul>
                  </div>


                  <div class="bottom_right">
                    
                    <div class="ftr">
                      <i><img src="img/logoeco.png"></i>
                     <a style="color:#fff" href="https://www.facebook.com/vosartistes"> <i class="fa fa-facebook"></i></a>
                      <a style="color:#fff" href="https://twitter.com/Vosartistes"> <i class="fa fa-twitter"></i></a>
                      <a style="color:#fff" href="http://www.vosartistes.com/rss.xml"> <i class="fa fa-rss"></i></a>
                    </div><br>
                    
                    
                    <div>Copyright @2014</div>
                  

                  </div>

<br>
                </div></section>

                   
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