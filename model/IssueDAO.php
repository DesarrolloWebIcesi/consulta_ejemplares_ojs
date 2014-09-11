<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IssueDAO
 *
 * @author David Andrés Manzano Herrera - damanzano
 */
require_once("../commons/services/ErrorManager.class.php");
require_once ("../commons/services/MySQL.class.php");
require_once("../Config.php");
include_once ("Journal.php");
include_once ("Issue.php");
include_once ("ArticleDAO.php");

class IssueDAO {

    public static function getIssuesByJournal($journal) {
        $mysql = new Mysql();
        $mysql->connect(Config::$bd_servidor, Config::$bd_esquema, Config::$bd_usuario, Config::$bd_contrasena);
        $query = "select i.issue_id issue_id, i.volume volume, i.number number, i.year year, fojsbus_issuesetting(i.issue_id,'title','es_ES') title
                from issues i LEFT JOIN custom_issue_orders o ON (o.issue_id = i.issue_id) 
                where i.journal_id=" . $journal->getId() . "
                and i.published = 1 
                order by o.seq ASC, i.current DESC, i.date_published DESC;";
        $resultSet = $mysql->query($query);

        $myIssues = array();
        if ($resultSet != false) {
            foreach ($mysql->fetchAll($resultSet) as $issueData) {
                $issue = new Issue($journal, $issueData['issue_id'], $issueData['volume'], $issueData['number'], $issueData['year'],$issueData['title']);
                $issue->setArticles(ArticleDAO::getArticlesByIssue($issue));
                $myIssues[] = $issue;
            }
        }
        if (empty($myIssues)) {
            return null;
        }

        return $myIssues;
    }

}

?>
