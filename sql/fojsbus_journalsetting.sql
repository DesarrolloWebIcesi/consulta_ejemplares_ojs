DROP FUNCTION IF EXISTS ojs_revistas.fojsbus_journalsetting;

DELIMITER $$
CREATE DEFINER=`o_revistas`@`%` FUNCTION ojs_revistas.`fojsbus_journalsetting`(pjournalid varchar(100), psetting varchar(100),plocale varchar(100)) RETURNS text CHARSET utf8
    READS SQL DATA
BEGIN
	DECLARE vresult text DEFAULT null;

  SELECT js.setting_value INTO vresult
    FROM journal_settings js
   WHERE js.setting_name = psetting
     AND js.locale = plocale
     AND js.journal_id = pjournalid;

  RETURN vresult;
END$$
