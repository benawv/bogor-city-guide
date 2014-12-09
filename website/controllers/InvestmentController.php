<?php

use Pimcore\Model\Asset;

class InvestmentController extends Website_Controller_Action
{
	public function defaultAction () {
       
		$this->enableLayout();   
	}
    
    public function homepageAction(){
    
        $db = Pimcore_Resource_Mysql::get();
        $entries = new Object_InvestmentCategories_List();
        $this->view->data=$entries;		
        $entries = new Object_InvestmentCategories_List();  
        $this->view->categoryInv=$entries;
     
    }
    
    public function globalarticleAction(){

         $db = Pimcore_Resource_Mysql::get();
         $entries = new Object_InvestmentCategories_List();
         $entries->setLimit(6);
        
         foreach($entries as $table){
            	$nameCommunity = "object_query_".$table->getClassId();
         }
         
        $this->view->data=$entries;	

    }
        
    
    //show all category of investment, url:investment-category
    public function categoriesAction(){
        
    	$cat = $this->_getParam('cat');
      
         $db = Pimcore_Resource_Mysql::get();
         $entries = new Object_InvestmentCategories_List();
         $entries->setCondition('oo_id="'.$cat.'"');  
        
         $datainvestment=$this->investment_id($cat);
         $entries->investment=$datainvestment;
         $entries->investment_id=$cat;
         $this->view->data=$entries;			
    }
    
    
        //show all category of investment, url:investment-category
    public function subcategoriesAction(){
        
    	$cat = $this->_getParam('cat');
        $cat_sub = $this->_getParam('sub_cat');
      
         $db = Pimcore_Resource_Mysql::get();
         $entries = new Object_InvestmentCategories_List();
         $entries->setCondition('investment="'.$cat.'" and subcategory="'.$cat_sub.'"' );  
        
         $datainvestment=$this->investment_id($cat);
         $entries->investment=$datainvestment;
         $entries->investment_id=$cat;
         $this->view->data=$entries;			
    }
    
    public function investment_id($id){
            
        $db = Pimcore_Resource_Mysql::get();
		$entries = new Object_InvestmentCategories_List();
		$entries->setLimit(1);
		foreach ($entries as $table)
		{
			$nameCommunity = "object_query_".$table->getClassId();
		}

        $sql_subcat="SELECT DISTINCT * FROM ".$nameCommunity." AS tblcommunity WHERE tblcommunity.oo_id ='".$id."'";
        $inv=$db->fetchAll($sql_subcat);
        
        return $inv;
    }
    
     public function article_investment_id($id){
            
        $db = Pimcore_Resource_Mysql::get();
		$entries = new Object_InvestmentArticle_List();
		$entries->setLimit(1);
		foreach ($entries as $table)
		{
			$nameCommunity = "object_query_".$table->getClassId();
		}

        $sql_subcat="SELECT DISTINCT tblcommunity.investment FROM ".$nameCommunity." AS tblcommunity WHERE tblcommunity.oo_id LIKE '%".$id."%'";
        $inv=$db->fetchAll($sql_subcat);
        
        return $inv;
    }
    
    //show article by category of investment, url:investment-article-list
    public function articlelistAction(){
/*		
        $id = $this->_getParam('id');
        $cat = $this->_getParam('cat');
        
        
        $db = Pimcore_Resource_Mysql::get();
		$entries = new Object_InvestmentArticle_List();
		$entries->setLimit(1);
		foreach ($entries as $table)
		{
			$nameCommunity = "object_query_".$table->getClassId();
		}
        
                $sql_subcat="SELECT DISTINCT tblcommunity.subcategory FROM ".$nameCommunity." AS tblcommunity WHERE tblcommunity.investment LIKE '%".$id."%' AND subcategory IS NOT NULL";

                $dats=$db->fetchAll($sql_subcat);
        
        
        if(count($dats)>0 and ($cat!=1)){

            $this->subcategoryAction($id);
        
        }else{
            
            if($cat!=1){
                $conditions='investment like "%'.$id.'%"';
            }else{
                $conditions='subcategory like "%'.$id.'%"';
            }
            
            $entries = new Object_InvestmentArticle_List();
            $entries->setCondition('investment like "%'.$id.'%"');   
            
            $datainvestment=$this->investment_id($id);
            $entries->investment=$datainvestment;
            $entries->investment_id=$id;
            $this->view->data=$entries;	
        }*/ //end of new scrip eneble if you need subcategory

        
            //OLD script without subcategory
            $id = $this->_getParam('id');//investment id

            $entries = new Object_InvestmentArticle_List();
            $entries->setCondition('investment like "%'.$id.'%"');  
            
            $datainvestment=$this->investment_id($id);
            $entries->investment=$datainvestment;//get investment name
            $entries->investment_id=$id;//get investment id
        
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
         $entries = new Object_InvestmentArticle_List();
         $entries->setLimit(1);
         $entries->setCondition(1);

        $datainvestment=$this->investment_id($id);
        $entries->investment=$datainvestment;
        $entries->investment_id=$entries->investment_id;
        $this->view->entries=$this->article_investment_id($entries->investment_id);
        
        $this->render('article');
        
    }
    
    public function subcategoryAction($id,$cat){

         $entries = new Object_InvestmentSubcategory_List();
         $entries->setLimit(6);
         $entries->setCondition('category like "%'.$id.'%"');  
         
         $this->view->data=$entries; 
        
         $subcategoryInv = new Object_InvestmentLandingSubcategory_List();
         $subcategoryInv->setLimit(1);
         $subcategoryInv->setCondition('investment like "%'.$id.'%"  and content IS NOT NULL' ); 	
         $this->view->subcategoryInv=$subcategoryInv;
            
         $this->render('subcategory');
        
    }
    
    public function fundinformationAction() {
	    
	    $entries = new Object_InvestmentFundInformation_List();
	    $this->view->data = $entries;
	    
    }
    
    public function fundfactsheetAction() {
	    
    }
    
    // for iframe fact sheet purpose, Added By Handri Pangestiaji 19 November
    public function iframefundAction() {

    }
    
    public function iframefactAction() {

    }
    
    public function detailAction(){
	    
    }
    
    public function subdetailAction() {

	    $id = $this->_getParam('id');
	    $entry = Object_InvestmentEducation::getById($id);
	    $this->view->data = $entry;
	    //die(print_r($entry));
    }

    public function calculatorAction(){}
    public function calculatorresultAction(){}
    public function calculator2Action(){}
    public function calculatorresult2Action(){}

    public function calculatorpertanggunanAction(){}
    public function calculatorresultpertanggunganAction(){}

    public function calculatorinvestAction(){}
    public function calculatorinvestresulAction(){}
    public function calculatorinvest2Action(){}
    public function calculatorinvest2resulAction(){}
    
    public function calculatorretirementAction(){}
    public function calculatorretirementresulAction(){}
    public function calculatorretirement2Action(){}
    public function calculatorretirement2resulAction(){}



}
