<?php

class LandingController extends Website_Controller_Action{
    
    public function liveAction() {
            //print_r('Test');
            //die();
            $nama = $_POST["nama"];
            $bod = $_POST["bod"];
            $up = $_POST["up"];
            $tanggal = $_POST["tanggal"];

            $session = new Zend_Session_Namespace('landingLife');
            $session->nama = $nama ;
            $session->bod = $bod;
            $session->up = $up;
            $session->tanggal = $tanggal;

            print_r("Selamat Datang di Ilustrasi Life Insurance");
    }
    
    public function tasbihAction() {
            //print_r('Test');
            //die();
            $lp = $_POST["lp"];
            $up = $_POST["up"];
			$kat = $_POST["kategori"];

            $session = new Zend_Session_Namespace('landingTasbih');
            $session->lp = $lp ;
            $session->up = $up;
			$session->kat = $kat;
			
            print_r("Selamat Datang di Ilustrasi Tasbih");
    }
    
    public function renderletAction() {
		$id = $this->_getParam("id");
		$entries = Object_Abstract::getById($id);
		if($this->getParam("type") == "object") {
			$id = $this->_getParam("id");
			$entries = Object_Abstract::getById($id);
            $this->view->artikel = $entries;
        }
        $this->renderScript('/landing/render.php');
	}

}

?>