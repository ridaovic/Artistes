<?php 

require 'vendor/autoload.php';
include('search.php');
 
$q=$_GET["term"];

$x=requete('{"query":{"bool":{"must":[],"must_not":[],"should":[{"query_string":{"default_field":"title","query":"*'.$q.'*"}}]}},"from":0,"size":100,"sort":[],"facets":{}}');

 $results = body_titles($x);
$a= array_unique($results);

$i=0;
foreach( $a as $value){

   //if (stripos($value, $q) === 1) {
																										
          
            $row['id']=$i;
            $row['value']=$value;
            $row_tab[]=$row;
            $i++;	
   //}

}
echo json_encode($row_tab);























?>