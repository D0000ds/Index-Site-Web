<?php

class Link{
    private string $name;
    private string $link;
    private string $description;
    private Listing $listing;

    public function __construct($name, $link, $description, $listing){
        $this->name = $name;
        $this->link = $link;
        $this->description = $description;
        $this->listing = $listing;
        
        $listing->addLink($this);
    }

        
    // Get the value of name
    public function getName()
    {
        return $this->name;
    }
    // Set the value of name
    public function setName($name)
    {
        $this->name = $name;
    }
         
    // Get the value of link    
    public function getLink()
    {
        return $this->link;
    }

    // Set the value of link
    public function setLink($link)
    {
        $this->link = $link;
    }
    
    // Get the value of description
    public function getDescription()
    {
        return $this->description;
    }   
    // Set the value of description
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function __toString(){
        return $this->name." ".$this->link." ".$this->description;
    }
}