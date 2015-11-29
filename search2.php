


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

require 'vendor/autoload.php';



function requete_oeuvre_art($id){
    $paramsH['hosts'] = array (
    '5.135.106.169:9200'
    );

    $client = new Elasticsearch\Client($paramsH);

    $params['type']  = 'tableau';
    $params['index']  = 'vase';
    $params['id']  = $id;

    return $client->get($params);
}


$value = requete_oeuvre_art('e5mR3_bUTpCanHeXMu0eCw');





//echo'<p>10 sur '.count($results['hits']['hits']).' oeuvres </p>';
//foreach( $results as $value){oeuvre_artiste
                                                                                          
            echo'<div><ul>';
            echo'<li> ID :'.$value['_id'].'</li></br>';
            echo'<li> ID :'.Type_oeuvre($value).'</li></br>';
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

            echo '00000000000000000000000000000000000000<br>';

            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML($value['_source']['body']);
            libxml_use_internal_errors(false); 

            //echo $doc->saveHTML();





            

            $xpath = new DOMXpath($doc);
            $divTag = $xpath->evaluate('//div[@class="tableau-description-node"]'); 
            $divcontent = $divTag->item(0); 
            echo $doc->saveXML($divcontent);



            //$elements = $xpath->query("/div[@class='tableau-description-node']");
            //if (!is_null($elements)) {   title
            //      foreach($xpath->query('//h1[@class="title"]') as $div){

            //         //????
            //         echo '<p>11111111111111111111111111111111111111111</p>';
            //         echo '<p>'.$div->textContent.'</p>';

            //         echo "<br/>";
            //     }  
                  
            //     foreach($xpath->query('//div[@class="tableau-description-node"]') as $div){

            //         //????
            //         echo '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>';
            //         echo '<p>'.$div->textContent.'</p>';

            //         echo "<br/>";
            //     }
            // echo'<li> Score :'.$value['_score'].'</li></br>';
            // echo'</ul></div><hr/>';
//}
                   








// $paramsH['hosts'] = array (
//     '5.135.106.169:9200'
// );

// $client = new Elasticsearch\Client($paramsH);


// // Requete JSON Globale
// $json = '{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.pubDate","query":"alaoui"}}],"must_not":[],"should":[{"query_string":{"default_field":"oeuvre.pubDate","query":"Figuratif"}},{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}';
// //$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

// $params['body']  = $json;
// $params['type']  = 'oeuvre';
// $params['index']  = 'arts';

// $results = $client->search($params);
// //echo $results[0]['hits'];
// echo'<p>10 sur '.$results['hits']['total'].' oeuvres </p>';
// //foreach( $results['hits']['hits'] as $value){
                                                                                          
//             echo'<div><ul>';
//             echo'<li> ID :'.$results['hits']['hits'][0]['_id'].'</li></br>';
//             echo'<li> Titre :'.$results['hits']['hits'][0]['_source']['title'].'</li></br>';
//             echo'<li> Meta : '.$results['hits']['hits'][0]['_source']['meta'].'</li></br>';
//             echo'<li> images : '.$results['hits']['hits'][0]['_source']['images'].'</li></br>';
//             $imgs  = $results['hits']['hits'][0]['_source']['images'];
//             $img = explode(" ", $imgs);
//             foreach($img as $i){
//                   echo '<img src='.$i.'></br>';
//             }
//             echo '</br>';
//             echo'<li> pubDate :'.$results['hits']['hits'][0]['_source']['pubDate'].'</li></br>';
//             // '<h1>'.substr($value['_source']['pubDate'],strpos($value['_source']['pubDate'],'Artiste :')+strlen('Artiste :'),strlen($value['_source']['pubDate'])-strlen('Artiste :')-strlen(substr($value['_source']['pubDate'],strpos('Matériaux :')))).'</h1></br>';
//             echo '<h1>'.between('Artiste :','Matériaux :',$results['hits']['hits'][0]['_source']['pubDate']).'</h1></br>';
//             echo '<h1>'.between('Matériaux :','Support :',$results['hits']['hits'][0]['_source']['pubDate']).'</h1></br>';
//             echo '<h1>'.between('Support :','Format :',$results['hits']['hits'][0]['_source']['pubDate']).'</h1></br>';
//             echo '<h1>'.between('Format :','Style :',$results['hits']['hits'][0]['_source']['pubDate']).'</h1></br>';
//             echo '<h1>'.between('Style :','Prix :',$results['hits']['hits'][0]['_source']['pubDate']).'</h1></br>';
//             echo '<h1>'.between('Prix :','Conversion :',$results['hits']['hits'][0]['_source']['pubDate']).'</h1></br>';
//             echo '<h1>'.between('Conversion :','Référence :',$results['hits']['hits'][0]['_source']['pubDate']).'</h1></br>';
//             echo '<h1>'.after ('Référence :',$results['hits']['hits'][0]['_source']['pubDate']).'</h1></br>';
//             echo'<li> body :'.$results['hits']['hits'][0]['_source']['body'].'</li></br>';




//             $doc = new DOMDocument();
//             libxml_use_internal_errors(true);
//             $doc->loadHTML($results['hits']['hits'][0]['_source']['body']);
//             libxml_clear_errors();

//             //echo $doc->saveHTML();
            

//             $xpath = new DOMXpath($doc);

//             //$elements = $xpath->query("/div[@class='tableau-description-node']");
//             //if (!is_null($elements)) {
                  
                  
//                 foreach($xpath->query('//div[@class="tableau-description-node"]') as $div){

//                     //????
//                     echo '<p>'.$div->textContent.'</p>';

//                     echo "<br/>";
//                 }
//             echo'<li> Score :'.$results['hits']['hits'][0]['_score'].'</li></br>';
//             echo'</ul></div><hr/>';
// //}
                                                      

?>
</body>

</html>