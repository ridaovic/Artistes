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
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet" />
       
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="js/jquery-1.9.0.min.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/nice_select.js"></script>
        <script src="js/app.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/autocomplete_ar.js"></script>
        <script src="js/autocomplete_ar2.js"></script>
        <script src="js/autocomplete_art_oeuvre.js"></script>
		<script src="js/autocomplete_event.js"></script>
        <script src="js/autocomplete_all.js"></script>
        <script src="js/autocomplete_oeuvre.js"></script>
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
		
        

        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
         
        <!-- End WOWSlider.com HEAD section -->

        


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
			.fb-like{
width: 86px !important;
overflow: hidden;
height: 16px !important;
margin: 5px 0px 0px 0px !important;
padding: 0px;
float: right;
display: block !important;
}

.fb_reset{
display: inline !important;
}

#___plusone_0{
	width:69px !important;
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
	
	<script type="text/javascript" src="js/jquery-paged-scroll.js"></script>
    <script type="text/javascript" > $('document').ready(function(){ $('.change').niceselect(); }) </script>
	<?php include('search.php'); include('searchartiste.php'); include('searchevent.php'); 
              $id = $_GET["oeuvre"];
              $oeuvre = requete_oeuvre_new($id,$_GET["type"]);
              $imgs = images_oeuvre($oeuvre);
              $artved = requete_artiste('{"query":{"bool":{"must":[],"must_not":[{"constant_score":{"filter":{"missing":{"field":"artist.oeuvres"}}}},{"constant_score":{"filter":{"missing":{"field":"artist.title"}}}}],"should":[{"match_all":{}}]}},"from":0,"size":3,"sort":[],"facets":{}}');
              
        ?>
    <link rel="canonical" href="<?php echo url_social($oeuvre)?>" />
	<title><?php echo meta_title($oeuvre)?></title>
	<meta name="description" content="<?php echo meta_oeuvre($oeuvre)?>">
	<link rel="shortcut icon" href="../sites/all/themes/exupery/favicon.png" type="image/x-icon">

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
        <!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <!-- use jssor.slider.mini.js (40KB) instead for release -->
        <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
        <script type="text/javascript" src="js/jssor.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
    
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
                //Fade Twins
                { $Duration: 700, $Opacity: 2, $Brother: { $Duration: 1000, $Opacity: 2 } },
                //Rotate Overlap
                { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Brother: { $Duration: 1200, $Zoom: 1, $Rotate: 1, $Easing: $JssorEasing$.$EaseSwing, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Shift: 90 } },
                //Switch
                { $Duration: 1400, x: 0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1400, x: -0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10 } },
                //Rotate Relay
                { $Duration: 1200, $Zoom: 11, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Brother: { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Shift: 600 } },
                //Doors
                { $Duration: 1500, x: 0.5, $Cols: 2, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2, $Brother: { $Duration: 1500, $Opacity: 2 } },
                //Rotate in+ out-
                { $Duration: 1500, x: -0.3, y: 0.5, $Zoom: 1, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4], $Zoom: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 11, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Fly Twins
                { $Duration: 1500, x: 0.3, $During: { $Left: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true, $Brother: { $Duration: 1000, x: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Rotate in- out+
                { $Duration: 1500, $Zoom: 11, $Rotate: 0.5, $During: { $Left: [0.4, 0.6], $Top: [0.4, 0.6], $Rotate: [0.4, 0.6], $Zoom: [0.4, 0.6] }, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 1, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Rotate Axis up overlap
                { $Duration: 1200, x: 0.25, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1200, x: -0.1, y: -0.7, $Rotate: 0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Chess Replace TB
                { $Duration: 1600, x: 1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, x: -1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Chess Replace LR
                { $Duration: 1600, y: -1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, y: 1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift TB
                { $Duration: 1200, y: 1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift LR
                { $Duration: 1200, x: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, x: -1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Return TB
                { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Return LR
                { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Rotate Axis down
                { $Duration: 1500, x: -0.1, y: -0.7, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, x: 0.2, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Extrude Replace
                { $Duration: 1600, x: -0.2, $Delay: 40, $Cols: 12, $During: { $Left: [0.4, 0.6] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 }, $Brother: { $Duration: 1000, x: 0.2, $Delay: 40, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 1028, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Round: { $Top: 0.5 } } }
            ];


            var options = {
                $FillMode: 1,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 2500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                  //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 640));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

        <div id="bloc_page">
        	<a href="<?php echo url_social($oeuvre)?>" style="cursor:pointer;"><div id="backtov1">Retourner à la version originale</div></a>
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
                                  <option value="naif">Naif/Primitif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          <!-- Artistes -->
                         <form class="searchform" action="#" id="eee" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Artiste"  id="tags"><span>|</span>



                              <select class="select" style="width:125px;">
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

                              <select class="select" style="width:75px;" >
                                  <option value="">Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option value="naif">Naif/Primitif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>

                          <!-- Oeuvres -->

                        <form class="searchform" action="#" id="fff" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Œuvre"  id="search_o"><span>|</span>



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

                              <select id="style2" class="select" style="width:75px;" >
                                  <option value="">Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option value="naif">Naif/Primitif</option>
                              </select>

                              <button  class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
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
                  <div id="search_titre" style="background-color:#01648B;">Personnalisez votre recherche</div>
                   <div id="search_form">
                    <form name="FormAll">
                      <label> Artiste :</label><br><input type="text" id="tags1" ><br>
                        <a class="js-open-modal" href="#" data-modal-id="popup1"  style="color:#01648b;display: block; float: right; margin:0px 10px;font-size: 11px;"> Liste des Artistes</a>
                              
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
                                              <option value="decoration">Objets de décoration</option>
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
                       <label>Format: </label><br>
                       <select class="select1" id="Format">
                       <option></option>
                         <option>Petit(< 50 cm) </option>
                        <option>Moyen(< 100 cm) </option>
                        <option>Grand(< 150 cm) </option>
                        <option>Trés Grand(> 150 cm) </option>
                      </select> <br>
                      </div>  
                    </form>
                  </div>
                 </div>
                 
               <br><br>
                  <div id="btn_suggestions" class="btn_suggestions" style="cursor:pointer;background-color:#01648B;"><a href="">Suggestions de "Vos Artistes"</a></div>
                 
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

             <div style="float: right; margin-right: 20px;">
                    <span><a href="#sui"><img src="images/sui.png"></a></span>
              </div>
            

              <div style="float: left; margin-left: -3px;">
                     <span><a href="#pre"><img src="images/pre.png"></a></span>
              </div>
     
              <div id="h1-id" align="center"><h1><?php echo body_title_oeuvre($oeuvre); ?></h1> </div>
                
                 <div id="even_img">
                 
                   <?php 
                          // echo'<img src='.$imgs[count($imgs)-1].' width="630"><br>'; ?>




                    <!-- Start WOWSlider.com BODY section -->
                     
                   
                    <!-- End WOWSlider.com BODY section -->
                    

                    <!-- ****************************************   -->

                  <div id="slider1_container" style="position: relative; width: 639px; height: 500px; background-color: #000; overflow: hidden; ">

                          <!-- Loading Screen -->
                          <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                              <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                  background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                              </div>
                              <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                                  top: 0px; left: 0px;width: 100%;height:100%;">
                              </div>
                          </div>

                          <!-- Slides Container -->
                          <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 640px; height: 500px;
                              overflow: hidden;">
                            
                            <?php
                               $img_normal = images_normal_oeuvre($oeuvre);
                                echo '<div>';
                                 echo '<a u=image href="#"><img src='.$img_normal[count($img_normal)-1].' /></a>';
                              echo '</div>';
                             
                            ?>

                          </div>

                           <!--#region Bullet Navigator Skin Begin -->
                          <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                          <style>
                              /* jssor slider bullet navigator skin 13 css */
                              /*
                              .jssorb13 div           (normal)
                              .jssorb13 div:hover     (normal mouseover)
                              .jssorb13 .av           (active)
                              .jssorb13 .av:hover     (active mouseover)
                              .jssorb13 .dn           (mousedown)
                              */
                              .jssorb13 {
                                  position: absolute;
                              }
                              .jssorb13 div, .jssorb13 div:hover, .jssorb13 .av {
                                  position: absolute;
                                  /* size of bullet elment */
                                  width: 21px;
                                  height: 21px;
                                  background: url(img/b13.png) no-repeat;
                                  overflow: hidden;
                                  cursor: pointer;
                              }
                              .jssorb13 div { background-position: -5px -5px; }
                              .jssorb13 div:hover, .jssorb13 .av:hover { background-position: -35px -5px; }
                              .jssorb13 .av { background-position: -65px -5px; }
                              .jssorb13 .dn, .jssorb13 .dn:hover { background-position: -95px -5px; }
                          </style>
                          <!-- bullet navigator container -->
                          <div u="navigator" class="jssorb13" style="bottom: 16px; right: 6px;">
                              <!-- bullet navigator item prototype -->
                              <div u="prototype"></div>
                          </div>
                          <!--#endregion Bullet Navigator Skin End -->
                          <a style="display: none" href="http://www.jssor.com">slider in html</a>
                      </div>


                    <!-- ***************************************** -->
                   
                     <div class="sub_teal left" style="margin: 40px 0 0; width:180px;"><span><a href="contact.php?q=mer" style="color:#FFF;">Mise en Relation ? <img src="images/hund.png"></a></span></div>
                   
                   <div class="right" style="width:200px;text-align:right;position: relative;top: 30px;">
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
                <?php $p = pubData_oeuvre($oeuvre);
                    if($p[0] != '') echo 'Artiste : <span><a href="artiste.php?artiste='.$p[0].'">'.$p[0].'</a></span><br>';
                    if($p[1] != '') echo 'Matériaux : <span>'.$p[1].'</span><br>';
                    if($p[2] != '') echo 'Support : <span>'.$p[2].'</span><br>';
                    $format=explode(" -- ",$p[3]);
                    if($p[3] != '') echo 'Format : <span>'.$format[0].'</span><br>';
                    if($p[4] != '') echo 'Style : <span>'.$p[4].'</span><br>';
                    if($p[5] != '') echo 'Année d\'exécution : <span>'.$p[5].'</span><br>';
                    $prix=explode(" -- ",$p[6]);
                    if($p[6] != '') echo 'Prix : <span>'.$prix[0].'</span><br>';
                    if($p[7] != '') echo 'Conversion : <span>'.$p[7].'</span><br>';
                    if($p[8] != '') echo 'Référence : <span>'.$p[8].'</span><br>';
                    ?>
                </div>
                
                <div id="description">
                  <h1>Description : </h1>
                  <?php $disc = body_div_oeuvre1($oeuvre);
                        echo morcseau_oueuvre($disc);
                  ?>
                  <br>
                  <a href="#" class="cd-popup-trigger right">Lire la suite</a>
                  
                  <div class="cd-popup" role="alert">
                    <div class="cd-popup-container">

                      <?php if($disc != '') echo body_div_oeuvre($oeuvre); 
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
                               $img_normal = images_normal_oeuvre($oeuvre);
                              for($i=0;$i<(count($img_normal)-1);$i++){
                               echo'<div><h3><a href='.$img_normal[$i].' class="zoombox zgallery1" title="oeuvre.php?artiste='.$p[0].'&oeuvre='.$id.'&type='.$_GET["type"].'+'.$p[8].'" ><img src='.$img_normal[$i].' ></a></h3></div>';
                          
                              }
                             
                            ?>
                      <?php 
                          $result = requete('{"query":{"bool":{"must":[{"query_string":{"default_field":"pubDate","query":"\"'.$_GET["artiste"].'\""}}],"must_not":[],"should":[]}},"sort":[],"facets":{}} ');
                          for($i=0; $i<$result['hits']['total'] ; $i++ ){
                            $imgs = images($result,$i);
                            $p = pubData($result,$i);
                            $aid = images_normal_oeuvre_aid($imgs[count($imgs)-1]);
                            //$aid = "http://www.vosartistes.com/sites/default/files/".after('http://www.vosartistes.com/sites/default/files/imagecache/tableau/',$imgs[count($imgs)-1]);
                            echo'<div style="width:130px;"><h3><a href='.$aid.' class="zoombox zgallery1" title="oeuvre.php?artiste='.$p[0].'&oeuvre='.ID($result,$i).'&type='.Type($result,$i).'+'.$p[8].'" ><img src='.$imgs[count($imgs)-1].' ></a></h3></div>';
                          }
                      ?>
                        
                      </div>
                  </div>
               
              </div>
               <div class="animation_image" style="display:none; position: relative; top: 30px; left: 160px;" align="center"><img src="ajax-loader.gif"></div>
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
            
                <header class="header" style="background:#01648B">
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
                <div id="ra" class="racolorvert ">

                  <div class="searchmob" >
                   
                     <table  style="margin: 0 auto; width:90%; text-align: right;">
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




                <div class="mini" >
                <?php $imgs = images_oeuvre($oeuvre); ?>
                    <img src=<?php echo $imgs[count($imgs)-1]; ?> class="peloton">
                    
                    <br><br>

                    <span class="minibtn green">Mise en Relation ? <img src="images/hund.png"></span>
                    
                    <br>
                    <div class="detail oeu">
                      <table style="width:100%; text-align: center;" >
                      <?php $p = pubData_oeuvre($oeuvre); ?>
                        <tr>
                          <td colspan="2"> <span>Artiste :</span>  <?php echo $p[0]; ?> </td>
                        </tr>
                        <tr>
                          <td colspan="2"><span>Année d'exécution :</span> <?php echo $p[5] ?> </td>
                        </tr>
                        <tr>
                          <td colspan="2"><span>Référence :</span> <?php echo $p[8] ?> </td>
                        </tr>
                        <tr>
                          <td colspan="1"><span>Matériaux :</span> <?php echo $p[1] ?> </td>
                          <td colspan=""><span>Support :</span>  <?php echo $p[2] ?> </td>
                        <tr>
                          <td colspan="1"><span>Format :</span> <?php echo $p[3] ?> </td>
                          <td ><span>Prix :</span> <?php echo $p[6] ?> </td>
                        </tr>
                        <tr>
                          <td colspan="1"> <span>Conversion :</span> <?php echo $p[7] ?> </td>
                          <td><span>Style :</span>  <?php echo $p[4] ?> </td>

                          
                        </tr>

                      </table>


                    </div>

                  <div class="detail  oeu">
                    <h1>Description : </h1>
                    <p><?php $disc = body_div_oeuvre($oeuvre);
                        if(strlen($disc)>66){
                          if(strlen($disc)>=200) echo morcseau($disc).'</div>';
                          else echo morcseau($disc);
                        }
                  ?></p>
                    

                    <br>
                    <a href="#" class="right" style="color:#01648B">Lire la suite</a>
                    <br>
                  </div>
                <br>
                
                <span class="minibtn green" >Les Oeuvres Appréciées </span>

                </div>

                <br>
                <br>
                </section>

                 

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
    
<script type="text/javascript" src="js/app.js"></script>

<script src="js/bootstrap-datepicker.js"></script>
<?php
$total = 1000;
?>

<script type="text/javascript">




var scroll = false;

var selectTypeOeuvre;
var selectstyle;
var selectprix1;
var selectprix2;
var selectformat;
var nameart;


 
$(document).ready(function() {
  var track_load = 9; //total loaded record group(s)
  var loading  = false; //to prevents multipal ajax loads
  var total = <?php echo $total; ?>; //total record group(s)
  
  //$('#artist_right').load("autoload_oeuvres.php", {'group_no':track_load}, function() {track_load++;}); //load first group
  
  $(window).scroll(function() { //detect page scroll
    
    if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
    {
      
      if(track_load <= total && loading==false) //there's more data to load
      { 

        if(scroll == false) {
          
        }
        else { 
          loading = true; //prevent further ajax loading
        $('.animation_image').show(); //show loading image
        
        //load data from the server using a HTTP POST request
        $.post('autoload_oeuvres_search.php',{'group_no': track_load,
                  TypeOeuvre : selectTypeOeuvre,
                  style : selectstyle,
                  prix1 : selectprix1,
                  prix2 : selectprix2,
                  format : selectformat,
                  nameart : nameart

                   }, function(data){
                  
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
    }
  });
});





$(document).ready(function () {
 
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

    $(".select1").change(function(){
        scroll = true;
        selectTypeOeuvre = $("#SelTest option:selected").val();
        selectstyle = $("#style option:selected").val();
        selectprix1 = $("#prix1 option:selected").val();
        selectprix2 = $("#prix2 option:selected").val();
        selectformat = $("#Format option:selected").val(); 
        nameart = $("#tags").val();

        //alert(nameart);



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




//////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////
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
        
	</div>
    </body>
</html>