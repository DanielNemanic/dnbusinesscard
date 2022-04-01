<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',
[
	'jobposition' => [
		'exclude' => 0,
      'label'  => 'LLL:EXT:dnbusinesscard/Resources/Private/Language/locallang.xlf:jobposition',
      'config' => array (
          'type' => 'input',
          'cols' => '50',
          'rows' => '5',
    )
	],
]);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'fe_users',
	'--div--;DN Business Card;,jobposition;;;1-1-1'
);