<?php

use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

$events->afterBuild(function (Jigsaw $jigsaw) {
    $baseUrl = $jigsaw->getConfig('baseUrl');
    $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

    $myfile = fopen("sitemap.txt", "w");
    $excluir = [$baseUrl,$baseUrl.'/404.html',$baseUrl.'/favicon.png',$baseUrl.'/robots.txt',$baseUrl.'/sitemap.xml',];

    foreach($jigsaw->getOutputPaths() as $newpath){
        $allpatch = $baseUrl . $newpath;
        if(stripos($newpath, '/assets')===false && stripos($newpath, 'landing')===false && !in_array($allpatch,  $excluir)){
            $allpatch = $allpatch .'/';
            fwrite( $myfile, $baseUrl."$newpath \n");
            $sitemap->addItem($allpatch, time());
        }
        if(stripos($newpath, '/assets')===false && stripos($newpath, 'landing')===false && in_array($allpatch,  $excluir)){
            fwrite( $myfile, $baseUrl."$newpath \n");
            $sitemap->addItem($allpatch, time());
        }
    }
    fclose($myfile);
    $sitemap->write();
});
