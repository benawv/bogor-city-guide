<?php

class DefaultController extends Website_Controller_Action {
	
	public function defaultAction () {
	
		$entries = Object_Marketingoffice::getList();
				
		$this->view->offices = json_encode($entries);
		
		$this->enableLayout();
		
	}
	
	public function indexAction() {
	}
}
