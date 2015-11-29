<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/stylee.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/datepicker.css" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
         <link href="css/bootstrap.min.css" rel="stylesheet">
         
        

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]--> 
        <title>Vos artistes</title>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/nice_select.js"></script>
        <link href="css/nice_select.css" rel="stylesheet">

    <script type="text/javascript" > $('document').ready(function(){ $('.change').niceselect(); }) </script>
   
   
    </head>

    <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
        <div id="bloc_page">
            <header>
                   <div id="header_top">
                   

                     <div id="logo">
                        <img src="images/logo.png">
                     </div>
                     
                      <div id="header_left">
                      <div id="lang">
                        <div class="btn-group">
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                              fr
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="#">fr</a></li>
                              <li><a href="#">en</a></li>
                            </ul>
                          </div>
                        </div>
                      </div> 
                      <div id="newsletter">
                      <form class="newsletterform" action="#">
                      <input type="text" placeholder="newsletter">
                      <button class="btn btn-default" type="submit"><i class="fa fa-check"></i></button>
                      </form> </div>


                       <nav>
                            <div id='cssmenu'>
                            <ul>
                               <li class='active'><a href='#'><span>Accueil</span></a></li>
                               <li><a href='artistes.html'><span>Artistes</span></a></li>
                               <li><a href='oeuvres.html'><span>Oeuvres</span></a></li>
                               <li><a href='evenments.html'><span>Actualités & Evénements</span></a></li>
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
                       <!-- <img src="images/search.png"> -->
                      <form class="searchform" id="aaa" action="#">
                      <input style="width:454px;" type="text" placeholder=" Artiste, Evènement, Œuvre...">
                      
                     
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                      </form>

                      <!-- <img src="images/search.png"> -->
                       <form class="searchform" action="#" id="bbb" style="display:none">
                      <input style="width:226px;" type="text" placeholder=" Artiste, Œuvre"><span>|</span>
                      


                      <select class="select" style="width:125px;">
                          <option>Type D’oeuvre</option>
                          <option value="Sculptures">Sculptures</option>
                          <option value="Photographies">Photographies</option>
                          <option value="Bijoux">Bijoux</option>
                          <option value="Livres">Livres</option>
                          <option value="Objets de décoration">Objets de décoration</option>
                          <option value="Caftans">Caftans</option>
                          <option value="Meubles">Meubles</option>
                          <option value="Tapis">Tapis</option>
                      </select>
                      <span>|</span>

                      <select class="select" style="width:75px;">
                          <option>Style</option>
                          <option>Moderne</option>
                          <option>Figuratif</option>
                          <option>Abstrait</option>
                          <option>Naif</option>
                      </select>

                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                      </form>

                      <!-- <img src="images/search.png"> -->
                       <form class="searchform" action="#" id="ccc">
                      <input type="text" placeholder="Evénement" style="width:120px;"><span>|</span>
                      
                      <select class="select" style="width:130px;">

                          <option>Type D’événement</option>
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
                    
                     <div id="search_av"><span id="sva">Chercher avancée</span> 
                       
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
                       
                       <span><a href='#'><img src="images/twitter.png"></a></span>
                       <span><a href='#'><img src="images/google.png"></a></span>
                       <span><span><a href='#'><img src="images/facebook.png"></a></span></span>
                       
                     </div>
                      <br>
                   </div> 
            </header>
            <section id="restart">
   

           </section>
          



          
            
           
            <footer>
                
                <div id="fmobil">
                  <div class="liste no">
                          <ul>
                              <li><i class="fa fa-phone"></i><a href="#"> +212.6.60.15.94.94</a></li>
                              <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                              <li><i class="fa fa-fax"></i><a href="#"> +212.5.22.94.24.13</a></li>
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
                                      <li><a href="#">Comment exposer</a></li>
                                      <li><a href="#">Qui sommes nous</a></li>
                              <li><a href="#">Conditions Générales de Vente</a></li>
                                      
                                  </ul>
                        </div>
                      </div>
                      
                      <div class="col-lg-2">
                        <div class="liste">
                          <ul>
                              <li><a href="#">Mentions légales</a></li>
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
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-rss"></i></a>
                  </div>
                  

                </div>

               
                
            </footer>

        </div>

         <div class="xxx">
            
            <header class="header">
              <div id="n"><a href="#" class="slideout-menu-toggle"><i class="fa fa-bars"></i> </a></div>

              <div class="slideout-menu" id="slideout-bleu">
               <ul>
                <li><a href="index.html"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href="artistes.html"><i class="fa fa-paint-brush"></i> Artistes</a></li>
                <li><a href="oeuvres.html"><i class="fa fa-picture-o"></i> Oeuvres</a></li>
                <li><a href="evenments.html"><i class="fa fa-calendar"></i> Actualités & Evénements</a></li>
                <li><a href="#"><i class="fa fa-users"></i> Espace Membres</a></li>
                <li><a href="contact.php"><i class="fa fa-user"></i> Contact</a></li>
                <li class="def slideout-bleu">Social Media</li>
                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                <li class="def slideout-bleu">Newsletter</li>
                
              </ul>
              <div style="margin: 10px;">
                <h4>Email Newsletters</h4>
                  <p>Abonnez-vous à recevoir l'inspiration, des idées et nouvelles dans votre boîte de réception.</p>

                  <form>
                    <input type="text" placeholder="newsletter">
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
                    <span><a href='#'><img src="images/twitter3.png"></a></span>
                    <span><a href='#'><img src="images/google2.png"></a></span>
                    <span><a href='https://www.facebook.com/vosartistes?fref=ts'>
                    <img src="images/facebook1.png"></a></span>
                  </div>
                  
                  <div class="right-social">
                    <span><a href='#' style="display: block;margin: -5px;"><img src="images/like.png"></a></span>
                  </div> 
                  
                 </div>
                </section>
                <br>

                

                <section class="sec_article" style="max-height:500px;">
                <div id="ra" class="racolorbleu" style="top:129px;">

                  <div class="searchmob">
                  
                     <table  style="margin: 0 auto; width:90%; text-align: right; color:#37848f;">
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
                          <option>Type D’oeuvre</option>
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
                          <option>Naif</option>
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
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="images/slider/minislide1.jpg" height="300" width="100%">
                        <div class="citation">
                          <div class="button">
                              <a href="#">...</a>
                          </div>

                          <div class="rbutton">
                              <a href="#">...</a>
                          </div>

                          <div class="citation_detail">
                              <span>Lonely Oak Tree</span>
                          <p>
                            Pour répondre au critère de l'univocité que garantit, dans le domaine de la scientificité d'une science 
                          </p>
                          </div>
                        </div>
                    </div>
                    <div class="item">
                      <img src="images/slider/minislide2.jpg" height="300" width="100%">
                        <div class="citation">
                          <div class="button">
                              <a href="#">...</a>
                          </div>

                          <div class="rbutton">
                              <a href="#">...</a>
                          </div>

                          <div class="citation_detail">
                              <span>Lonely Oak Tree</span>
                          <p>
                            Pour répondre au critère de l'univocité que garantit, dans le domaine de la scientificité d'une science 
                          </p>
                          </div>
                        </div>
                    </div>
                    <div class="item">
                      <img src="images/slider/minislide3.jpg" height="300" width="100%">
                        <div class="citation">
                          <div class="button">
                              <a href="#">...</a>
                          </div>

                          <div class="rbutton">
                              <a href="#">...</a>
                          </div>

                          <div class="citation_detail">
                              <span>Lonely Oak Tree</span>
                          <p>
                            Pour répondre au critère de l'univocité que garantit, dans le domaine de la scientificité d'une science 
                          </p>
                          </div>
                        </div>
                    </div>
                  
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
              
              <div class="round" style="background:#c7447a"><a class="textdeco" href="artistes.html">Artistes vedettes</a>
                <span class="f"><a class="textdeco" href="artistes.html"><i class="fa fa-angle-right"></i></a></span>
              </div>
              <div class="round" style="background:#758f6c"><a class="textdeco" href="oeuvres.html">Oeuvre d’exception</a>
                <span class="f"><a class="textdeco" href="oeuvre.html"><i class="fa fa-angle-right"></i></a></span>
              </div>
              <div class="round" style="background:#37848f"><a  class="textdeco" href="evenments.html">Evénements & News</a>
              <span class="f"><a class="textdeco" href="evenment.html"><i class="fa fa-angle-right"></i></a></span>
              </div>

            <br>

            </section>

                <section class="footer" style="background:#37848f">
                <div id="fmobil" style="background:#37848f">
                  <div class="liste no">
                      <ul>
                          <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                          <li><i class="fa fa-phone"></i><a href="#"> +212.6.60.15.94.94</a></li>
                          <li><i class="fa fa-fax"></i><a href="#"> +212.5.22.94.24.13</a></li>
                      </ul>
                  </div>


                  <div class="bottom_right">
                    
                    <div class="ftr">
                      <i><img src="img/logoeco.png"></i>
                      <i class="fa fa-facebook"></i>
                      <i class="fa fa-twitter"></i>
                      <i class="fa fa-rss"></i>
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
    </body>
</html>