<?php
namespace Xp\Anythingslider\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Xiaoling Peng <pengmaradi@gmail.com>, pengmaradi
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * AnythingsliderController
 */
class AnythingsliderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * anythingsliderRepository
	 *
	 * @var \Xp\Anythingslider\Domain\Repository\AnythingsliderRepository
	 * @inject
	 */
	protected $anythingsliderRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$anythingsliders = $this->anythingsliderRepository->findAll();
		$this->view->assign('anythingsliders', $anythingsliders);
                $titles = '';
                foreach($anythingsliders as $key => $value) {
			$titles .= "'".$value->getTitle()."',";
		}
		$this->view->assign('titles', $titles);
	}

}