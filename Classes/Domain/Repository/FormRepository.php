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
class Tx_FrontendUserProfile_Domain_Repository_FormRepository extends Tx_Extbase_Persistence_Repository {

    /**
     * @see http://api.typo3.org/typo3cms/47/html/class_tx___extbase___persistence___typo3_query_settings.html
     */
    public function __construct() {
        parent::__construct();

        /** @var $newDefaultQuerySettings Tx_Extbase_Persistence_Typo3QuerySettings */
        $newDefaultQuerySettings = t3lib_div::makeInstance('Tx_Extbase_Persistence_Typo3QuerySettings');
        $newDefaultQuerySettings->setRespectStoragePage(FALSE);
        $this->setDefaultQuerySettings($newDefaultQuerySettings);
    }
    /**
     * @param int $id
     */
    public function findByID($id) {
        $query = $this->createQuery();

        $query->matching(

            $query->
                equals('uid', '1')

        );


        $result = $query->execute();

        return $result;
    }
}
?>