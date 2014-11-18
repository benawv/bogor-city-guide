<?php


use Pimcore\Model\Asset;

class InvestmentController extends Website_Controller_Action
{
	public function defaultAction () {
       
		$this->enableLayout();   
	}

    public function setcustomercookiesAction () {//create cooke base one php
            $value = $this->_getParam('name');
        if (isset($_COOKIE['customername'])) {
            unset($_COOKIE['customername']);
            setcookie("customername",$value, time()+3600*1);
        }else{
            setcookie("customername",$value, time()+3600*1);
        }
      
        return $_COOKIE["customername"];
    }
    
    public function homepageAction(){
         $this->render('homepage');       
	}
    
    public function globalarticleAction(){

         $db = Pimcore_Resource_Mysql::get();
         $entries = new Object_investmentCategories_List();
       //  $entries->setCondition('investment<>6');  
         $entries->setLimit(6);
         $this->view->data=$entries;			
    }
        
    
    //show all category of investment, url:investment-category
    public function categoriesAction(){
        
    	$cat = $this->_getParam('cat');
      
         $db = Pimcore_Resource_Mysql::get();
         $entries = new Object_investmentCategories_List();
         $entries->setCondition('investment="'.$cat.'"');  
        
         $datainvestment=$this->investment_id($cat);
         $entries->investment=$datainvestment;
         $entries->investment_id=$cat;
         $this->view->data=$entries;			
    }
    public function investment_id($id){
            
        if($id==1){
        $investmentname="Education";
        }elseif($id==2){
            $investmentname="Fund";
        }elseif($id==3){
        $investmentname="Health";
        }elseif($id==4){
        $investmentname="Future";
        }elseif($id==5){
        $investmentname="Pension";
        }elseif($id==6){
        $investmentname="Guide Me";
        }else{
            $investmentname="<id_not_found>";
        }
        return $investmentname;
    }
    
    //show article by category of investment, url:investment-article-list
    public function articlelistAction(){
		
        $id = $this->_getParam('id');
        $entries = new Object_investmentArticle_List();
        $entries->setCondition('category_investment="'.$id.'"');   
        
         $datainvestment=$this->investment_id($id);
         $entries->investment=$datainvestment;
         $entries->investment_id=$id;
         $this->view->data=$entries;	
        
    }
    
    //show detile article
    public function articleAction(){
        
        $key = $this->_getParam('text');
     	$category = $this->_getParam('cat');
		$id = $this->_getParam('id');
		
		$this->template1Action($id,$key);
		
    }   

    
    //templte article list
    public function template1Action($id,$key){

         $db = Pimcore_Resource_Mysql::get();
         $entries = Object_Abstract::getById($id);
         $data = $entries;


         $this->view->data = $data;

         $db = Pimcore_Resource_Mysql::get();
         $entries = new Object_investmentArticle_List();
         $entries->setLimit(1);
         $entries->setCondition(1);
         foreach ($entries as $table)
         {
            $nameCommunity = "object_".$table->getClassId();
         }

        $datainvestment=$this->investment_id($id);
        $entries->investment=$datainvestment;
        $entries->investment_id=$id;
        
        $this->render('article');
        
    }
        
}
