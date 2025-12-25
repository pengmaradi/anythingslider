#
# Table structure for table 'tx_anythingslider_domain_model_anythingslider'
#
CREATE TABLE tx_anythingslider_domain_model_anythingslider (

	title varchar(255) DEFAULT '' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	description text NOT NULL,
	source text NOT NULL,
	video int(11) unsigned NOT NULL default '0',
	image int(11) unsigned NOT NULL default '0'
);
