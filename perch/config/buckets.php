<?php 
	return array(
		'people' => array(
			'web_path'  => '/imagez/people',
			'file_path' => realpath(PERCH_RESFILEPATH.DIRECTORY_SEPARATOR.'people'),
		),
		'screenshots' => array(
			'web_path'  => '/imagez/screenshots',
			'file_path' => realpath(PERCH_RESFILEPATH.DIRECTORY_SEPARATOR.'screenshots'),
		),
		'pdfs' => array(
			'web_path'  => '/pdfs',
			'file_path' => realpath($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR.'pdfs'),
		),
		'backgrounds' => array(
			'web_path'  => '/imagez/backgrounds',
			'file_path' => realpath(PERCH_RESFILEPATH.DIRECTORY_SEPARATOR.'backgrounds'),
		)
	);
?>