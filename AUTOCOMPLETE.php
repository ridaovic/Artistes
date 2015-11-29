

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/ComboArtistes.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" rel="stylesheet" />


<style>
  .ui-autocomplete {
    max-height: 400px;
    overflow-y: auto;
  
    overflow-x: hidden;
  }
  
  * html .ui-autocomplete {
    height: 100px;
  }
.custom-combobox {
position: relative;
display: inline-block;
}
.custom-combobox-toggle {
position: absolute;
top: 0;
bottom: 0;
margin-left: -1px;
padding: 0;
/* support: IE7 */
*height: 1.7em;
*top: 0.1em;
}
.custom-combobox-input {
margin: 0;
padding: 0.3em;
}
</style>




</head>
<body>

<div class="ui-widget">

<?php 
require 'vendor/autoload.php';
include('search.php');
$x=requete('
{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}');
$results=namesArtist($x);
$a= array_unique($results);
//$q=$_GET["term"];
 $i=0;
 echo("<select id='combobox' size='10'>");
 echo "<option></option>";
foreach( $a as $value){
			// if (stripos($value, $q) === 1) {
            $row['id']=$i;
            $row['value']=$value;
            $row_tab[]=$row;
            $i++;	
            //}
            echo "<option>".$value."</option>";
 }
 echo "</select>";
// echo json_encode($row_tab); 
?>
</div>



</body>
</html>
