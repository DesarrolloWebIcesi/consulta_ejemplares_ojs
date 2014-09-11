<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JournalDAO
 *
 * @author David Andrés Manzano Herrera - damanzano
 */
require_once("../commons/services/ErrorManager.class.php");
require_once ("../commons/services/MySQL.class.php");
require_once("../Config.php");
include_once ("Journal.php");
include_once ("IssueDAO.php");

class JournalDAO {

    public static function getJournalById($journal) {
        $myJournal = $journal;
        $mysql = new Mysql();
        $mysql->connect(Config::$bd_servidor, Config::$bd_esquema, Config::$bd_usuario, Config::$bd_contrasena);
        $query = "select j.journal_id journal_id, j.path path, fojsbus_journalsetting(j.journal_id,'title','es_ES') title
                from journals j
                where j.journal_id=" . $myJournal->getId() . ";";
        $resultSet = $mysql->query($query);

        if ($resultSet != false) {
            $journalData = $mysql->fetchAll($resultSet);
            if ($journalData[0]['journal_id'] != null && $journalData[0]['journal_id'] != '') {
                $myJournal->setTitle($journalData[0]['title']);
                $myJournal->setUrl(Config::$ojs . "/" . $journalData[0]['path']);
                $myJournal->setIssues(IssueDAO::getIssuesByJournal($myJournal));

                return $myJournal;
            }
        }
        return null;
    }

}

?>
