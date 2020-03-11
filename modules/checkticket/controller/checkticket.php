<?php
/**
 * @Project BNC v2 -> Module Home
 * @File home/main.php
 * @Author Quang Chau Tran (nquangchauvn@gmail.com)
 * @Createdate 10/29/2014, 09:38 AM
 */
if (!defined('BNC_CODE')) {
	exit('Access Denied');
}
Class Checkticket extends Controller {
	public function index() {

		global $web; 
		
		
		$this->setContent($data, 'index');
	} 

}