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
class Tx_FrontendUserProfile_Domain_Model_Field extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Title des Eingabefeldes
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * Wähle einen Type aus der Liste
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $type;

	/**
	 * Muss das Feld ausgefüllt werden?
	 *
	 * @var boolean
	 */
	protected $required = FALSE;

	/**
	 * Mindeste Zeichenanzahll
	 *
	 * @var float
	 */
	protected $min;

	/**
	 * Maximale Zeichenanzahl
	 *
	 * @var float
	 */
	protected $max;

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the type
	 *
	 * @return integer $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param integer $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Returns the required
	 *
	 * @return boolean $required
	 */
	public function getRequired() {
		return $this->required;
	}

	/**
	 * Sets the required
	 *
	 * @param boolean $required
	 * @return void
	 */
	public function setRequired($required) {
		$this->required = $required;
	}

	/**
	 * Returns the boolean state of required
	 *
	 * @return boolean
	 */
	public function isRequired() {
		return $this->getRequired();
	}

	/**
	 * Returns the min
	 *
	 * @return float $min
	 */
	public function getMin() {
		return $this->min;
	}

	/**
	 * Sets the min
	 *
	 * @param float $min
	 * @return void
	 */
	public function setMin($min) {
		$this->min = $min;
	}

	/**
	 * Returns the max
	 *
	 * @return float $max
	 */
	public function getMax() {
		return $this->max;
	}

	/**
	 * Sets the max
	 *
	 * @param float $max
	 * @return void
	 */
	public function setMax($max) {
		$this->max = $max;
	}

}
?>