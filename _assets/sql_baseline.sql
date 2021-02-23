

-- ALTER TABLE `post_list` ADD `pl_post_type` INT(10) NOT NULL COMMENT '1-lbm post, 2- YoutubeChannel, 3-LandingPage' AFTER `pl_txt`;


--
-- Database: `fb_posting_app`
--
	-- -------------------------------------------------------
	-- -------- TABLE POST_LIST ------------------------------
	-- -------------------------------------------------------


DROP TABLE IF EXISTS `post_list`;

CREATE TABLE IF NOT EXISTS `post_list` (
  `pl_id` 				INT(10) NOT NULL,
  `pl_post_title`		VARCHAR(100)  DEFAULT NULL,
  `pl_url`				VARCHAR(100)  DEFAULT NULL,
  `pl_url_utm`			VARCHAR(200)  DEFAULT NULL,
  `pl_txt`				VARCHAR(500)  DEFAULT NULL,
  `pl_post_type` 		INT(10) NOT NULL 					   COMMENT '1-lbm post, 2- YoutubeChannel, 3-LandingPage' AFTER `pl_txt`;
  `pl_post_weight` 		TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT ' 0-off_posting , 1-1x, 2-2x, etc.', 

	  PRIMARY KEY (pl_id)) AUTO_INCREMENT=1000  ENGINE = InnoDB;
