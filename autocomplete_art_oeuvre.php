<?php 

require 'vendor/autoload.php';
include('search.php');
$q=$_GET["term"];


$x=requete('{"query":{"bool":{"must":[],"must_not":[],"should":[{"query_string":{"default_field":"title","query":"*'.$q.'*"}}]}},"from":0,"size":100,"sort":[],"facets":{}}');

 $results1=namesArtist($x);
 $r= array_unique($results1);
 asort($r);
$results2=body_titles($x);
$r1= array_unique($results2);
asort($r1);
 // $results = array_merge($results1, $results2);
// $a= array_unique($results);
 // $q="dame";


foreach( $r as $value){
	
			//if (stripos($value, $q) !== false) {
																										
            
            $row_tab[]=array(
					'label' => $value ,
					'value' => $value ,
					'category' => 'Artistes'
				);

        //}
           

}

if (empty($row_tab)) {
	$row_tab[]=array(
					'label' => 'Aucun résultat' ,
					'value' => 'Aucun résultat' ,
					'category' => 'Artistes'
				);
}

       
	

foreach( $r1 as $value){
	
			//if (stripos($value, $q) !== false) {
																										
            
            $row_tab1[]=array(
					'label' => $value ,
					'value' => $value ,
					'category' => 'Oeuvres'
				);
			
        //}


} 
if (empty($row_tab1)) {
	$row_tab1[]=array(
					'label' => 'Aucun résultat' ,
					'value' => 'Aucun résultat' ,
					'category' => 'Oeuvres'
				);
}
// echo "<pre>";
// print_r($row_tab1);
// echo "</pre>";
				
		
				
				
// $res="Artistes trouves (".count($row_tab).")";
// $res1="Oeuvres trouves (".count($row_tab1).")";
// $All=array('1' =>$res,'2' =>$res1);
$result = array_merge($row_tab,$row_tab1);
// echo "<pre>";
// print_r($result);
 echo json_encode($result);
?>