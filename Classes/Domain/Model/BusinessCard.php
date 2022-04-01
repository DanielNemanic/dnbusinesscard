<?php
declare(strict_types=1);
namespace DN\BusinessCard\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2021 Daniel Nemanic <daniel@nemanic.eu>
 *
 ***************************************************************/

/**
 * BusinessCard
 */
class BusinessCard extends FrontendUser
{
	const TABLE_NAME = 'fe_users';
  /**
   * jobposition
   *
   * @var string
   */
  protected $jobposition = false;

  /**
   * @return string
   */
  public function getJobposition()
  {
      return $this->jobposition;
  }

  /**
   * @param string $jobposition
   */
  public function setJobposition(string $jobposition)
  {
      $this->jobposition = $jobposition;
  }
}