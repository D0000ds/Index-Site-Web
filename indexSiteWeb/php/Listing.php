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
            echo "<div class='ListDiv'><h2>".$l->getName()."</h2><br>";
            echo "<a href=".$l->getLink()." target='_blank'>".$l->getLink()."</a><br>";
            echo "<p>".$l->getDescription()."</p><br></div>";
        }
    }
}