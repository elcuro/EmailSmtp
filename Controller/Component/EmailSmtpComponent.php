<?php

App::uses('Component', 'Controller');

/**
 * EmailSmtp Component
 *
 * Set defalt deliver to 'smtp' and set config for email component
 *
 * @category Component
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>, Juraj Jancuska <jjancuska@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class EmailSmtpComponent extends Component {

/**
 * Called after the Controller::beforeFilter() and before the controller action
 *
 * @param object $controller Controller with components to startup
 * @return void
 */
	public function startup(Controller $controller) {
		
		if (is_object($controller->Email)) {
			$controller->Email->delivery = 'smtp';
			$controller->Email->smtpOptions = Configure::read('EmailSmtp');
		}
	}

/**
 * Called after the Controller::beforeRender(), after the view class is loaded, and before the
 * Controller::render()
 *
 * @param object $controller Controller with components to beforeRender
 * @return void
 */
	public function beforeRender(Controller $controller) {
	}

/**
 * Called after Controller::render() and before the output is printed to the browser.
 *
 * @param object $controller Controller with components to shutdown
 * @return void
 */
	public function shutdown(Controller $controller) {
	}

}
