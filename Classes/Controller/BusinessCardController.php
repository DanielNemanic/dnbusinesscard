<?php
declare(strict_types=1);
namespace DN\BusinessCard\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use DN\BusinessCard\Domain\Repository\BusinessCardRepository;
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2021 Daniel Nemanic <daniel@nemanic.eu>
 *
 ***************************************************************/

/**
 * BusinessCardController
 */
class BusinessCardController extends ActionController
{
	/**
  * @var \DN\BusinessCard\Domain\Repository\BusinessCardRepository
  */
	protected $feUserRepository = null;
	/****/
	protected $responseFactory = null;

	/**
	* @var \DN\BusinessCard\Domain\Repository\BusinessCardRepository $feUserRepository
	*/
	public function __construct(
		BusinessCardRepository $feUserRepository
	)
	{
		$this->feUserRepository = $feUserRepository;
	}

  /**
   * action list
   *
   * @return void
   */
  public function listAction()
  {
	  $feUser = [];
		$UserSelected = [];
	  if( !empty($this->settings['User']) ){
      $UserSelected = explode(',', $this->settings['User']);

      foreach( $UserSelected as $User ){
				$feUser[] = $this->feUserRepository->findByUid( $User );
      }
	  }
	  $this->view->assign( 'businessCards', $feUser );

		return $this->view->render();
  }
}