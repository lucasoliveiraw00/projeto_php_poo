<?php
class controller {

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	
	public function loadViewTemplate($viewName, $viewData = array()) {
		require 'views/Painel.php';
	}


}