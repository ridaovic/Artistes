<?php
include('search.php'); //include config file
include('searchevent.php');

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





    //$result = requete('{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":'.$position.',"size":'.$items_per_group.',"sort":[],"facets":{}}');
    $events = requete_event('{"query":{"bool":{"must":[],"must_not":[],"should":[
                                        {"range":{"event.pubDate":{"from":"'.date("d/m/y").'"}}}]}},
                                        "from":'.$position.',"size":'.$items_per_group.',"sort":[],"facets":{}}');
              for($i = 0; $i < totale_event($events,$i);$i++){
                $imag_event = images_event($events,$i);
                  echo '<div class="evenments">';
                    echo '<div id="effect-6" class="effects clearfix"><div class="img">';
                     echo '<img src="'.$imag_event[count($imag_event)-1].'" width="610" >';
                     echo '<h1>'.titre_event($events,$i).'</h1>';
                     echo '<span>'.place_event($events,$i).'</span><br>';
                     //echo '<span>Accée : Gratuit</span>';
                     echo '<div class="overlay">';
                        echo '<a href="evenment.php" class="expand"><i class="fa fa-plus"></i></a>';
                       echo ' <a class="close-overlay hidden">x</a>';
                    echo '</div><br>';
                      
                        echo '</div>';
                      echo '</div>';
                  echo '</div>';
          }

}
?>

