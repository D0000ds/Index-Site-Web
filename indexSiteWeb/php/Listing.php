<?php

class Listing{
    private array $listLink;

    public function __construct(){
        $this->listLink = [];
        
    }

    // add link to the array
    public function addLink(Link $link){
        $this->listLink[] = $link;
    }

    // Function who make a list of link
    public function listLink(){
        foreach($this->listLink as $l){
            echo "<div class='ListDiv'>".$l->getName()."<br>";
            echo "<span>".$l->getLink()."</span><br>";
            echo "<p>".$l->getDescription()."</p><br></div>";
        }
    }
}