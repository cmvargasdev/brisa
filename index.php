<?php
include("vendor/autoload.php");

use Google\Client;
$client =  new Client();

$client->setAuthConfig('service_account_file.json');
$client->addScope('https://www.googleapis.com/auth/indexing');
$httpClient = $client->authorize();

$excluir = ['https://serviciosnotarialesnj.com/404.html','https://serviciosnotarialesnj.com/favicon.png','https://serviciosnotarialesnj.com/robots.txt','https://serviciosnotarialesnj.com/sitemap.xml',];
//ulyimo 694 
$xml = simplexml_load_file('build_production\sitemap.xml');   

echo "Total: ".count($xml)." <br><br>"; 


for ($i=0; $i < 100; $i++) { 
    if(!in_array($xml[0]->url[$i]->loc,$excluir)){
        $urlpost = $xml[0]->url[$i]->loc;
        $content = '{ "url": "'.$urlpost.'", "type": "URL_UPDATED" }';
        $endpointpost = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
        $response = $httpClient->post($endpointpost, [ 'body' => $content ]);
        $status_code = $response->getStatusCode(); 
        echo "<br> $i : $status_code - $urlpost";
    }
}
/*
//notario-publico notarizar-documentos
$contar=1;

for ($i=0; $i < count($xml); $i++) { 
    if(!in_array($xml[0]->url[$i]->loc,$excluir) && str_contains($xml[0]->url[$i]->loc,'notario-publico')){
        $urlpost = $xml[0]->url[$i]->loc;
        $content = '{ "url": "'.$urlpost.'", "type": "URL_UPDATED" }';
        $endpointpost = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
        $response = $httpClient->post($endpointpost, [ 'body' => $content ]);
        $status_code = $response->getStatusCode(); 
        echo "<br> ". ($contar++) ." : $status_code - $urlpost";
    }
}
echo "<br> ******************* <br>";
for ($i=0; $i < count($xml); $i++) { 
    if(!in_array($xml[0]->url[$i]->loc,$excluir) && str_contains($xml[0]->url[$i]->loc,'notarizar-documentos')){
        $urlpost = $xml[0]->url[$i]->loc;
        $content = '{ "url": "'.$urlpost.'", "type": "URL_UPDATED" }';
        $endpointpost = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
        $response = $httpClient->post($endpointpost, [ 'body' => $content ]);
        $status_code = $response->getStatusCode(); 
        echo "<br> ". ($contar++) ." : $status_code - $urlpost";
    }
}
*/
/*
$sites_update = [
'https://notariaactiva.com/affidavit-declaracion-jurada/Evergreen-park-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/berwyn-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/burbank-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/elmwood-park-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/forest-park-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/lincolnwood-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/lyons-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/maywood-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/melrose-park-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/norridge-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/oak-park-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/river-forest-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/river-grove-illinois/',
'https://notariaactiva.com/affidavit-declaracion-jurada/summit-illinois/',
'https://notariaactiva.com/apostillas/Evergreen-park-illinois/',
'https://notariaactiva.com/apostillas/berwyn-illinois/',
'https://notariaactiva.com/apostillas/burbank-illinois/',
'https://notariaactiva.com/apostillas/elmwood-park-illinois/',
'https://notariaactiva.com/apostillas/forest-park-illinois/',
'https://notariaactiva.com/apostillas/lincolnwood-illinois/',
'https://notariaactiva.com/apostillas/lyons-illinois/',
'https://notariaactiva.com/apostillas/maywood-illinois/',
'https://notariaactiva.com/apostillas/melrose-park-illinois/',
'https://notariaactiva.com/apostillas/norridge-illinois/',
'https://notariaactiva.com/apostillas/oak-park-illinois/',
'https://notariaactiva.com/apostillas/river-forest-illinois/',
'https://notariaactiva.com/apostillas/river-grove-illinois/',
'https://notariaactiva.com/apostillas/summit-illinois/',
'https://notariaactiva.com/carta-poder/Evergreen-park-illinois/',
'https://notariaactiva.com/carta-poder/berwyn-illinois/',
'https://notariaactiva.com/carta-poder/burbank-illinois/',
'https://notariaactiva.com/carta-poder/elmwood-park-illinois/',
'https://notariaactiva.com/carta-poder/forest-park-illinois/',
'https://notariaactiva.com/carta-poder/lincolnwood-illinois/',
'https://notariaactiva.com/carta-poder/lyons-illinois/',
'https://notariaactiva.com/carta-poder/maywood-illinois/',
'https://notariaactiva.com/carta-poder/melrose-park-illinois/',
'https://notariaactiva.com/carta-poder/norridge-illinois/',
'https://notariaactiva.com/carta-poder/oak-park-illinois/',
'https://notariaactiva.com/carta-poder/river-forest-illinois/',
'https://notariaactiva.com/carta-poder/river-grove-illinois/',
'https://notariaactiva.com/carta-poder/summit-illinois/',
'https://notariaactiva.com/carta-simple-notarial/Evergreen-park-illinois/',
'https://notariaactiva.com/carta-simple-notarial/berwyn-illinois/',
'https://notariaactiva.com/carta-simple-notarial/burbank-illinois/',
'https://notariaactiva.com/carta-simple-notarial/elmwood-park-illinois/',
'https://notariaactiva.com/carta-simple-notarial/forest-park-illinois/',
'https://notariaactiva.com/carta-simple-notarial/lincolnwood-illinois/',
'https://notariaactiva.com/carta-simple-notarial/lyons-illinois/',
'https://notariaactiva.com/carta-simple-notarial/maywood-illinois/',
'https://notariaactiva.com/carta-simple-notarial/melrose-park-illinois/',
'https://notariaactiva.com/carta-simple-notarial/norridge-illinois/',
'https://notariaactiva.com/carta-simple-notarial/oak-park-illinois/',
'https://notariaactiva.com/carta-simple-notarial/river-forest-illinois/',
'https://notariaactiva.com/carta-simple-notarial/river-grove-illinois/',
'https://notariaactiva.com/carta-simple-notarial/summit-illinois/',
'https://notariaactiva.com/traducciones-certificadas/Evergreen-park-illinois/',
'https://notariaactiva.com/traducciones-certificadas/berwyn-illinois/',
'https://notariaactiva.com/traducciones-certificadas/burbank-illinois/',
'https://notariaactiva.com/traducciones-certificadas/elmwood-park-illinois/',
'https://notariaactiva.com/traducciones-certificadas/forest-park-illinois/',
'https://notariaactiva.com/traducciones-certificadas/lincolnwood-illinois/',
'https://notariaactiva.com/traducciones-certificadas/lyons-illinois/',
'https://notariaactiva.com/traducciones-certificadas/maywood-illinois/',
'https://notariaactiva.com/traducciones-certificadas/melrose-park-illinois/',
'https://notariaactiva.com/traducciones-certificadas/norridge-illinois/',
'https://notariaactiva.com/traducciones-certificadas/oak-park-illinois/',
'https://notariaactiva.com/traducciones-certificadas/river-forest-illinois/',
'https://notariaactiva.com/traducciones-certificadas/river-grove-illinois/',
'https://notariaactiva.com/traducciones-certificadas/summit-illinois/',

];
   
echo "Total: ".count($sites_update)." <br><br>";  
    foreach($sites_update as $site){
        $urlpost = $site;
        $content = '{ "url": "'.$urlpost.'", "type": "URL_UPDATED" }';
        $endpointpost = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
        $response = $httpClient->post($endpointpost, [ 'body' => $content ]);
        $status_code = $response->getStatusCode(); 
        echo "<br> $status_code - $urlpost";
    }

    */