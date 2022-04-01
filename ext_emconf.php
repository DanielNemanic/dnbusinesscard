<?php
/**
 * User: dnemanic
 */
$EM_CONF[$_EXTKEY] = [
	'title' => 'DN Business Card',
	'description' => 'Business Card creator for FE User',
	'category' => 'plugin',
	'author' => 'Daniel Nemanic',
	'author_email' => 'daniel@nemanic.eu',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '10',
	'constraints' => [
		'depends' => [
			'typo3' => '>8.7',
		],
		'conflicts' => [
		],
		'suggests' => [
		],
	],
  'autoload' => [
    'psr-4' => [
        'DN\\BusinessCard\\' => 'Classes/',
    ],
  ],
];