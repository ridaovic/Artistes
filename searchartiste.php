
<?php

require 'vendor/autoload.php';


function requete_artiste($q){
    $paramsH['hosts'] = array (
        '178.33.47.165:9200'
    );

    $client = new Elasticsearch\Client($paramsH);


    // Requete JSON Globale
    $json = $q;

    $params['body']  = $json;
    $params['type']  = 'artist';
    $params['index']  = 'vase';

    return $client->search($params);
}


function requete_oeuvre_artiste($id){
    $paramsH['hosts'] = array (
    '178.33.47.165:9200'
    );

    $client = new Elasticsearch\Client($paramsH);

    $params['type']  = 'tableau';
    $params['index']  = 'vase';
    $params['id']  = $id;

    return $client->get($params);
}

//echo $results[0]['hits'];

function totale_artiste($results){
    return count($results['hits']['hits']);
}



function titre_artiste($results,$i){
    return $results['hits']['hits'][$i]['_source']['title'];
}       




function titre_artistes($r){
     $pubd = array();
    foreach($r['hits']['hits'] as $ev)
        array_push($pubd,$ev['_source']['title']);
    return $pubd;
}

function nom_artiste($txt){
    $a = explode(" ",$txt);
    return $a[0];
} 

function prenom_artiste($txt){
    $a = explode(" ",$txt);
    return $a[3];
} 


function ouevres_artiste($results,$i){
    $oeuvre = explode(" ", $results['hits']['hits'][$i]['_source']['oeuvres']);
    return $oeuvre;
}


function body_titre_artiste($results,$i){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($results['hits']['hits'][$i]['_source']['body']);
    libxml_use_internal_errors(false); 
    $xpath = new DOMXpath($doc);                  
    foreach($xpath->query('//h1[@class="title"]') as $div){
    }
    return $div->textContent;
}

function body_div_artiste($results,$i){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($results['hits']['hits'][$i]['_source']['body']);
    libxml_use_internal_errors(false); 
    $xpath = new DOMXpath($doc);
    $divTag = $xpath->evaluate('//div[@class="tableau-description-node"]'); 
    $divcontent = $divTag->item(0); 
    return $doc->saveXML($divcontent);
}

function body_div_artiste_cont($results,$i){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($results['hits']['hits'][$i]['_source']['body']);
    libxml_use_internal_errors(false);
    $xpath = new DOMXpath($doc);
    foreach($xpath->query('//div[@class="tableau-description-node"]') as $div){
    }
    return $div->textContent;
}

function score_artiste($results,$i){
    return $results['hits']['hits'][$i]['_score'];
}

function morcseau_artiste($txt){
    if(strlen($txt)>=1200)
    {
        $txt=substr($txt,0,1200)." ..." ;
    }
    return $txt;
}


function images_normal_art_oeuvre($r){
    $aid = between('http://www.vosartistes.com/sites/default/files/imagecache/','/',$r);
    $imgs = "http://www.vosartistes.com/sites/default/files/".after('http://www.vosartistes.com/sites/default/files/imagecache/'.$aid.'/',$r);
    return $imgs;
}

?>

