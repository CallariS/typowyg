CREATE TABLE tt_content(
	uid int( 11 ) unsigned 	DEFAULT '0' NOT NULL auto_increment,
  pid int( 11 )			 			DEFAULT '0' NOT NULL,

  typowyg_trumbowyg_config								TEXT									DEFAULT 	'',
	typowyg_trumbowyg_plugins								TEXT									DEFAULT 	'',
  typowyg_trumbowyg_id    								VARCHAR( 255 )        DEFAULT 	'XC Typowyg',

	PRIMARY KEY ( uid ),
  KEY parent ( pid ));