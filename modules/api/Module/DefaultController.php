<?php

use Website\Controller\Action;

class DefaultController extends Action {
	
	public function defaultAction () {

		// $mydata = json_decode($this->get_data('http://beta.allianz.co.id/webservice/rest/classes?apikey=591c3ff34e91e226dc58d3f087ea6e54c7769c6b38aafa83ec73831f15af7b1f'));
		echo "<pre>";
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

	public function SignUpAction () {
		// Agent sign up process
		// get param
		// $Name =$this->_getParam('Name');
		// $Email =$this->_getParam('Email');
		// $Phone =$this->_getParam('Phone');
		// $DOB =$this->_getParam('DOB');
		// $AgentCode =$this->_getParam('AgentCode');
		// $Office =$this->_getParam('Office');

		$mydata = $this->get_data('http://www.google.com');
		// $this->enableLayout();
	}

	public function get_data($url,$data)
	{
		if(function_exists('curl_init')){
			$ch = curl_init();
			$timeout = 5;
			curl_setopt($ch,CURLOPT_URL,$url);
			if($data!=0){
				$dataString = json_encode($data);
				curl_setopt($ch,CURLOPT_POST, 1);//send data with post
				curl_setopt($ch,CURLOPT_POSTFIELDS, $dataString);//send data with post
			}
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
		} else 'curl is not available, please install';
	}
}
