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
class Tx_FrontendUserProfile_Domain_Model_Frontenduser extends Tx_Extbase_Domain_Model_FrontendUser {

	/**
	 * forms
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<>
	 */
	protected $forms;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->forms = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a
	 *
	 * @param  $form
	 * @return void
	 */
	public function addForm($form) {
		$this->forms->attach($form);
	}

	/**
	 * Removes a
	 *
	 * @param  $formToRemove The  to be removed
	 * @return void
	 */
	public function removeForm($formToRemove) {
		$this->forms->detach($formToRemove);
	}

	/**
	 * Returns the forms
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<> $forms
	 */
	public function getForms() {
		return $this->forms;
	}

	/**
	 * Sets the forms
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<> $forms
	 * @return void
	 */
	public function setForms(Tx_Extbase_Persistence_ObjectStorage $forms) {
		$this->forms = $forms;
	}

}
?>