DROP FUNCTION IF EXISTS ojs_revistas.fojsbus_articlesetting;
CREATE FUNCTION ojs_revistas.`fojsbus_articlesetting`(particleid varchar(100), psetting varchar(100),plocale varchar(100)) RETURNS text CHARSET utf8
    READS SQL DATA
BEGIN
 DECLARE vresult text DEFAULT null;

  SELECT ars.setting_value INTO vresult
    FROM article_settings ars
   WHERE ars.setting_name = psetting
     AND ars.locale = plocale
     AND ars.article_id = particleid;

  RETURN vresult;
END;
