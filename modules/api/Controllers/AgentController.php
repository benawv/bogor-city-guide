<?php
use Api\Controller\Action;

class Api_AgentController extends Zend_Rest_Controller {

   public function init() {
       $this->_helper->viewRenderer->setNoRender(true);
       $this->_helper->AjaxContext()
               ->addActionContext('get', 'json')
               ->addActionContext('post', 'json')
               ->addActionContext('new', 'json')
               ->addActionContext('edit', 'json')
               ->addActionContext('put', 'json')
               ->addActionContext('delete', 'json')
               ->initContext('json');
   }

   public function indexAction () {
      
   }

   public function headAction () {

   }

   public function getAction () {

   }
   public function postAction () {

   }

   public function newAction () {

   }

   public function editAction () {

   }

   public function putAction () {

   }


   public function deleteAction () {

   }

	public function defaultAction () {

		// $mydata = json_decode($this->get_data('http://beta.allianz.co.id/webservice/rest/classes?apikey=591c3ff34e91e226dc58d3f087ea6e54c7769c6b38aafa83ec73831f15af7b1f'));
		echo "<pre>";
		echo 'asd';
		die();
		$idUser = 100763;
		$actor[] = json_decode($this->get_data('http://beta.allianz.co.id/webservice/rest/object/id/'.$idUser.'?apikey=591c3ff34e91e226dc58d3f087ea6e54c7769c6b38aafa83ec73831f15af7b1f',0))->data;
		// print_r($actor);
		print_r($actor); 
		$fields = array(
						"Actor" => $actor,
						"TypeLog" => "LOGIN",
                        "path" => "/agent-recruitment/log/",
                        "creationDate" => 1388389170,
                        "modificationDate" => 1388389170,
                        "userModification" => 30,
                        "className" => "log",
                        "parentId" => 103592,
                        "key" => "blog-api-test-2",
                        "published" => true,
                        "type" => "object",
   						"userOwner" => 30,
                        "properties" => null
					);
		// die();
		print_r($this->get_data('http://beta.allianz.co.id/webservice/rest/object?apikey=591c3ff34e91e226dc58d3f087ea6e54c7769c6b38aafa83ec73831f15af7b1f',$fields));
		die();
		$mydata = json_decode($this->get_data('http://beta.allianz.co.id/webservice/rest/object?apikey=591c3ff34e91e226dc58d3f087ea6e54c7769c6b38aafa83ec73831f15af7b1f&',$fields));
		echo "data<br>";
		print_r($mydata);

		die();
		$session = new Zend_Session_Namespace("Zend_Auth");
		$session->user = "username";
		Zend_Session:: namespaceUnset("Zend_Auth");
		echo $session->user;
		die();
		
		$this->enableLayout();
	}
}
