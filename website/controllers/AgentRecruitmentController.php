<?php

class AgentRecruitmentController extends Website_Controller_Action {

	public function signUpAction(){

		// create object in pimcore ==============================================================
		$name = "";
		$email = "";
		$phone = "";
		$dob = "";
		$agentCode = "";
		$office = "";
		$idFolder=Object_Abstract::getByPath("/agent-locator-data")->o_id;//get folder id object

		$agent = new Object_AgentLocatorData();
		$agent->setname($name);
		$agent->setemail($email);
		$agent->setphone($phone);
		$agent->setdob($dob);
		$agent->setagentCode($agentCode);
		$agent->setoffice($office);
		$agent->setKey(strtolower(date("YmdHis")));
		$agent->setO_parentId($idFolder);
		$agent->setIndex(0);
		$agent->setPublished(1);
		if($agent->save()){
			$data = array(
			     "IsSuccess" => "Yes",
			     "CreatedAt" => "YYYY/MM/DD",
			     "Message" => "Agent successfully signed up",
			     "Agent" => array(
			               "Name" => "NAME",
			               "Email" => "EMAIL",
			               "Phone" => "081234234124",
			               "DOB" => "YYYY/MM/DD",
			               "AgentCode" => "112223333",
			               "Office" => array(
			                      "LocationCode" => "abcdefghij",
			                      "LocationName" => "abcdefghij",
			                      "OfficeEmail" => "abcdefghij",
			                      "PostCode" => "abcdefghij",
			                      "PhoneAreaCode" => "abcdefghij",
			                      "PhoneNumber" => "abcdefghij",
			                      "FaxAreaCode" => "abcdefghij",
			                      "FaxNumber" => "abcdefghij",
			                      "LatLng" => "abcdefghij"
			          )
				)
			);
		}else{
			$data = array(
			    "IsSuccess" => "No",
			    "Message" => "Field is required"
			);
		}

		echo json_encode($data);
	}

	public function log(){
		$idFolder=Object_Abstract::getByPath("/log")->o_id;//get folder id object
		$log = new Object_Log();
		$log->setActor($actor);
		$log->setTypeLog($type);
		$log->setObject($object);
		$log->setKey(strtolower(date("YmdHis")));
		$log->setO_parentId($idFolder);
		$log->setIndex(0);
		$log->setPublished(1);
		if(!$log->save())
			return false;
		else
			return true;
	}

	public function loginAction(){

		$Email = "";
		$Password = md5("password");
		$idFolder=Object_Abstract::getByPath("/agent-locator-data")->o_id;//get folder id object

		$condition="email = ".$Email." AND password = ".$password;
		$agent= new Object\Contest\Listing();
		$agent->setOrderKey('oo_id');
		$agent->setOrder('desc');
		$agent->setLimit(1);
		$agent->setCondition($condition); 

		$loginAgentAction = false;
		// search object in pimcore ==============================================================
		foreach ($agent as $key) {
			$phone = $agent->phone;
			$dob = $agent->dob;
			$agentCode = $agent->agentCode;
			$office = $agent->office;
			$loginAgentAction = true;

			$session = new Zend_Session_Namespace("Zend_Auth");
			$session->user = "username";
		}
		if($loginAgentAction){
			$data = array(
			     "IsSuccess" => "Yes",
			     "CreatedAt" => "YYYY/MM/DD",
			     "Message" => "Agent successfully signed up"
			     "Agent" => array(
			               "Name" => "NAME",
			               "Email" => "EMAIL",
			               "Phone" => "081234234124",
			               "DOB" => "YYYY/MM/DD",
			               "AgentCode" => "112223333",
			               "Office" => array(
			                      "LocationCode" => "abcdefghij",
			                      "LocationName" => "abcdefghij",
			                      "OfficeEmail" => "abcdefghij",
			                      "PostCode" => "abcdefghij",
			                      "PhoneAreaCode" => "abcdefghij",
			                      "PhoneNumber" => "abcdefghij",
			                      "FaxAreaCode" => "abcdefghij",
			                      "FaxNumber" => "abcdefghij",
			                      "LatLng" => "abcdefghij"
			        )
				)
			);
		}else{
			$data = array(
			    "IsSuccess" => "No",
			    "Message" => "Email and password didn’t match"
			);
		}

		echo json_encode($data);
	}


	public function getAgentAction(){

		$email = "";
		$limit = "";
		$offset = "";
		$condition="email = ".$Email;
		$agent= new Object\Contest\Listing();
		$agent->setOrderKey('oo_id');
		$agent->setOrder('desc');
		$agent->setLimit($limit);
		$agent->setOffset($offset);
		$agent->setCondition($condition);
		$n = 0;
		foreach ($agent as $key) {
			$no++;
		}

		if($no==0){

		}

		if($no > 1){
			$data = array(
			     "IsSuccess" => "Yes",
			     "CreatedAt" => "YYYY/MM/DD",
			     "Message" => "Agent successfully signed up"
			     "Agent" => array(
			               "Name" => "NAME",
			               "Email" => "EMAIL",
			               "Phone" => "081234234124",
			               "DOB" => "YYYY/MM/DD",
			               "AgentCode" => "112223333",
			               "Office" => array(
			                      "LocationCode" => "abcdefghij",
			                      "LocationName" => "abcdefghij",
			                      "OfficeEmail" => "abcdefghij",
			                      "PostCode" => "abcdefghij",
			                      "PhoneAreaCode" => "abcdefghij",
			                      "PhoneNumber" => "abcdefghij",
			                      "FaxAreaCode" => "abcdefghij",
			                      "FaxNumber" => "abcdefghij",
			                      "LatLng" => "abcdefghij"
			          )
				)
			);
		}else{
			$data = array(
			    "IsSuccess" => "No",
			    "Message" => "There is no agent with email provided"
			);
		}
	}

	public function logoutAction(){
		Zend_Session:: namespaceUnset("Zend_Auth");
		$logout=true;
		if($logout = true){
			$data = array(
			     "IsSuccess" => "Yes",
			     "CreatedAt" => "Logout Success"
			);
		}else{
			$data = array(
			    "IsSuccess" => "No",
			    "Message" => "There is no agent with email provided"
			);
		}
	}
	public function agentRecruitmentAction() {
		$this->enableLayout();
	    $this->setLayout('agent_recruitment');
	}

}
