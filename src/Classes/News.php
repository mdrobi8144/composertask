<?php
    namespace Composer\Vendor\Classes;
    use Symfony\Component\DomCrawler\Crawler;

    class News{
        private $url_to_crawler = "",
                $dom = "",
                $crawler = "",
                $headlines = "";
        function __construct($url){
            $this->url_to_crawler = $url;
            $this->dom = file_get_contents($this->url_to_crawler);
           // return $this->dom;
           $this->crawler = new Crawler($this->dom);
        }

        function get_headlines(){
            if($this->crawler){

                $this->headlines = [];
                $this->crawler->filter('.headline a')->each(function(Crawler $node, $i){
                    $this->headlines[$i] = ['text' => $node->text(), 'link' => $node->attr('href')];
                });
                return $this->headlines;

            }else{
                return false;
            }
        }
    }