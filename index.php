<?php
error_reporting(0);

$nick = $_GET['nick'];

$url = 'https://instagram.com/' . $nick;
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
 

    $meta_tags = $dom->getElementsByTagName('meta');
  foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:image' ) {
            $pp= $meta->getAttribute('content');   }    }
    foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:description' ) {
            $sonveri= $meta->getAttribute('content');   }    }
 $dizi = explode (" - ",$sonveri); 
$dizi = explode (" ",$dizi[0]); 
$m = $dizi[0];
$mm = $dizi[2];
$mmm= $dizi[4]; 


?>
