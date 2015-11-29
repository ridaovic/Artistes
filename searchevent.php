<?php


require 'vendor/autoload.php';

function requete_event($q){

    $paramsH['hosts'] = array (
    '178.33.47.165:9200'
    );

    $client = new Elasticsearch\Client($paramsH);


    // Requete JSON Globale
    $json = $q;

    $params['body']  = $json;
    $params['type']  = 'event';
    $params['index']  = 'vase';

    return $client->search($params);

}


function totale_event($results){
    return count($results['hits']['hits']);
}


function titre_event($results,$i){
    return $results['hits']['hits'][$i]['_source']['title'];
}

function place_event($results,$i){
    return $results['hits']['hits'][$i]['_source']['place'];
}

function ville_event($results,$i){
    return $results['hits']['hits'][$i]['_source']['ville'];
}

function contact_event($results,$i){
    return $results['hits']['hits'][$i]['_source']['contact'];
}

function images_event($results,$i){
    $imgs  = $results['hits']['hits'][$i]['_source']['images'];
    $img = explode(" ", $imgs);
    return $img;
}


function pubDate_event($results,$i){
    return $results['hits']['hits'][$i]['_source']['pubDate'];
}

function pubDate_event_s($results,$i){
    $pubd = array();
    $split = explode(" - ", $results['hits']['hits'][$i]['_source']['pubDate']);
    array_push($pubd,$split[0]);
    array_push($pubd,$split[2]);
    return $pubd;
}

function body_event($results,$i){
    
    return $results['hits']['hits'][$i]['_source']['body'];
}

function score_event($results,$i){
    
    return $results['hits']['hits'][$i]['_score'];
}


function morcseau_event($txt){
    if(strlen($txt)>=165)
    {
        $txt=substr($txt,0,165) . " ..." ;
    }
     
    return $txt;
}

function morcseau_event_detail($txt){
    if(strlen($txt)>=800)
    {
        $txt=substr($txt,0,800) . " ..." ;
    }
     
    return $txt;
}

?>