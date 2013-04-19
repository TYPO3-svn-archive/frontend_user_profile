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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_FrontendUserProfile_Domain_Model_Frontenduser.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Frontend User Profile & Registration
 *
 */
class Tx_FrontendUserProfile_Domain_Model_FrontenduserTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_FrontendUserProfile_Domain_Model_Frontenduser
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_FrontendUserProfile_Domain_Model_Frontenduser();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getFormsReturnsInitialValueForObjectStorageContaining() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getForms()
		);
	}

	/**
	 * @test
	 */
	public function setFormsForObjectStorageContainingSetsForms() { 
		$form = new ();
		$objectStorageHoldingExactlyOneForms = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneForms->attach($form);
		$this->fixture->setForms($objectStorageHoldingExactlyOneForms);

		$this->assertSame(
			$objectStorageHoldingExactlyOneForms,
			$this->fixture->getForms()
		);
	}
	
	/**
	 * @test
	 */
	public function addFormToObjectStorageHoldingForms() {
		$form = new ();
		$objectStorageHoldingExactlyOneForm = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneForm->attach($form);
		$this->fixture->addForm($form);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneForm,
			$this->fixture->getForms()
		);
	}

	/**
	 * @test
	 */
	public function removeFormFromObjectStorageHoldingForms() {
		$form = new ();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($form);
		$localObjectStorage->detach($form);
		$this->fixture->addForm($form);
		$this->fixture->removeForm($form);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getForms()
		);
	}
	
}
?>