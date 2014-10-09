<?php

class JurnalController extends Website_Controller_Action {
	
	public function detailAction () {
		$this->enableLayout();
		$title = $this->_getParam('text');
		$id = $this->_getParam('id');
		
		$entries = Object_Abstract::getById($id);
		$this->view->data = $entries;
	}
	
	public function previewJurnalAction()
	{
		$this->enableLayout();
		$id = $this->_getParam('id');
		$entries = Object_Abstract::getById($id);
		$this->view->data = $entries;
	}
}