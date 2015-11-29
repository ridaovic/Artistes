<?php 

include('search.php');
include('searchevent.php'); 

$q=$_GET["term"];

	$x=requete_event('{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":10,"sort":[],"facets":{}}');


$results = array();

for ($j=0; $j < totale_event($x) ; $j++) { 
	$results[$j]=titre_event($x,$j);
}

//var_dump($results);


$i=0;
$row_tab[]=array() ;

foreach( $results as $value){
//var_dump (stripos($value,$q));

	if ((stripos($value,$q))!== false) {
	
// echo (stripos($value,$q)) ;

            $row['id']=$i;
            $row['value']=$value;
            
            $row_tab[]=$row;
            $i++;	

//var_dump ($row);
        }
        
//print_r($row_tab);
}

 echo json_encode($row_tab);


?>