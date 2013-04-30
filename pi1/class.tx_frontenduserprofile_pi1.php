<?php
/**
 * Created by JetBrains PhpStorm.
 * User: knopspa
 * Date: 22.04.13
 * Time: 08:57
 * To change this template use File | Settings | File Templates.
 */

class tx_frontenduserprofile_pi1 extends tslib_pibase {
    var $prefixId      = 'tx_frontenduserprofile_pi1';		// Same as class name
    var $scriptRelPath = 'pi1/class.tx_frontenduserprofile_pi1.php';	// Path to this script relative to the extension dir.
    var $extKey        = 'frontend_user_profile';	// The extension key.
    var $pi_checkCHash = true;



    function  __construct() {
    //die("echo");
    }

    /**
     * The main method of the PlugIn
     *
     * @param	string		$content: The PlugIn content
     * @param	array		$conf: The PlugIn configuration
     * @return	The content that is displayed on the website
     */
    function main($content, $conf) {
       // die('NOPE');
        $this->conf = $conf;
        $this->pi_setPiVarDefaults();
        $this->pi_loadLL();


        $content='
			<strong>This is a few paragraphs:</strong><br />
This is line 1
This is line 2
<h3>This is a form:</h3>
			<form action="" method="POST">
				<input type="text" name="'.$this->prefixId.'[input_field]" value="'.htmlspecialchars($this->piVars['input_field']).'">
				<input type="submit" name="'.$this->prefixId.'[submit_button]" value="'.htmlspecialchars($this->pi_getLL('submit_button_label')).'">
			</form>
			<br />
You can click here to
';

        return ($content);
        //return $this->pi_wrapInBaseClass($content);
    }
}

?>