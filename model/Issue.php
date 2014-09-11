<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Issue
 *
 * @author David Andrés Manzano Herrera - damanzano
 */
include_once ("Journal.php");
include_once ("Article.php");
class Issue {
    private $articles=array();
    private $emisionTitle;
    private $id;
    private $journal;
    private $url;
    
    function __construct($journal, $id, $volume=null, $number=null, $year=null, $title=null) {
        $this->id = $id;
        $this->journal=$journal;
        
        $this->emisionTitle="";
        if($title!=null && $title!=''){
            $this->emisionTitle=$title;
        }else{
            if($volume!=null && $volume!=''){
                $this->emisionTitle.="Vol.".$volume." ";
            }
            /*if(($volume!=null && $volume!='') && (($number!=null && $number!='')|| ($year!=null && $year!=''))){
                $this->emisionTitle.=", ";
            }*/
            if($number!=null && $number!=''){
                $this->emisionTitle.="No.".$number." ";
            }
            if($year!=null && $year!=''){
                $this->emisionTitle.="(".$year.") ";
            }
            $this->emisionTitle=trim($this->emisionTitle);
        }
        
        $this->url=  $this->journal->getUrl()."/issue/view/".$this->id;
        
    }

    
    public function getArticles() {
        return $this->articles;
    }

    public function setArticles($articles) {
        $this->articles = $articles;
    }
    
    public function getEmisionTitle() {
        return $this->emisionTitle;
    }

    public function setEmisionTitle($emisionTitle) {
        $this->emisionTitle = $emisionTitle;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getJournal() {
        return $this->journal;
    }

    public function setJournal($journal) {
        $this->journal = $journal;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
}

?>
