/*1. revista por identificador*/
select j.journal_id id, j.path path, fojsbus_journalsetting(j.journal_id,'title','es_ES') title
from journals j
WHERE j.journal_id=5;


/*2. emisiones por revista*/
select i.issue_id, i.volume, i.number, fojsbus_issuesetting(i.issue_id,'title','es_ES') title
from issues i
where i.journal_id=5;

/*3. artículos por emisión*/
select pa.article_id, fojsbus_articlesetting(pa.article_id,'title','es_ES') title
from published_articles pa
where pa.issue_id=134;


select fojsbus_journalsetting(5,'title','es_ES') title
from dual;