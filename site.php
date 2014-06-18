<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){ 
		$this->cookieTest();
	}
	
	function cookieTest(){
		$this->load->library('curl');
		$opt = array(CURLOPT_COOKIEJAR => 'cookies.txt', CURLOPT_RETURNTRANSFER => true, CURLOPT_USERAGENT =>"Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.6) Gecko/2009011913 Firefox/3.0.6 (.NET CLR 3.5.30729)");
		$array = array('email' => 'zdanesh@roadrunner.com','password' => 'welcome1');
		echo $this->curl->simple_post('https://www.facebook.com/login.php?login_attempt=1', $array, $opt);
	
	}
	
}