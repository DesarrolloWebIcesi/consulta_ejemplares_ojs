<?php

/**
 * Description of ControlConsultarEjemplares
 * Esta Clase se encarga de ejecutar la busqueda de los elementos ejemplares de la revista
 * @author David Andrés Manzano Herrera- damanzano
 * @since 2012-04-16
 */
include_once ("../model/Journal.php");
include_once ("../model/Issue.php");
include_once ("../model/Article.php");

error_reporting(E_ALL);
ini_set('display_errors', '1');

JournalControl::main();

class JournalControl {

    private function getJournal($journalId) {
        $myJournal = new Journal($journalId);
        return $myJournal;
    }

    private function journalHTML($journal) {
        $html = "";
        if ($journal->getId() != null) {            

            foreach ($journal->getIssues() as $issue) {
                $html.='<li class="issue">';
                $html.='<h2 class="issue-title"><a target="_blank" href="' . $issue->getUrl() . '">' . $issue->getEmisionTitle() . '</a></h2>';
                $html.='<ul>';
                foreach ($issue->getArticles() as $article) {
                    $html.='<li class="article"><h3 class="article-title"><a target="_blank" href="' . $article->getURL() . '">' . $article->getTitle() . '</a></h3></li>';
                }
                $html.='</ul></li>';
            }
        }else{
            $html='<span> La revista selecionada noexiste</span>';
        }

        return $html;
    }

    public static function main() {
        if (isset($_GET['journal']) && ($_GET['journal'] != null)) {
            $journalId = $_GET['journal'];
            echo self::journalHTML(self::getJournal($journalId));
        }
    }

}

?>
