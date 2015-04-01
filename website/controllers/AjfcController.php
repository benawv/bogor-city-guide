<?php

class AjfcController extends Website_Controller_Action {
	public function init() {
		parent::init();
		
		$this->enableLayout();
		$this->setLayout('ajfc');
	}
	
	public function pageAjfcAction () {
		
	}
}