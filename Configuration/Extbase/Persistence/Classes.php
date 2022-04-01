<?php
declare(strict_types=1);

//return [
//    \TYPO3\CMS\Extbase\Domain\Model\FrontendUser::class => [
//        'subclasses' => [
//            \DN\BusinessCard\Domain\Model\BusinessCard::class
//        ]
//    ],
//    \DN\BusinessCard\Domain\Model\BusinessCard::class => [
//        'tableName' => \DN\BusinessCard\Domain\Model\BusinessCard::TABLE_NAME,
//        'recordType' => 0,
//    ]
//];

return [
	\DN\BusinessCard\Domain\Model\BusinessCard::class => [
		'tableName' => \DN\BusinessCard\Domain\Model\BusinessCard::TABLE_NAME,
		'properties' => [
			'jobposition' => [
				'fieldName' => 'jobposition',
			]
		]
	]
];