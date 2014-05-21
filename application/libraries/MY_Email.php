<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		Luis Baroni
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * MY Email Class
 *
 * Block of send emails in production environment
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		Luis Baroni
 * @link		https://github.com/lcsbaroni/MY_EMAIL_CODEIGNITER
 * @version		1.0
 */
class MY_Email extends CI_Email {

	/**
	 * Send Email
	 *
	 * @access	public
	 * @return	bool
	 */
	public function send() {
		//If is development environment, sends email only to developer
		if(ENVIRONMENT == 'development') {
			$this->_recipients = array("developer@domain.com");
			$this->_cc_array = array();
			$this->_bcc_array = array();
			$this->_headers['To'] = '';
			$this->_headers['Cc'] = '';
		};
		
		return parent::send();
	}
}
// END CI_Email class

/* End of file MY_Email.php */
/* Location: ./application/libraries/MY_Email.php */
