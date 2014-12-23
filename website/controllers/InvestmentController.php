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

    public function investmentdailynavAction(){}

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
    public function calculatorretirement3Action(){}
    public function calculatorretirement3resulAction(){}

	public function tileAction(){}
	public function sendkalkulatorAction() {
		$asumsi_inflasi = $_POST['asumsi_inflasi'];
		$asumsi_imbalan = $_POST['asumsi_imbalan'];
		$jangka_waktu = $_POST['jangka_waktu'];
		$risiko = $_POST['risiko'];
		$tahunan = $_POST['tahunan'];
		$bulanan = $_POST['bulanan'];
		$email = $_POST['email'];
		
		if($risiko<10)
		{
			$rekomen = "Jangka waktu investasi yang anda pilih termasuk jangka pendek. Untuk investasi jangka pendek sebaiknya menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang rendah. Instrumen pasar uang seperti deposito, reksa dana pasar uang, ataupun instrumen obligasi seperti ORI, dan reksa dana pendapatan tetap dapat dijadikan pilihan";
		}
		elseif(10 <= $risiko && $risiko <= 15)
		{
			$rekomen = "Jangka waktu investasi yang anda pilih termasuk jangka menengah. Untuk investasi jangka menengah sebaiknya menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang sedang. Instrumen obligasi seperti ORI, dan reksa dana pendapatan tetap dapat dijadikan pilihan, atau Anda dapat memilih reksadana berimbang yang memiliki komponen instrumen saham dengan porsi yang relatif kecil.";
		}
		else
		{
			$rekomen = "Jangka waktu investasi yang anda pilih termasuk jangka panjang. Untuk investasi jangka panjang Anda dapat menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang lebih tinggi dibandingkan jangka waktu lainnya. Instrumen saham dijadikan pilihan, atau Anda dapat memilih reksadana berimbang yang memiliki komponen instrumen saham dengan porsi yang cukup signifikan.";
		}
		
		$document = '/email/kalkulator/email-kalkulator';
		$params = array('asumsi_inflasi' => $asumsi_inflasi,
				'asumsi_imbalan' => $asumsi_imbalan,
				'jangka_waktu' => $jangka_waktu,
				'risiko' => $risiko,
				'tahunan' => $tahunan,
				'bulanan' => $bulanan,
				'rekomen' => $rekomen
				);
		
		$mail = new Pimcore_Mail();
		$mail->setSubject("Kalkulator Investment");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Investment");
		$mail->setDocument($document);
		$mail->setParams($params);
		$mail->addTo($email);
		
		$mail->send();
		echo "Success";
    }
	public function sendkalkulator2Action() {
		$asumsi_inflasi = $_POST['asumsi_inflasi'];
		$asumsi_imbalan = $_POST['asumsi_imbalan'];
		$jangka_waktu = $_POST['jangka_waktu'];
		$risiko = $_POST['risiko'];
		$email = $_POST['email'];
		
		if($risiko<10)
		{
			$rekomen = "Jangka waktu investasi yang anda pilih termasuk jangka pendek. Untuk investasi jangka pendek sebaiknya menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang rendah. Instrumen pasar uang seperti deposito, reksa dana pasar uang, ataupun instrumen obligasi seperti ORI, dan reksa dana pendapatan tetap dapat dijadikan pilihan";
		}
		elseif(10 <= $risiko && $risiko <= 15)
		{
			$rekomen = "Jangka waktu investasi yang anda pilih termasuk jangka menengah. Untuk investasi jangka menengah sebaiknya menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang sedang. Instrumen obligasi seperti ORI, dan reksa dana pendapatan tetap dapat dijadikan pilihan, atau Anda dapat memilih reksadana berimbang yang memiliki komponen instrumen saham dengan porsi yang relatif kecil.";
		}
		else
		{
			$rekomen = "Jangka waktu investasi yang anda pilih termasuk jangka panjang. Untuk investasi jangka panjang Anda dapat menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang lebih tinggi dibandingkan jangka waktu lainnya. Instrumen saham dijadikan pilihan, atau Anda dapat memilih reksadana berimbang yang memiliki komponen instrumen saham dengan porsi yang cukup signifikan.";
		}
		
		$document = '/email/kalkulator/email-kalkulator-2';
		$params = array('asumsi_inflasi' => $asumsi_inflasi,
				'asumsi_imbalan' => $asumsi_imbalan,
				'jangka_waktu' => $jangka_waktu,
				'risiko' => $risiko,
				'rekomen' => $rekomen
				);
		
		$mail = new Pimcore_Mail();
		$mail->setSubject("Kalkulator Investment");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Investment");
		$mail->setDocument($document);
		$mail->setParams($params);
		$mail->addTo($email);
		
		$mail->send();
		echo "Success";
    }
	public function sendfinansialrasioAction() {
        $email = $_POST['email'];
        $likuiditas = $_POST['likuiditas'];
        $aset_likuid = $_POST['aset_likuid'];
        $hutang_aset = $_POST['hutang_aset'];
        $investasi = $_POST['investasi'];
        
        $document = '/email/finansialrasio/email-rasio';
        $params = array('likuiditas' => $likuiditas,
                'aset_likuid' => $aset_likuid,
                'hutang_aset' => $hutang_aset,
                'investasi' => $investasi
                );
        
        $mail = new Pimcore_Mail();
        $mail->setSubject("Finansial Rasio Investment");
        $mail->setFrom("no-reply@allianz.co.id","Allianz Investment");
        $mail->setDocument($document);
        $mail->setParams($params);
        $mail->addTo($email);
        
        $mail->send();
        echo "Success";
    }
    
    public function investmentdailynavAction(){
        $entries = new Object_InvestmentNav_List();
        $entries->setOrderKey("unitdate");
        $entries->setOrder("desc");
        $this->view->data=$entries;	 
    }
    
    public function investmentNavAction(){
        
        $assets = new Asset_List();
		$assets->setCondition("filename = 'daily-nav'");
		foreach($assets as $row1)
		{
            $idAssets = $row1->id;
			$list_files = new Asset_List(); 
			$list_files->setCondition("parentId = '".$idAssets."'");
			$filename = array();
			
			foreach($list_files as $row2){
		      
              echo "<pre>";
                print_r($row2);
              echo "</pre>";
                $myfiles=($row2->filename);
                
            }
             $mysongs = simplexml_load_file("http://investment.allianz.co.id/allianz-investment/daily-nav/$myfiles");
             
             $i=0;
             foreach($mysongs as $nav_data){
               
               foreach($nav_data->items as $items){
                $unit_date=$items->unit_date;
                $bid=$items->bid;
                $offer=$items->offer;
                
               }
                
                $navdata = new Object_InvestmentNav();
    		    $navdata->setFundName("$nav_data->fund_name");
    			$navdata->setUnitDate("$unit_date");
    			$navdata->setBid("$bid");
    			$navdata->setOffer("$offer");                
                $navdata->setKey('nav_'.date('d_m_y')."$i");
		        $navdata->setO_parentId('1296');
		        $navdata->setIndex(0);
			    $navdata->setPublished(1);
               // die(print_r($navdata));
                $navdata->save();                
                $i++;
             }
        }      
    }
    
    
    
    
}
