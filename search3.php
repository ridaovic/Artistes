


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

include('search.php');


$paramsH['hosts'] = array (
    '5.135.106.169:9200'
);

$client = new Elasticsearch\Client($paramsH);


// Requete JSON Globale
$json = '{"query":{"bool":{"must":[],"must_not":[],"should":
    [{"query_string":{"default_field":"_all","query":"\"Artiste :alaoui \""}}]}},
    "from":0,"size":10,"sort":[],"facets":{}}';
//$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

$params['body']  = $json;
$params['type']  = array('tableau','sculpture','photographie','bijoux','livre','meuble','caftan','decoration');
$params['index']  = 'vase';

$results = $client->search($params);
//echo $results[0]['hits'];
echo'<p>10 sur '.count($results['hits']['hits']).' oeuvres </p><br>';

echo'<p>10 sur '.$results['hits']['total'].' oeuvres </p><br>';

foreach( $results['hits']['hits'] as $value){
                                                                                          
            echo'<div><ul>';
            echo'<li> ID :'.$value['_id'].'</li></br>';
            echo'<li> Titre :'.$value['_source']['title'].'</li></br>';
            echo'<li> Meta : '.$value['_source']['meta'].'</li></br>';
            echo'<li> images : '.$value['_source']['images'].'</li></br>';
            $imgs  = $value['_source']['images'];
            $img = explode(" ", $imgs);
            foreach($img as $i){
                  echo '<img src='.$i.'></br>';
            }
            echo '</br>';
            echo'<li> pubDate :'.$value['_source']['pubDate'].'</li></br>';
            // '<h1>'.substr($value['_source']['pubDate'],strpos($value['_source']['pubDate'],'Artiste :')+strlen('Artiste :'),strlen($value['_source']['pubDate'])-strlen('Artiste :')-strlen(substr($value['_source']['pubDate'],strpos('Matériaux :')))).'</h1></br>';
            echo '<h1>'.between('Artiste :','Matériaux :',$value['_source']['pubDate']).'</h1></br>';
            echo '<h1>'.between('Matériaux :','Support :',$value['_source']['pubDate']).'</h1></br>';
            echo '<h1>'.between('Support :','Format :',$value['_source']['pubDate']).'</h1></br>';
            echo '<h1>'.between('Format :','Style :',$value['_source']['pubDate']).'</h1></br>';
            echo '<h1>'.between('Style :','Prix :',$value['_source']['pubDate']).'</h1></br>';
            echo '<h1>'.between('Prix :','Conversion :',$value['_source']['pubDate']).'</h1></br>';
            echo '<h1>'.between('Conversion :','Référence :',$value['_source']['pubDate']).'</h1></br>';
            echo '<h1>'.after ('Référence :',$value['_source']['pubDate']).'</h1></br>';
            echo'<li> body :'.$value['_source']['body'].'</li></br>';




            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML($value['_source']['body']);
            libxml_clear_errors();

            //echo $doc->saveHTML();
            

            $xpath = new DOMXpath($doc);

            //$elements = $xpath->query("/div[@class='tableau-description-node']");
            //if (!is_null($elements)) {   title
                 foreach($xpath->query('//h1[@class="title"]') as $div){

                    //????
                    echo '<p>11111111111111111111111111111111111111111</p>';
                    echo '<p>'.$div->textContent.'</p>';

                    echo "<br/>";
                }  
                  
                foreach($xpath->query('//div[@class="tableau-description-node"]') as $div){

                    //????
                    echo '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>';
                    echo '<p>'.$div->textContent.'</p>';

                    echo "<br/>";
                }
            echo'<li> Score :'.$value['_score'].'</li></br>';
            echo'</ul></div><hr/>';
}




// $results = requete('{"query":{"bool":{"must":[],"must_not":[],"should":[{"query_string":{"default_field":"artist.title","query":"Glaoui"}},{"query_string":{"default_field":"artist.body","query":"Figuratif"}}]}},"from":0,"size":10,"sort":[],"facets":{}}');
// echo'<p>10 sur '.$results['hits']['total'].' oeuvres </p>';
// $i = 0;
// foreach( $results['hits']['hits'] as $value){
                                                                                          
//             echo'<div><ul>';
//             echo'<li> ID :'.$value['_id'].'</li></br>';
//             echo'<li> Titre :'.$value['_source']['title'].'</li></br>';
//             echo'<li> Titre2 :'.titre($results,$i).'</li></br>';
//             echo'<li> Meta : '.$value['_source']['meta'].'</li></br>';
//             echo'<li> images : '.$value['_source']['images'].'</li></br>';
//             foreach(images_normal($results,$i) as $img){
//                   echo '<img src='.$img.'></br>';
//             }
//             echo '</br>';
//             echo'<li> pubDate :'.$value['_source']['pubDate'].'</li></br>';
//             // '<h1>'.substr($value['_source']['pubDate'],strpos($value['_source']['pubDate'],'Artiste :')+strlen('Artiste :'),strlen($value['_source']['pubDate'])-strlen('Artiste :')-strlen(substr($value['_source']['pubDate'],strpos('Matériaux :')))).'</h1></br>';
//             $p = pubData($results,$i);

//             echo '<h1>'.$p[0].'</h1></br>';
//             echo '<h1>'.$p[1].'</h1></br>';
//             echo '<h1>'.$p[2].'</h1></br>';
//             echo '<h1>'.$p[3].'</h1></br>';
//             echo '<h1>'.$p[4].'</h1></br>';
//             echo '<h1>'.$p[5].'</h1></br>';
//             echo '<h1>'.$p[6].'</h1></br>';
//             echo '<h1>'.$p[7].'</h1></br>';
//             echo '<h1>'.$p[8].'</h1></br>';

//             echo'<li> body :'.$value['_source']['body'].'</li></br>';

//                     //????
//             echo '<p>'.body_div($results,$i).'</p>';

//             echo "<br/>";
//             //}

//             echo'<li> Score :'.$value['_score'].'</li></br>';
//             echo'<li> Score :'.score($results,$i).'</li></br>';
//             echo'</ul></div><hr/>';
//             $i++;
// }


    







// $results = requete('{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.pubDate","query":"alaoui"}}],"must_not":[],"should":[{"query_string":{"default_field":"oeuvre.pubDate","query":"Figuratif"}},{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}');
// echo'<p>10 sur '.$results['hits']['total'].' oeuvres </p>';
// $i = 0;
// foreach( $results['hits']['hits'] as $value){
                                                                                          
//             echo'<div><ul>';
//             echo'<li> ID :'.$value['_id'].'</li></br>';
//             echo'<li> Titre :'.$value['_source']['title'].'</li></br>';
//             echo'<li> Titre2 :'.titre($results,$i).'</li></br>';
//             echo'<li> Meta : '.$value['_source']['meta'].'</li></br>';
//             echo'<li> images : '.$value['_source']['images'].'</li></br>';
//             foreach(images($results,$i) as $img){
//                   echo '<img src='.$img.'></br>';
//             }
//             echo '</br>';
//             echo'<li> pubDate :'.$value['_source']['pubDate'].'</li></br>';
//             // '<h1>'.substr($value['_source']['pubDate'],strpos($value['_source']['pubDate'],'Artiste :')+strlen('Artiste :'),strlen($value['_source']['pubDate'])-strlen('Artiste :')-strlen(substr($value['_source']['pubDate'],strpos('Matériaux :')))).'</h1></br>';
//             $p = pubData($results,$i);

//             echo '<h1>'.$p[0].'</h1></br>';
//             echo '<h1>'.$p[1].'</h1></br>';
//             echo '<h1>'.$p[2].'</h1></br>';
//             echo '<h1>'.$p[3].'</h1></br>';
//             echo '<h1>'.$p[4].'</h1></br>';
//             echo '<h1>'.$p[5].'</h1></br>';
//             echo '<h1>'.$p[6].'</h1></br>';

//             echo'<li> body :'.$value['_source']['body'].'</li></br>';

//                     //????
//             echo '<p>'.body($results,$i).'</p>';

//             echo "<br/>";
//             //}

//             echo'<li> Score :'.$value['_score'].'</li></br>';
//             echo'<li> Score :'.score($results,$i).'</li></br>';
//             echo'</ul></div><hr/>';
//             $i++;
// }











?>
</body>

</html>







