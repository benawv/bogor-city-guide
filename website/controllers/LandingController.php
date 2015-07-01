<?php

class LandingController extends Website_Controller_Action{
    
    public function liveAction() {
            //print_r('Test');
            //die();
            $nama = $_POST["nama"];
            $usia = $_POST["usia"];
            $up = $_POST["up"];

            $session = new Zend_Session_Namespace('landingLife');
            $session->nama = $nama ;
            $session->usia = $usia;
            $session->up = $up;

            print_r("Selamat Datang di Ilustrasi Life Insurance");
    }
    
    public function tasbihAction() {
            //print_r('Test');
            //die();
            $lp = $_POST["lp"];
            $up = $_POST["up"];

            $session = new Zend_Session_Namespace('landingTasbih');
            $session->lp = $lp ;
            $session->up = $up;

            print_r("Selamat Datang di Ilustrasi Tasbih");
    }

}

?>