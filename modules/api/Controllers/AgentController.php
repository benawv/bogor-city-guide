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
      $this->session = new Zend_Session_Namespace("Zend_Auth");
      echo "<pre>";
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
      die();
      $idUser = 100763;
      $actor[] = json_decode($this->get_data('http://beta.allianz.co.id/webservice/rest/object/id/'.$idUser.'?apikey=591c3ff34e91e226dc58d3f087ea6e54c7769c6b38aafa83ec73831f15af7b1f',0))->data;
      
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
      print_r($this->get_data('http://beta.allianz.co.id/webservice/rest/object?apikey=591c3ff34e91e226dc58d3f087ea6e54c7769c6b38aafa83ec73831f15af7b1f',$fields));
      die();
      $mydata = json_decode($this->get_data('http://beta.allianz.co.id/webservice/rest/object?apikey=591c3ff34e91e226dc58d3f087ea6e54c7769c6b38aafa83ec73831f15af7b1f&',$fields));
      echo "data<br>";
      print_r($mydata);

      die();
      $session->user = "username";
      Zend_Session:: namespaceUnset("Zend_Auth");
      echo $session->user;
      die();
      
      $this->enableLayout();
   }

   public function loginAction(){
      //get email and password
      $email = $_GET["email"];
      $password = md5($_GET["password"]);

      // $condition="email = ".$Email." AND password = ".$password;
      $condition="email LIKE '".$email."' AND pass LIKE '".$password."'";
      $entries = Object_agentLocatorData::getList([
         "condition" => $condition,
         "limit" => 1
         ]);

      $loginAgentAction = false;
      // search object in pimcore ==============================================================
      foreach ($entries as $key) {
         $nama = $key->namaAgent;
         $phone = $key->phone;
         $dob = $key->dob;
         $agentCode = $key->kodeAgent;
         $office = $key->kantor[0];
         $loginAgentAction = true;
         $createdAt = date("d M Y",$key->o_creationDate);
         // echo $key->email;
         
         $this->session->user = $nama;
         $this->session->email = $email;
         $this->session->kodeAgent = $agentCode;
      }
      if($loginAgentAction){
         $data = array(
              "IsSuccess" => "Yes",
              "CreatedAt" => $createdAt,
              "Message" => "Agent successfully signed in",
              "Agent" => array(
                        "Name" => $nama,
                        "Email" => $email,
                        "Phone" => $phone,
                        "AgentCode" => $agentCode,
                        "Office" => array(
                               "LocationCode" => $office->kodeLokasi,
                               "LocationName" => $office->namaLokasi,
                               "OfficeEmail" => $office->emailKantor,
                               "PostCode" => $office->kodePos,
                               "PhoneAreaCode" => $office->kodeAreaTelepon,
                               "PhoneNumber" => $office->nomorTelepon,
                               "FaxAreaCode" => $office->kodeAreaFax,
                               "FaxNumber" =>  $office->nomorFax,
                               "LatLng" => $office->titikKordinat
                 )
            )
         );
         //log LOGIN
         //PAIR,EDITAGENT,AUTOMATION,LOGOUT,LOGIN,FOLLOWUP,NEWAGENT
         $this->log("LOGIN",$agentCode);
      }else{
         $data = array(
             "IsSuccess" => "No",
             "Message" => "Email and password didn't match"
         );
      }

      echo json_encode($data);
   }

   public function addnotifAction(){
      $code = "NEWLEADS";
      $displayText = "You have new leads";
      $kodeAgent = "008";
      $object = "Nama object";

      //cek folder and create folder notif per agent 
      $folder = Object_Abstract::getByPath("/agent-recruitment/notif/".$kodeAgent)->o_id;
      if(empty($folder)){


         $idFolder=Object_Abstract::getByPath("/agent-recruitment/notif")->o_id;//get folder id object
         $folder = Object_Folder::create(array(
               "o_parentId" => $idFolder,
               "o_creationDate" => time(),
               "o_userOwner" => 1,
               "o_userModification" => 1,
               "o_key" => $kodeAgent,
               "o_published" => true
           ));
         $folder->setCreationDate(time());
         $folder->setUserOwner(1);
         $folder->setUserModification(1);
         $folder->save();

         $idFolder=Object_Abstract::getByPath("/agent-recruitment/notifType")->o_id;//get folder id object
         $folder = Object_Folder::create(array(
               "o_parentId" => $idFolder,
               "o_creationDate" => time(),
               "o_userOwner" => 1,
               "o_userModification" => 1,
               "o_key" => $kodeAgent,
               "o_published" => true
           ));
         $folder->setCreationDate(time());
         $folder->setUserOwner(1);
         $folder->setUserModification(1);
         $folder->save();
      }
      
      $idActor = $this->searchIdByPath("/agent-locator-data/".$kodeAgent);
      $objectActor[] = Object_agentLocatorData::getById($idActor);
      $idFolder=Object_Abstract::getByPath("/agent-recruitment/notifType/".$kodeAgent)->o_id;//get folder id object


      // create notif type
      $key = strtolower($kodeAgent.date("YmdHis"));
      $notifType = new Object_NotifType();
      $notifType->setCode($code);
      $notifType->setDisplayText($displayText);
      $notifType->setKey($key);
      $notifType->setO_parentId($idFolder);
      $notifType->setIndex(0);
      $notifType->setPublished(1);
      $notifType->save();

      // create notif
      $idFolder=Object_Abstract::getByPath("/agent-recruitment/notif/".$kodeAgent)->o_id;//get folder id object
      $objectNotif[] = Object_Abstract::getByPath("/agent-recruitment/notif/".$key);
      $notifType = new Object_Notif();
      $notifType->setAgent($kodeAgent);
      $notifType->setNotifType($objectNotif);
      $notifType->setActor($kodeAgent);//Actor itu nama langsung bisa agent atau deskripsi sistem untuk agent
      $notifType->setObject($object);
      $notifType->setKey(strtolower(date("YmdHis")));
      $notifType->setO_parentId($idFolder);
      $notifType->setIndex(0);
      $notifType->setPublished(1);
      $notifType->save();

      if(!empty($kodeAgent)){
         $data = array(
                    "IsSuccess" => "Yes",
                    "Message" => "Notif successfully created",
                    "CreatedAt" => "YYYY/MM/DD",
                    "Agent" => "123456789",
                    "Actor" => "AgentA",
                    "NotifType" => array(
                         "CODE" => "NEWFOLLOWUP",
                         "DisplayText" => "There's new follow up",
              )
         );

      }else{
         $data = array(
                     "IsSuccess" => "No",
                     "Message" => "Create notif failed"
            );
      }

      echo json_encode($data);

   }

   public function addLeads(){

   }



   public function signupAction(){
    //this controller do, create new password for new agent recruitment. 

      // create object in pimcore ==============================================================
      $kodeAgent = $_GET["kodeAgent"];
      $email = $_GET["email"];
      $name = "";
      $phone = "";
      $dob = "";
      $agentCode = "";
      $office = "";
      // $idFolder=Object_Abstract::getByPath("/agent-locator-data")->o_id;//get folder id object

      // $agent = new Object_AgentLocatorData();
      // $agent->setname($name);
      // $agent->setemail($email);
      // $agent->setphone($phone);
      // $agent->setdob($dob);
      // $agent->setagentCode($agentCode);
      // $agent->setoffice($office);
      // $agent->setKey(strtolower(date("YmdHis")));
      // $agent->setO_parentId($idFolder);
      // $agent->setIndex(0);
      // $agent->setPublished(1);

      $condition="email LIKE '".$email."' AND kodeAgent LIKE '".$kodeAgent."'";
      $entries = Object_agentLocatorData::getList([
         "condition" => $condition,
         "limit" => 1
         ]);

      $signupStatus = false;
      // search object in pimcore ==============================================================
      foreach ($entries as $key) {
         $nama = $key->namaAgent;
         $phone = $key->phone;
         $dob = $key->dob;
         $agentCode = $key->kodeAgent;
         $office = $key->kantor[0];
         $signupStatus = true;
         $createdAt = date("d M Y",$key->o_creationDate);
      }
      if($signupStatus==true){
         $newpass = str_shuffle($nama.$phone);
         $idObject=Object_Abstract::getByPath("/agent-locator-data/".$kodeAgent)->o_id;//get folder id object
         $update = Object_agentLocatorData::getById($idObject);
         $update->setPass($newpass);
         $update->save();
         $data = array(
              "IsSuccess" => "Yes",
              // "CreatedAt" => "YYYY/MM/DD",
              "Message" => "Agent successfully signed up",
              "Agent" => array(
                        "Name" => $nama,
                        "Email" => $email,
                        "Phone" => $phone,
                        "AgentCode" => $agentCode,
                        "newPassword" => $newpass,
                        "Office" => array(
                              "LocationCode" => $office->kodeLokasi,
                              "LocationName" => $office->namaLokasi,
                              "OfficeEmail" => $office->emailKantor,
                              "PostCode" => $office->kodePos,
                              "PhoneAreaCode" => $office->kodeAreaTelepon,
                              "PhoneNumber" => $office->nomorTelepon,
                              "FaxAreaCode" => $office->kodeAreaFax,
                              "FaxNumber" =>  $office->nomorFax,
                              "LatLng" => $office->titikKordinat
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

   public function log($typeLog,$kodeAgent){
      //PAIR,EDITAGENT,AUTOMATION,LOGOUT,LOGIN,FOLLOWUP,NEWAGENT
      $idActor = $this->searchIdByPath("/agent-locator-data/".$kodeAgent);
      $objectActor[] = Object_agentLocatorData::getById($idActor);
      $idFolder=Object_Abstract::getByPath("/agent-recruitment/log")->o_id;//get folder id object
      $log = new Object_Log();
      $log->setActor($objectActor);
      $log->setTypeLog($typeLog);
      $log->setKey(strtolower(date("YmdHis")));
      $log->setO_parentId($idFolder);
      $log->setIndex(0);
      $log->setPublished(1);

      if(!$log->save())
         return false;
      else
         return true;
   }

   public function searchIdByPath($data){
      $getId=Object_Abstract::getByPath($data);
      return $getId->o_id;
   }

   public function getagentAction(){
      $kodeAgent = "008";//$_GET["kodeAgent"];
      $email = "ibnuisthi.handoko@allianzlife.co.id";
      $limit = "";
      $offset = "";
      $condition="email = '".$email."'";
      $entries = Object_agentLocatorData::getList([
         "condition" => $condition,
         "limit" => 1
         ]);
      $n = 0;
      foreach ($entries as $key) {
        $nama = $key->namaAgent;
        $email = $key->email;
        $phone = $key->noHp;
        $kodeAgent = $key->kodeAgent;
        $kantor = $key->kantor[0];
        $createdAt = date("d-M-Y",$key->o_creationDate);
        $no++;
      }

      if($no >= 1){
         $data = array(
              "IsSuccess" => "Yes",
              "CreatedAt" => $createdAt,
              "Message" => "Agent successfully signed up",
              "Agent" => array(
                        "Name" => $nama,
                        "Email" => $email,
                        "Phone" => $phone,
                        "AgentCode" => $kodeAgent,
                        "Office" => array(
                               "LocationCode" => $kantor->LocationCode,
                               "LocationName" => $kantor->LocationName,
                               "OfficeEmail" => $kantor->OfficeEmail,
                               "PostCode" => $kantor->kodePos,
                               "PhoneAreaCode" => $kantor->kodeAreaTelepon,
                               "PhoneNumber" => $kantor->nomorTelepon,
                               "FaxAreaCode" => $kantor->kodeAreaFax,
                               "FaxNumber" => $kantor->nomorFax,
                               "LatLng" => $kantor->titikKordinat
                   )
            )
         );
      }else{
         $data = array(
             "IsSuccess" => "No",
             "Message" => "There is no agent with email provided"
         );
      }

      echo json_encode($data);
   }

   public function logoutAction(){
      if(!empty($this->session->kodeAgent)){
         $this->log("LOGIN",$this->session->kodeAgent);
         Zend_Session::namespaceUnset("Zend_Auth");
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
}
