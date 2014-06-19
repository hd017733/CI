

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/* by Hootan Daneshfar */

class Site extends CI_Controller {

	public function index(){ 
		$this->cookieTest();
		
	}
	
	function cookieTest(){
		$login_email = 'zdanesh@roadrunner.com';
        $login_pass = '--------';
		// log in
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://login.facebook.com/login.php?login_attempt=1');
		curl_setopt($ch, CURLOPT_POSTFIELDS,'charset_test=%E2%82%AC%2C%C2%B4%2C%E2%82%AC%2C%C2%B4%2C%E6%B0%B4%2C%D0%94%2C%D0%84&locale=en_US&email='.urlencode($login_email).'&pass='.urlencode($login_pass).'&pass_placeholder=&charset_test=%E2%82%AC%2C%C2%B4%2C%E2%82%AC%2C%C2%B4%2C%E6%B0%B4%2C%D0%94%2C%D0%84');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_COOKIEJAR, str_replace('\\','/',dirname(__FILE__)).'/fb_cookies.txt');
		curl_setopt($ch, CURLOPT_COOKIEFILE, str_replace('\\','/',dirname(__FILE__)).'/fb_cookies.txt');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.6) Gecko/2009011913 Firefox/3.0.6 (.NET CLR 3.5.30729)");
		$html = curl_exec($ch);

		curl_close($ch);
		echo $html;
		
			
	}
		
}
