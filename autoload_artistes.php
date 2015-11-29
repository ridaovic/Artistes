<?php
include('search.php'); 
include('searchartiste.php');

if($_POST)
{
	//sanitize post value
	$group_number = filter_var($_POST["group_no"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	
	//throw HTTP error if group number is not valid
	if(!is_numeric($group_number)){
		header('HTTP/1.1 500 Invalid number!');
		exit();
	}
	
	//get current starting point of records
	$items_per_group = 2;
	$position = ($group_number * $items_per_group);





    $result = requete_artiste('{"query":{"bool":{"must":[],"must_not":[],"should":[{"query_string":{"default_field":"artist.title","query":""}},{"query_string":{"default_field":"artist.body","query":"Figuratif"}}]}},"from":'.$position.',"size":'.$items_per_group.',"sort":[],"facets":{}}');

                  for($i=0; $i<2 ; $i++ ){
                    $p = titre_artiste($result,$i);
                    $idoev = ouevres_artiste($result,$i);
                    $oeuvre_artiste = requete_oeuvre_artiste($idoev[1]);
                    $imgs = images_oeuvre($oeuvre_artiste);

                    
                  echo '<div class="tableaux">';
                   echo '<img width=164px height=138px src='.$imgs[count($imgs)-1].'>';
                   echo '<div class="caracter">';
                     echo '<span >Moderne</span>';
                     echo '<span>Figuratif</span>';
                     echo '<span>Abstrait</span>';
                     echo '<span>Naif</span>';
                    echo '</div>';
                      echo '<div class="tableaux_detail">';
                         echo '<span class="tableaux_titre">'.$p.'</span><br>';
                         echo '<span class="tableaux_nombre">'.(count($idoev)-1).' oeuvres publiées </span>';
                      echo '</div>';
                      echo '<span class="tableaux_servol"><a href="artiste.php?artiste='.$p.'"><img src="images/survol.png"></a> </span>';
                   echo '</div>';
                }

}
?>
