<?php
Croogo::hookComponent('*', 'EmailSmtp.EmailSmtp');

CroogoNav::add('extensions.children.example', array(
	'title' => 'EmailSmtp',
	'url' => '#',
	'children' => array(
		'example1' => array(
			'title' => __d('email_smtp', 'Settings'),
			'url' => array('plugin' => '', 'controller' => 'settings', 'action' => 'prefix', 'EmailSmtp'),
		)
	),
));
