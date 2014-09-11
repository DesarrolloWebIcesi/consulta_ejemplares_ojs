<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Journal
 *
 * @author David Andrés Manzano Herrera - damanzano
 */
include_once ("JournalDAO.php");
include_once ("Issue.php");
class Journal {
    private $id;
    private $issues=array();
    private $title;
    private $url;
    
    function __construct($id) {
        $this->id = $id;
        $buildedJuornal= JournalDAO::getJournalById($this);
        if($buildedJuornal!=null){
            $this->title=$buildedJuornal->getTitle();
            $this->url=  $buildedJuornal->getUrl();
            $this->issues=$buildedJuornal->getIssues();
        }else{
            $this->id=null;
        }
        
    }

    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getIssues() {
        return $this->issues;
    }

    public function setIssues($issues) {
        $this->issues = $issues;
    }
    
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
    
}

?>
