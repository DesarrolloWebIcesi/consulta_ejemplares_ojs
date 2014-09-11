DROP FUNCTION IF EXISTS ojs_revistas.fojsbus_issuesetting;
CREATE FUNCTION ojs_revistas.`fojsbus_issuesetting`(pissueid varchar(100), psetting varchar(100),plocale varchar(100)) RETURNS text CHARSET utf8
    READS SQL DATA
BEGIN
 DECLARE vresult text DEFAULT null;

  SELECT iss.setting_value INTO vresult
    FROM issue_settings iss
   WHERE iss.setting_name = psetting
     AND iss.locale = plocale
     AND iss.issue_id = pissueid;

  RETURN vresult;
END;