<?php
namespace Netzmacher\Slick\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014-2017 - Dirk Wildt <http://wildt.at.die-netzmacher.de/>
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
 * @author Dirk Wildt <http://wildt.at.die-netzmacher.de/>
 */
class SlickItemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer
     */
    protected $contentObj;

    /**
     * @var mixed
     */
    protected $data;

    /**
     * @return void
     */
    public function initializeAction(){
        $this->contentObj = $this->configurationManager->getContentObject();
        $this->data = $this->contentObj->data;
    }

    /**
     * @return void
     */
    public function renderAction(){
        $this->view->assign('data',$this->data);
    }

}