<?php
    include_once __DIR__ ."/vendor/autoload.php";

    use Composer\Vendor\Classes\News;
    
    $dom = new News('https://www.washingtonpost.com/');
    $headlines = $dom->get_headlines();
    //var_dump($headlines);
    
    include_once ("templates/news.php");