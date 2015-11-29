
<?php
include('search.php');

$qu='';
if (isset($_POST["nameart"])) {
  $q=$_POST["nameart"];
  $qu.='{"query_string":{"default_field":"_all","query":"'.$q.'"}},';
}else{
   $q="";
}
if (isset($_POST["TypeOeuvre"])) {
  $b=$_POST["TypeOeuvre"];
}else{
   $b="";
 }
if (isset($_POST["style"])) {
 $c=$_POST["style"];
  $qu.='{"query_string":{"default_field":"_all","query":"\"Style :'.$c.' \""}},';
}else{
   $c="";
}
if (isset($_POST["prix1"])) {
 $d=$_POST["prix1"];
}else{
   $d="";
}
if (isset($_POST["prix2"])) {
  $e=$_POST["prix2"];
}else{
   $e="";
}
if (isset($_POST["format"])) {
$f=$_POST["format"];
  $qu.='{"query_string":{"default_field":"_all","query":"\"--'.$f.' \""}},';
}else{
   $f="";
}

$prix="";
if ($b=="tableau") {
$prix=$e;
}else{$prix=$d;}


  $qu.='{"query_string":{"default_field":"_all","query":"\"--'.$prix.' \""}},';

                    // {"query":{"bool":{"must":[],"must_not":[],"should":
                    // [{"query_string":{"default_field":"_all","query":"\"Artiste : '.$q.'\""}},
                    // {"query_string":{"default_field":"body","query":"'.$b.'"}},
                    // {"query_string":{"default_field":"_all","query":"\"Style : '.$c.'\""}},
                    // {"query_string":{"default_field":"_all","query":"\"-- '.$d.'\""}},
                    // {"query_string":{"default_field":"_all","query":"\"-- '.$e.'\""}}]}},
                    // "from":0,"size":1000,"sort":[],"facets":{}}

// {"query":{"bool":{"must":[],"must_not":[],"should":
// [{"query_string":{"default_field":"pubDate","query":"\"Artiste : '.$q.'\""}},
// {"query_string":{"default_field":"body","query":"sculpture"}},
// {"query_string":{"default_field":"pubDate","query":"\"Style : Figuratif\""}}]}},"from":0,"size":10,"sort":[],"facets":{}}


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




if ($b != "All" || $q != "" || $c != "" || $prix != "" || $f != ""  ) {
  if ($b != "All" ) {
    $qu.='{"query_string":{"default_field":"_all","query":"'.$b.'"}},';

    $result = requete_type('{"query":{"bool":{"must":[],"must_not":[],"should":['.substr($qu,0,-1).']}},"from":'.$position.',"size":'.$items_per_group.',"sort":[],"facets":{}}',$b);
     


                      $i = 0;
                      foreach($result['hits']['hits'] as $r){
                        $imgs = images_new($r);
                        $p = pubData_new($r);
                        $a=body_title($result,$i);

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
    }else
    { 
      $result = requete('{"query":{"bool":{"must":[],"must_not":[],"should":['.substr($qu,0,-1).']}},"from":'.$position.',"size":'.$items_per_group.',"sort":[],"facets":{}}');
                       

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
    }
} else {
    
    $result = requete('{"query":{"bool":{"must":[],"must_not":[],"should":['.substr($qu,0,-1).']}},"from":'.$position.',"size":'.$items_per_group.',"sort":[],"facets":{}}');
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
}



  
?>