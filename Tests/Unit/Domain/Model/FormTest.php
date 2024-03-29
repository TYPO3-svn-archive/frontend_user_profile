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
 * Test case for class Tx_FrontendUserProfile_Domain_Model_Form.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Frontend User Profile and Regestration
 *
 */
class Tx_FrontendUserProfile_Domain_Model_FormTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_FrontendUserProfile_Domain_Model_Form
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_FrontendUserProfile_Domain_Model_Form();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getFieldsReturnsInitialValueForObjectStorageContainingTx_FrontendUserProfile_Domain_Model_Field() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFields()
		);
	}

	/**
	 * @test
	 */
	public function setFieldsForObjectStorageContainingTx_FrontendUserProfile_Domain_Model_FieldSetsFields() { 
		$field = new Tx_FrontendUserProfile_Domain_Model_Field();
		$objectStorageHoldingExactlyOneFields = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFields->attach($field);
		$this->fixture->setFields($objectStorageHoldingExactlyOneFields);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFields,
			$this->fixture->getFields()
		);
	}
	
	/**
	 * @test
	 */
	public function addFieldToObjectStorageHoldingFields() {
		$field = new Tx_FrontendUserProfile_Domain_Model_Field();
		$objectStorageHoldingExactlyOneField = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneField->attach($field);
		$this->fixture->addField($field);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneField,
			$this->fixture->getFields()
		);
	}

	/**
	 * @test
	 */
	public function removeFieldFromObjectStorageHoldingFields() {
		$field = new Tx_FrontendUserProfile_Domain_Model_Field();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($field);
		$localObjectStorage->detach($field);
		$this->fixture->addField($field);
		$this->fixture->removeField($field);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFields()
		);
	}
	
}
?>