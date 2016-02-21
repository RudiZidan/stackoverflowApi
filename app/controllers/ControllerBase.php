<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
	protected function callStackAPI($url){
		$curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_HEADER, 0);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	    curl_setopt($curl, CURLOPT_USERAGENT, 'cURL');
	    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	    curl_setopt($curl, CURLOPT_ENCODING , "gzip");
	    $result = curl_exec($curl);
	    curl_close($curl);
	    return json_decode($result);
	}
}
