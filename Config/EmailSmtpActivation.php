<?php
/**
 * EmailSmtp Activation
 *
 * @package  Croogo
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>, Juraj Jancuska <jjancuska@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class EmailSmtpActivation {

/**
 * onActivate will be called if this returns true
 *
 * @param  object $controller Controller
 * @return boolean
 */
	public function beforeActivation(&$controller) {
		return true;
	}

/**
 * Called after activating the plugin in ExtensionsPluginsController::admin_toggle()
 *
 * @param object $controller Controller
 * @return void
 */
	public function onActivation(&$controller) {
        $controller->Setting->write('EmailSmtp.host', 'ssl://smtp.gmail.com', array(
            'editable' => 1, 
            'description' => __d('email_smtp', 'Smtp host')));   
        $controller->Setting->write('EmailSmtp.username', 'username', array(
            'editable' => 1, 
            'description' => __d('email_smtp', 'Smtp user')));        
        $controller->Setting->write('EmailSmtp.password', '', array(
            'editable' => 1, 
            'input_type' => 'password',
            'description' => __d('email_smtp', 'Smtp password')));                 
        $controller->Setting->write('EmailSmtp.port', '465', array(
            'editable' => 1, 
            'description' => __d('email_smtp', 'Smtp port')));
        $controller->Setting->write('EmailSmtp.timeout', '30', array(
            'editable' => 1, 
            'description' => __d('email_smtp', 'Smtp timeout')));        
	}

/**
 * onDeactivate will be called if this returns true
 *
 * @param  object $controller Controller
 * @return boolean
 */
	public function beforeDeactivation(&$controller) {
		return true;
	}

/**
 * Called after deactivating the plugin in ExtensionsPluginsController::admin_toggle()
 *
 * @param object $controller Controller
 * @return void
 */
	public function onDeactivation(&$controller) {

		$controller->Setting->deleteAll(array('Setting.key LIKE' => 'EmailSmtp.%'));
	}
}
