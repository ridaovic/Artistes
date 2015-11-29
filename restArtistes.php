<?php
include('search.php');

include('searchartiste.php');

$qu='';

if (isset($_POST["nameart"])) {
  $q=$_POST["nameart"];
  $qu.='{"query_string":{"default_field":"artist.title","query":"'.$q.'"}},';
}else{
   $q="";
}
if (isset($_POST["TypeOeuvre"])) {
  $b=$_POST["TypeOeuvre"];
  $qu.='{"query_string":{"default_field":"artist.body","query":"'.$b.'"}},';
  
}else{
   $b="";
 }
if (isset($_POST["style"])) {
 $c=$_POST["style"];
 $qu.='{"query_string":{"default_field":"artist.body","query":"'.$c.'"}},';
}else{
   $c="";
}




// {"query":{"bool":{"must":[],"must_not":[],"should":
// [{"query_string":{"default_field":"_all","query":"\"Artiste : '.$q.'\""}},
// {"query_string":{"default_field":"oeuvre.body","query":"'.$b.'"}},
// {"query_string":{"default_field":"_all","query":"\"Style : '.$c.'\""}},
// {"query_string":{"default_field":"_all","query":"\"-- '.$d.'\""}},
// {"query_string":{"default_field":"_all","query":"\"-- '.$e.'\""}}]}},
// "from":0,"size":1000,"sort":[],"facets":{}}

// {"query":{"bool":{"must":[],"must_not":[],"should":
// [{"query_string":{"default_field":"oeuvre.pubDate","query":"\"Artiste : '.$q.'\""}},
// {"query_string":{"default_field":"oeuvre.body","query":"sculpture"}},
// {"query_string":{"default_field":"oeuvre.pubDate","query":"\"Style : Figuratif\""}}]}},"from":0,"size":10,"sort":[],"facets":{}}

if ($q!="" || $c!="" || $b!="") {
      $result = requete_artiste('{"query":{"bool":{"must":[],"must_not":[],"should":['.substr($qu,0,-1).']}},"from":0,"size":10,"sort":[],"facets":{}}');
      for($i=0; $i<totale($result) ; $i++ ){
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
} else {
  
    $result = requete_artiste('{"query":{"bool":{"must":[],"must_not":[],"should":[{"query_string":{"default_field":"artist.title","query":""}},{"query_string":{"default_field":"artist.body","query":"Figuratif"}}]}},"from":0,"size":10,"sort":[],"facets":{}}');
for($i=0; $i<10 ; $i++ ){
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
   echo '<span value="naif" >Naif/Primitif</span>';
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
               