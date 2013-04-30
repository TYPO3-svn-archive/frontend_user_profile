<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
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
 *
 *
 * @package frontend_user_profile
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_FrontendUserProfile_Controller_FormController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * formRepository
	 *
	 * @var Tx_FrontendUserProfile_Domain_Repository_FormRepository
	 */
	protected $formRepository;

	/**
	 * injectFormRepository
	 *
	 * @param Tx_FrontendUserProfile_Domain_Repository_FormRepository $formRepository
	 * @return void
	 */
	public function injectFormRepository(Tx_FrontendUserProfile_Domain_Repository_FormRepository $formRepository) {
		$this->formRepository = $formRepository;
	}


    /**
     * @param Tx_FrontendUserProfile_Domain_Model_Form $form
     */
    public function showAction(Tx_FrontendUserProfile_Domain_Model_Form $form = NULL) {
        $forms = ($this->formRepository->findByUid($this->settings['forms']));
        $this->view->assign('form', $forms);
    }

    /**
     * @param string $tx_inputfield
    **/
    public function saveAction($tx_inputfield=NULL)
    {
        var_dump($this->request->getArgument('tx_inputfield') );

        $this->view->assign('form', $tx_inputfield);
      //  $arr[] = unserialize($_POST['arr']);
     //   echo(time());
    //    var_dump($_GET['arr_'.'*']);

    }

	/**
	 * action
	 *
	 * @return void
	 */
	public function Action() {

	}

}
?>