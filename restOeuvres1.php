<?php 
include('search.php');
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