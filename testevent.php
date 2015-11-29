



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
$json = '{"query":{"bool":{"must":[],"must_not":[],"should":[
{"range":{"event.pubDate":{"from":"'.date("d/m/y").'"}}}]}},
"from":0,"size":10,"sort":[],"facets":{}}';

//  '{"query":{"bool":{"must":[],"must_not":[],"should":[
// {"query_string":{"default_field":"event.title","query":"vernissage"}},
// {"query_string":{"default_field":"event.body","query":"Chahid"}},
// {"query_string":{"default_field":"event.place","query":"Rabat"}},
// {"range":{"event.pubDate":{"from":"11/05/2015","to":"15/05/2015"}}}]}},
// "from":0,"size":10,"sort":[],"facets":{}}'


//$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

$params['body']  = $json;
$params['type']  = 'event';
$params['index']  = 'vosartistes';

$results = $client->search($params);
//echo $results[0]['hits'];
echo'<p>10 sur '.count($results['hits']['hits']).'  </p><br>';

echo'<p>10 sur '.$results['hits']['total'].'  </p><br>';

foreach( $results['hits']['hits'] as $value){
                                                                                          
            echo'<div><ul>';
            echo'<li> Titre :'.$value['_source']['title'].'</li></br>';
            echo'<li> place :  '.$value['_source']['place'].'</li></br>';
            // $oeuvre = explode(" ", $value['_source']['place']);
            // foreach($oeuvre as $v){
            //       echo $v.'</br>';
            // }
            echo'<li> contact :  '.$value['_source']['contact'].'</li></br>';
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

            // '<h1>'.substr($value['_source']['pubDate'],strpos($value['_source']['pubDate'],'Artiste :')+strlen('Artiste :'),strlen($value['_source']['pubDate'])-strlen('Artiste :')-strlen(substr($value['_source']['pubDate'],strpos('Matériaux :')))).'</h1></br>';
            
            echo'<li> body :'.$value['_source']['body'].'</li></br>';




            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML($value['_source']['body']);
            libxml_use_internal_errors(false); 

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
                  
                $divTag = $xpath->evaluate('//div[@class="tableau-description-node"]'); 
                $divcontent = $divTag->item(0); 
                    echo '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>';
                    $div = $divTag->item(0); 
    
                    echo '<p>'.$doc->saveXML($divcontent).'</p>';

                    echo "<br/>";
            echo'<li> Score :'.$value['_score'].'</li></br>';
            echo'</ul></div><hr/>';
}

?>

</body>
</html>