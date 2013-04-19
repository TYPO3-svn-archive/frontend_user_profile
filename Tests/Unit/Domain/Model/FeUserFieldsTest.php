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
 * Test case for class Tx_FrontendUserProfile_Domain_Model_FeUserFields.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Frontend User Profile & Registration
 *
 */
class Tx_FrontendUserProfile_Domain_Model_FeUserFieldsTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_FrontendUserProfile_Domain_Model_FeUserFields
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_FrontendUserProfile_Domain_Model_FeUserFields();
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
	public function getTypeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForIntegerSetsType() { 
		$this->fixture->setType(12);

		$this->assertSame(
			12,
			$this->fixture->getType()
		);
	}
	
	/**
	 * @test
	 */
	public function getRequiredReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getRequired()
		);
	}

	/**
	 * @test
	 */
	public function setRequiredForBooleanSetsRequired() { 
		$this->fixture->setRequired(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getRequired()
		);
	}
	
	/**
	 * @test
	 */
	public function getMinReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMin()
		);
	}

	/**
	 * @test
	 */
	public function setMinForIntegerSetsMin() { 
		$this->fixture->setMin(12);

		$this->assertSame(
			12,
			$this->fixture->getMin()
		);
	}
	
	/**
	 * @test
	 */
	public function getMaxReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMax()
		);
	}

	/**
	 * @test
	 */
	public function setMaxForIntegerSetsMax() { 
		$this->fixture->setMax(12);

		$this->assertSame(
			12,
			$this->fixture->getMax()
		);
	}
	
}
?>