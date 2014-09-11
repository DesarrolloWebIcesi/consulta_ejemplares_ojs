<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author 1130619373
 */
include_once ("Journal.php");
include_once ("Issue.php");
class Article {
    private $id;
    private $issue;
    private $title;
    private $url;
    
    function __construct($issue, $id, $title) {
        $this->id = $id;
        $this->title = $title;
        $this->issue=$issue;
        $this->url=  $this->issue->getJournal()->getUrl()."/article/view/".$this->id;
    }

    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIssue() {
        return $this->issue;
    }

    public function setIssue($issue) {
        $this->issue = $issue;
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
