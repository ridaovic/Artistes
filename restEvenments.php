<?php
include('search.php');
include('searchevent.php'); 

//if (isset($_POST["TypeEvent"])){$typeEvent=$_POST["TypeEvent"]; } else {$typeEvent=""; }

if (isset($_POST["Du"])){$du=$_POST["Du"]; } else {$du=""; }

if (isset($_POST["Au"])){$au=$_POST["Au"]; } else {$au=""; }

if (isset($_POST["Ville"])){$ville=$_POST["Ville"]; } else {$ville=""; }

if (isset($_POST["nomEvent"])){$nomEvent=$_POST["nomEvent"]; } else {$nomEvent=""; }

if (isset($_POST["nomArtiste"])){$nomArtiste=$_POST["nomArtiste"]; } else {$nomArtiste=""; }

if (isset($_POST["typeEvent"])){$typeEvent=$_POST["typeEvent"]; } else {$typeEvent=""; }


//$nomArtiste="chahid";
//$nomEvent="Vernissage de l'artiste Nawal SEKKAT";
//$ville="Galerie Bab Rouah";

              $events = requete_event('{"query":{"bool":{"must":[],"must_not":[],"should":[
										{"query_string":{"default_field":"title","query":"'.$nomEvent.'"}},
										{"query_string":{"default_field":"title","query":"'.$typeEvent.'"}},
										{"query_string":{"default_field":"body","query":"'.$nomArtiste.'"}},
										{"query_string":{"default_field":"ville","query":"'.$ville.'"}},
										{"range":{"pubDate":{"from":"'.$du.'","to":"'.$au.'"}}}]}},
										"from":0,"size":8,"sort":[],"facets":{}}');

              for($i = 0; $i < totale_event($events,$i);$i++){

                $imag_event = images_event($events,$i);
                
                $p = pubDate_event_s($events,$i);
                
                echo '<div class="evenments">';
                echo '<div id="effect-6" class="effects clearfix"><div class="img">';
                 echo '<img src="'.$imag_event[count($imag_event)-1].'" width="610" >';
                 echo '<h1>'.titre_event($events,$i).'</h1>';
                 echo '<span>'.place_event($events,$i).'</span>';
                 //echo '<span>Accée : Gratuit</span>';
                 echo '<div class="overlay">';
                    echo '<a href="evenment.php?event='.titre_event($events,$i).'&du='.$p[0].'&au='.$p[1].'" class="expand"><i class="fa fa-plus"></i></a>';
                   echo ' <a class="close-overlay hidden">x</a>';
                echo '</div><br>';
                  
                    echo '</div>';
                  echo '</div>';
              echo '</div>';
              }
    




?>