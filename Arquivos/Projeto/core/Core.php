<?php
class Core {

	public function run() {
		
		$url = '/';
		$params = array();
		
		if(isset($_GET['url'])) {
			$url .= $_GET['url'];
		}
	
		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);
		
			array_shift($url);
		
			$NameController = $url[0].'Controller';

			array_shift($url);

			if(isset($url[0]) && !empty($url[0])) {

				$NameFunction = $url[0];

				array_shift($url);

			} else {
				$NameFunction = 'index';
			}

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$NameController = 'PessoaController';
			$NameFunction = 'index';
		}

		if(!file_exists('controllers/'.$NameController.'.php') || !method_exists($NameController, $NameFunction)) {
			$NameController = 'notfoundController';
			$NameFunction = 'index';
		}

		$Controller = new $NameController();

		call_user_func_array(array($Controller, $NameFunction), $params);
		
	}

}