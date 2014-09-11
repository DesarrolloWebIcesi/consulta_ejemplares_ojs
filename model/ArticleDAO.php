<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleDAO
 *
 * @author 1130619373
 */
require_once("../commons/services/ErrorManager.class.php");
require_once ("../commons/services/MySQL.class.php");
require_once("../Config.php");
include_once ("Issue.php");
include_once ("Article.php");
class ArticleDAO {
    public static function getArticlesByIssue($issue){
        $mysql = new Mysql();
        $mysql->connect(Config::$bd_servidor, Config::$bd_esquema, Config::$bd_usuario, Config::$bd_contrasena);
        $query="select pa.article_id article_id, fojsbus_articlesetting(pa.article_id,'title','es_ES') title
                from published_articles pa
                where pa.issue_id=".$issue->getId().";";
        $resultSet = $mysql->query($query);
        
        $myArticles = array();
        foreach ($mysql->fetchAll($resultSet) as $articleData){
            $article = new Article($issue, $articleData['article_id'], $articleData['title']);
            $myArticles[]=$article;
        }
        
        if(empty($myArticles)){
            return null;
        }
        
        return $myArticles;
    }
}

?>
