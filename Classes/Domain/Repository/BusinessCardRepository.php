<?php
declare(strict_types=1);
namespace DN\BusinessCard\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\Repository;
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2021 Daniel Nemanic <daniel@nemanic.eu>
 *
 ***************************************************************/

/**
 * The repository for BusinessCards
 */
class BusinessCardRepository extends Repository
{
	// Example for repository wide settings
	public function initializeObject() {
	  /** @var Typo3QuerySettings $querySettings */
	  $querySettings = new Typo3QuerySettings();
	  // don't add the pid constraint
	  $querySettings->setRespectStoragePage(false);
	  // define the enablecolumn fields to be ignored, true ignores all of them
	  $querySettings->setIgnoreEnableFields(true);
	  // don't add sys_language_uid constraint
	  $querySettings->setRespectSysLanguage(false);

	  $this->setDefaultQuerySettings($querySettings);
	}
}