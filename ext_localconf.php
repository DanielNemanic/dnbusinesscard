<?php
defined('TYPO3_MODE') or die();
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2021 Daniel Nemanic <daniel@nemanic.eu>
 *
 ***************************************************************/
call_user_func( function() {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'dnbusinesscard',
		'BusinessCard',
		[
			\DN\BusinessCard\Controller\BusinessCardController::class => 'list',
		],
		// non-cacheable actions
		[
			\DN\BusinessCard\Controller\BusinessCardController::class => 'list',
		]
	);

		/* Add BE Plugin to Content Element */
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
		mod.wizards.newContentElement.wizardItems.dn {
		  header = DN
			elements {
				dnbusinesscard {
					iconIdentifier = dnbusinesscard
					title = Business Card
					description = Business Card
					tt_content_defValues {
						CType = list
						list_type = dnbusinesscard_dnbusinesscard
					}
				}
			}
			show = *
		}
	');

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon(
		'dnbusinesscard',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
		['source' => 'EXT:dnbusinesscard/Resources/Public/Icons/Extension.svg']
	);
});



