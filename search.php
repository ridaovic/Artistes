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

include('functions.php');



require 'vendor/autoload.php';


function requete($q){
	$paramsH['hosts'] = array (
    '178.33.47.165:9200'
	);

	$client = new Elasticsearch\Client($paramsH);


	// Requete JSON Globale
	$json = $q;
	//'{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.pubDate","query":"alaoui"}}],"must_not":[],"should":[{"query_string":{"default_field":"oeuvre.pubDate","query":"Figuratif"}},{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}';
	//$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

	$params['body']  = $json;
	$params['type']  = array('tableau','sculpture','photographie','bijoux','livre','meuble','caftan','deco');
	$params['index']  = 'vase';
	
	return $client->search($params);
}
function requete_nouveautes($q){
	$paramsH['hosts'] = array (
    '178.33.47.165:9200'
	);

	$client = new Elasticsearch\Client($paramsH);


	// Requete JSON Globale
	$json = $q;
	//'{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.pubDate","query":"alaoui"}}],"must_not":[],"should":[{"query_string":{"default_field":"oeuvre.pubDate","query":"Figuratif"}},{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}';
	//$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

	$params['body']  = $json;
	$params['type']  = array('nouveau');
	$params['index']  = 'vase';

	return $client->search($params);
}
function requete_suggestions($q){
	$paramsH['hosts'] = array (
    '178.33.47.165:9200'
	);

	$client = new Elasticsearch\Client($paramsH);


	// Requete JSON Globale
	$json = $q;
	//'{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.pubDate","query":"alaoui"}}],"must_not":[],"should":[{"query_string":{"default_field":"oeuvre.pubDate","query":"Figuratif"}},{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}';
	//$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

	$params['body']  = $json;
	$params['type']  = array('suggestions');
	$params['index']  = 'vase';

	return $client->search($params);
}
function requeteAll($q){
	$paramsH['hosts'] = array (
    '178.33.47.165:9200'
	);

	$client = new Elasticsearch\Client($paramsH);


	// Requete JSON Globale
	$json = $q;
	//'{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.pubDate","query":"alaoui"}}],"must_not":[],"should":[{"query_string":{"default_field":"oeuvre.pubDate","query":"Figuratif"}},{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}';
	//$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

	$params['body']  = $json;
	$params['type']  = array('tableau','sculpture','photographie','bijoux','livre','meuble','caftan','deco','artist');
	$params['index']  = 'vase';

	return $client->search($params);
}
function requete_type($q,$type){
    $paramsH['hosts'] = array (
    '178.33.47.165:9200'
    );

    $client = new Elasticsearch\Client($paramsH);


    // Requete JSON Globale
    $json = $q;
    //'{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.pubDate","query":"alaoui"}}],"must_not":[],"should":[{"query_string":{"default_field":"oeuvre.pubDate","query":"Figuratif"}},{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}';
    //$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

    $params['body']  = $json;
    $params['type']  = $type;
    $params['index']  = 'vase';

    return $client->search($params);
}


function requete_oeuvre($id){
    $paramsH['hosts'] = array (
    '178.33.47.165:9200'
    );

    $client = new Elasticsearch\Client($paramsH);

    $params['type']  = 'tableau';
    $params['index']  = 'vase';
    $params['id']  = $id;

    return $client->get($params);
}

function requete_oeuvre_new($id,$type){
    $paramsH['hosts'] = array (
    '178.33.47.165:9200'
    );

    $client = new Elasticsearch\Client($paramsH);

    $params['type']  = $type;
    $params['index']  = 'vase';
    $params['id']  = $id;

    return $client->get($params);
}

function ID($r,$i){
    $id = $r['hits']['hits'][$i]['_id'];
    return $id;
}

function Type($r,$i){
    $type = $r['hits']['hits'][$i]['_type'];
    return $type;
}

function Type_oeuvre($r){
    $type = $r['_type'];
    return $type;
}


function totale($r){
    return count($r['hits']['hits']);
}

function titre($r,$i){
	return $r['hits']['hits'][$i]['_source']['title'];
}

function titre_oeuvres($r){
     $pubd = array();
    foreach($r['hits']['hits'] as $ev)
        array_push($pubd,$ev['_source']['title']);
    return $pubd;
}

function images($r,$i){
    $img  = $r['hits']['hits'][$i]['_source']['images'];
    //$imgs = explode(" ",$img);
    $aid = explode(" ", $img);
    for($i = 0; $i<(count($aid));$i++){
        $a = before('/sites/default/files/',$aid[$i]);
        if($a != ''){
        $imgs[$i] = $aid[$i];
        }
    }
    return $imgs;
}

function images_new($r){
    $img  = $r['_source']['images'];
    //$imgs = explode(" ",$img);
    $aid = explode(" ", $img);
    $imgs = array();
    for($i = 0; $i<(count($aid));$i++){
        $a = before('/sites/default/files/',$aid[$i]);
        if($a != ''){
        $imgs[$i] = $aid[$i];
        }
    }
    return $imgs;
}

function images_normal($r,$i){
    $img  = $r['hits']['hits'][$i]['_source']['images'];
    $aid = explode(" ", $img);
    for($i = 0; $i<(count($aid)-1);$i++){
        $a = before('/sites/default/files/',$aid[$i]);
        if($a != ''){
        $imgs[$i] = "http://www.vosartistes.com/sites/default/files/".after('http://www.vosartistes.com/sites/default/files/imagecache/miniature/',$aid[$i]);
        }
    }
    $imgs[$i] = "http://www.vosartistes.com/sites/default/files/".after('http://www.vosartistes.com/sites/default/files/imagecache/tableau/',$aid[$i]);
    return $imgs;
}

function pubData($r,$i){
    $pubd = array();
    array_push($pubd,between('Artiste :','Matériaux :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Matériaux :','Support :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Support :','Format :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Format :','Style :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Style :',"Année d'exécution :",$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between("Année d'exécution :",'Prix :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between("Prix :",'Conversion :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Conversion :','Référence :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,after ('Référence :',$r['hits']['hits'][$i]['_source']['pubDate']));
    return $pubd;
}

function pubData_new($r){
    $pubd = array();
    array_push($pubd,between('Artiste :','Matériaux :',$r['_source']['pubDate']));
    array_push($pubd,between('Matériaux :','Support :',$r['_source']['pubDate']));
    array_push($pubd,between('Support :','Format :',$r['_source']['pubDate']));
    array_push($pubd,between('Format :','Style :',$r['_source']['pubDate']));
    array_push($pubd,between('Style :',"Année d'exécution :",$r['_source']['pubDate']));
    array_push($pubd,between("Année d'exécution :",'Prix :',$r['_source']['pubDate']));
    array_push($pubd,between("Prix :",'Conversion :',$r['_source']['pubDate']));
    array_push($pubd,between('Conversion :','Référence :',$r['_source']['pubDate']));
    array_push($pubd,after ('Référence :',$r['_source']['pubDate']));
    return $pubd;
}


function images_oeuvre($r){
    $img  = $r['_source']['images'];
    $imgs = explode(" ", $img);
    return $imgs;
}

function images_normal_oeuvre($r){
    $img  = $r['_source']['images'];
    $aid = explode(" ", $img);
    for($i = 0; $i<(count($aid)-1);$i++){
        $imgs[$i] = "http://www.vosartistes.com/sites/default/files/".after('http://www.vosartistes.com/sites/default/files/imagecache/miniature/',$aid[$i]);
    }
    $imgs[$i] = "http://www.vosartistes.com/sites/default/files/".after('http://www.vosartistes.com/sites/default/files/imagecache/tableau/',$aid[$i]);
    return $imgs;
}

function pubData_oeuvre($r){
    $pubd = array();
    array_push($pubd,between('Artiste :','Matériaux :',$r['_source']['pubDate']));
    array_push($pubd,between('Matériaux :','Support :',$r['_source']['pubDate']));
    array_push($pubd,between('Support :','Format :',$r['_source']['pubDate']));
    array_push($pubd,between('Format :','Style :',$r['_source']['pubDate']));
    array_push($pubd,between('Style :',"Année d'exécution :",$r['_source']['pubDate']));
    array_push($pubd,between("Année d'exécution :",'Prix :',$r['_source']['pubDate']));
    array_push($pubd,between("Prix :",'Conversion :',$r['_source']['pubDate']));
    array_push($pubd,between('Conversion :','Référence :',$r['_source']['pubDate']));
    array_push($pubd,after ('Référence :',$r['_source']['pubDate']));
    return $pubd;
}

function body_title_oeuvre($r){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($r['_source']['body']);
    libxml_clear_errors();            

    $xpath = new DOMXpath($doc);                  
    foreach($xpath->query('//h1[@class="title"]') as $div){
    }
    return $div->textContent;
}




function namesArtist($r){
    
    $pubd = array();
    foreach($r['hits']['hits'] as $ev)
        array_push($pubd,between('Artiste :','Matériaux :',$ev['_source']['pubDate']));
    return $pubd;
}

function body_div($r,$i){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($r['hits']['hits'][$i]['_source']['body']);
    libxml_use_internal_errors(false); 

            //echo $doc->saveHTML();

    $xpath = new DOMXpath($doc);
    $divTag = $xpath->evaluate('//div[@class="tableau-description-node"]'); 
    $divcontent = $divTag->item(0); 
    return $doc->saveXML($divcontent);

}
function url_social($r){
    $url  = $r['_source']['url'];
    
    
    return $url;
    

}
function meta_oeuvre($r){
    $meta  = $r['_source']['meta'];
    
    
    return $meta;
    

}
function meta_title($r){
    $title  = $r['_source']['title'];
    
    
    return $title;
    

}

function body_div_oeuvre($r){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($r['_source']['body']);
    libxml_use_internal_errors(false); 

            //echo $doc->saveHTML();

    $xpath = new DOMXpath($doc);
    $divTag = $xpath->evaluate('//div[@class="tableau-description-node"]'); 
    $divcontent = $divTag->item(0); 
    return $doc->saveXML($divcontent);

}

function body_div_oeuvre1($r){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($r['_source']['body']);
    libxml_use_internal_errors(false); 

            //echo $doc->saveHTML();
    $xpath = new DOMXpath($doc);
    foreach($xpath->query('//div[@class="tableau-description-node"]') as $div){
    }
    return $div->textContent;
}

function morcseau_oueuvre($txt){
    if(strlen($txt)>=1000)
    {
        $txt=substr($txt,0,900) . " ..." ;
    }

     
    return $txt;
    
}

function morcseau($txt){
    if(strlen($txt)>=200)
    {
        $txt=substr($txt,0,800) . " ..." ;
    }
     
    return $txt;
}


function body_title($r,$i){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($r['hits']['hits'][$i]['_source']['body']);
    libxml_clear_errors();            

    $xpath = new DOMXpath($doc);                  
    foreach($xpath->query('//h1[@class="title"]') as $div){
    }
    return $div->textContent;
}

function body_titles($r){
    $var = array();
    foreach ($r['hits']['hits'] as $value) {
        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($value['_source']['body']);
        libxml_clear_errors();            

        $xpath = new DOMXpath($doc);                  
        foreach($xpath->query('//h1[@class="title"]') as $div){
            array_push($var,$div->textContent);
        } 
    }
  
    return $var;
}

function score($r,$i){
    return $r['hits']['hits'][$i]['_score'];
}
   

function images_normal_oeuvre_aid($r){
    $aid = between('http://www.vosartistes.com/sites/default/files/imagecache/','/',$r);
    $imgs = "http://www.vosartistes.com/sites/default/files/".after('http://www.vosartistes.com/sites/default/files/imagecache/'.$aid.'/',$r);
    return $imgs;
}                          

?>
