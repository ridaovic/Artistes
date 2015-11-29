<?php
include('search.php'); //include config file

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



    $result = requete('{"query":{"bool":{"must":[{"query_string":{"default_field":"parentUrl","query":"tendance"}}],"must_not":[],"should":[{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":'.$position.',"size":'.$items_per_group.',"sort":[],"facets":{}}');
    for($i=0; $i<totale($result) ; $i++ ){
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

}
?>

