<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    </head>
    <body>
<?php
//    Install composer. curl -s http://getcomposer.org/installer | php


//    Create composer.json containing:

  
//{
//    "require": {
//        "elasticsearch/elasticsearch": "~1.0"
//    }
//}

  
//  Run ./composer.phar install
  
//  Keep up-to-date: ./composer.phar update

//use Kir\XML\XPath\DomXPath;
//use Kir\Streams\Impl\StringStream;

include('searchartiste.php');



// Requete JSON Globale
$results = requete_artiste('{"query":{"bool":{"must":[],"must_not":[],"should":[{"query_string":{"default_field":"artist.body","query":"Moderne"}},
                                                                                {"query_string":{"default_field":"artist.body","query":"Figuratif"}},
                                                                                {"query_string":{"default_field":"artist.body","query":"Naif"}},
                                                                                {"query_string":{"default_field":"artist.body","query":"Abstrait"}}]}},
                                                                                "from":0,"size":1000,"sort":[],"facets":{}}');
//$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';


//echo $results[0]['hits'];
echo'<p>10 sur '.titre_artistes($results)[0].'  </p><br>';
var_dump(titre_artistes($results));

echo'<p>10 sur '.$results['hits']['total'].'  </p><br>';

for($i=0 ; $i < totale_artiste($results) ; $i++){
                                                                                          
            echo'<div><ul>';
            echo'<li> Titre :'.titre_artiste($results,$i).'</li></br>';
            $a = explode(" ",titre_artiste($results,$i));
            var_dump($a);
            echo'<h1> Nom :'.$a[0].'</h1></br>';
            echo'<h1> Prenom :'.$a[3].'</h1></br>';
            echo'<li> oeuvres :  </li></br>';
            $oeuvre = ouevres_artiste($results,$i);
            var_dump($oeuvre);
            foreach($oeuvre as $v){
                  echo $v.'</br>';
            }

 echo '</br>';
echo'<li> pubDate : '.$results['hits']['hits'][$i]['_source']['pubDate'].'</li></br>';
            echo '</br>';
            
            echo'<li> body : '.$results['hits']['hits'][$i]['_source']['body'].'</li></br>';



                    echo '<p>'.body_titre_artiste($results,$i).'</p>';

                    echo "<br/>";


                    echo '<p>'.body_div_artiste($results,$i).'</p>';

                    echo "<br/>";
            echo'<li> Score :'.score_artiste($results,$i).'</li></br>';
            echo'</ul></div><hr/>';
}

?>

</body>
</html>