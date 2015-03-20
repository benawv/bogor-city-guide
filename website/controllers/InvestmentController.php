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

    //show detile article
    public function articlepreviewAction(){
        
		$id = $this->_getParam('id');
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
	    $entries->setOrderKey("point");
	    $entries->setOrder("asc");
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
    public function calculatorretirement3Action(){}
    public function calculatorretirement3resulAction(){}
    
    public function acuanAction(){}
    

	public function tileAction(){}
	public function sendkalkulatorAction() {
		$kalkulator = $_POST['kalkulator'];
		$result_1 = $_POST['result_1']?$_POST['result_1']:'';
		$result_2 = $_POST['result_2']?$_POST['result_2']:'';
		$biaya_2 = $_POST['biaya_2']?$_POST['biaya_2']:'';
		$biaya = $_POST['biaya']?$_POST['biaya']:'';
		$asumsi_inflasi = $_POST['asumsi_inflasi']?$_POST['asumsi_inflasi']:'';
		$asumsi_imbalan = $_POST['asumsi_imbalan']?$_POST['asumsi_imbalan']:'';
		$jangka_waktu = $_POST['jangka_waktu']?$_POST['jangka_waktu']:'';
		$jangka_waktu_2 = $_POST['jangka_waktu_2']?$_POST['jangka_waktu_2']:''; 
		$jangka_waktu_3 = $_POST['jangka_waktu_3']?$_POST['jangka_waktu_3']:''; 
		$risiko = $_POST['risiko']?$_POST['risiko']:'';
		$tahunan = $_POST['tahunan']?$_POST['tahunan']:'';
		$bulanan = $_POST['bulanan']?$_POST['bulanan']:'';
		$email = $_POST['email']?$_POST['email']:'';
		
		if($jangka_waktu < 3)
		{
			$deskripsi_jangka_waktu = "Jangka waktu investasi yang anda pilih termasuk jangka pendek. Untuk investasi jangka pendek sebaiknya menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang rendah. Intrumen investasi yang dapat dijadikan pilihan antara lain Instrumen pasar uang seperti deposito, unit link atau reksa dana pasar uang, ataupun instrumen pendapatan tetap seperti ORI (obligasi ritel Indonesia), unit link atau reksa dana pendapatan tetap.�";
		}
		else if($jangka_waktu > 3 && $jangka_waktu < 5)
		{
			$deskripsi_jangka_waktu = "Jangka waktu investasi yang anda pilih termasuk jangka menengah. Untuk investasi jangka menengah sebaiknya menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang sedang. Instrumen investasi yang dapat dijadikan pilihan antara lain instrumen pendapatan tetap seperti ORI (obligasi ritel Indonesia), unit link atau reksa dana pendapatan tetap, atau Anda dapat memilih unit link atau reksadana berimbang yang memiliki komponen instrumen saham dengan porsi yang relatif kecil.";
		}
		else {
			$deskripsi_jangka_waktu = "Jangka waktu investasi yang anda pilih termasuk jangka panjang. Untuk investasi jangka panjang Anda dapat menggunakan instrumen investasi yang memiliki risiko dan fluktuasi nilai yang lebih tinggi. Instrumen investasi yang dapat dijadikan pilihan antara lain saham, unit link atau reksadana saham, atau Anda dapat memilih unit link atau reksadana berimbang yang memiliki komponen instrumen saham dengan porsi yang cukup signifikan.";
		}
		$document = '/email/kalkulator/email-kalkulator-pendidikan';
		if($kalkulator == 'Pendidikan')
			$document = '/email/kalkulator/email-kalkulator-pendidikan';
		else if($kalkulator == 'Asuransi')
			$document = '/email/kalkulator/email-kalkulator-asuransi';
		else if($kalkulator == 'Investasi')
			$document = '/email/kalkulator/email-kalkulator-investasi';
		else if($kalkulator == 'Pensiun')
			$document = '/email/kalkulator/email-kalkulator-pensiun';
			
		$params = array('asumsi_inflasi' => $asumsi_inflasi,
				'asumsi_imbalan' => $asumsi_imbalan,
				'jangka_waktu' => $jangka_waktu,
				'risiko' => $risiko,
				'tahunan' => $tahunan,
				'bulanan' => $bulanan,
				'rekomen' => $rekomen,
				'kalkulator' => $kalkulator,
				'result_1' => $result_1,
				'result_2' => $result_2,
				'jangka_waktu_2' => $jangka_waktu_2,
				'jangka_waktu_3' => $jangka_waktu_3,
				'biaya' => $biaya,
				'biaya_2' => $biaya_2,
				'deskripsi_jangka_waktu' => $deskripsi_jangka_waktu
				);
		
		$mail = new Pimcore_Mail();
		$mail->setSubject("Hasil Kalkulasi Kalkulator ".$kalkulator);
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
        $tabungan_investasi = $_POST['tabungan_investasi'];
        $hutang_aset = $_POST['hutang_aset'];
        $investasi = $_POST['investasi'];
        $likuiditas_ket = $_POST['likuiditas_ket'];
        $aset_likuid_ket = $_POST['aset_likuid_ket'];
        $tabungan_investasi_ket = $_POST['tabungan_investasi_ket'];
        $hutang_aset_ket = $_POST['hutang_aset_ket'];
        $investasi_ket = $_POST['investasi_ket'];
        
        $document = '/email/finansialrasio/email-summary-rasio';
        $params = array('likuiditas' => $likuiditas,
                'aset_likuid' => $aset_likuid,
                'tabungan_investasi' => $tabungan_investasi,
                'hutang_aset' => $hutang_aset,
                'investasi' => $investasi,
                'likuiditas_ket' => $likuiditas_ket,
                'aset_likuid_ket' => $aset_likuid_ket,
                'tabungan_investasi_ket' => $tabungan_investasi_ket,
                'hutang_aset_ket' => $hutang_aset_ket,
                'investasi_ket' => $investasi_ket
                );
        
        $mail = new Pimcore_Mail();
        $mail->setSubject("Hasil Kalkulasi Rasio Keuangan");
        $mail->setFrom("no-reply@allianz.co.id","Allianz Investment");
        $mail->setDocument($document);
        $mail->setParams($params);
        $mail->addTo($email);
        
        $mail->send();
        echo "Success";
    }
    
    public function investmentdailynavAction(){//show data into table
 

        $db = Pimcore_Resource_Mysql::get(); 
       /*
        $entries = new Object_InvestmentNav_List();
   	    foreach ($entries as $table)
		{
			 $nameCommunity = "object_query_".$table->getClassId();
		}
        */
        $nameCommunity = "object_query_30"; //table yang digunakan di live server
        //$nameCommunity = "object_query_29";
        //print_r($nameCommunity);
        // die('mati');
        
         $getLastDay1M="SELECT LAST_DAY(STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS last_one_month 
                        FROM $nameCommunity 
                        WHERE STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y') > DATE_ADD(NOW(), INTERVAL- 2 MONTH)
                        ORDER BY unitdate ASC
                        LIMIT 1 ";
        $lastday1M=$db->fetchAll($getLastDay1M);   
        $unitdates = explode("-", $lastday1M[0]['last_one_month']);
                $unitdates[0]; //day
                $unitdates[1]; //month
                $unitdates[2]; //year   
                $getday= $unitdates[2]."-".$unitdates[1]."-".$unitdates[0];       
        	
	
        $getLast1MDay="SELECT LAST_DAY(STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS last_one_month 
                        FROM $nameCommunity 
                        WHERE STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y') > DATE_ADD(NOW(), INTERVAL- 2 MONTH)
                        ORDER BY unitdate ASC
                        LIMIT 1";
        $last1MDay=$db->fetchAll($getLast1MDay); 
        $unitdates2 = explode("-", $last1MDay[0]['last_one_month']);
                $unitdates2[0]; //day
                $unitdates2[1]; //month
                $unitdates2[2]; //year   
                $getLastMonth= $unitdates2[2]."-".$unitdates2[1]."-".$unitdates2[0]; 
        
        /*get data by fundname*/
        $getAllFundName="SELECT DISTINCT fundname FROM $nameCommunity AS a 
                         WHERE  
                         fundname NOT IN('Allisya Money market fund', 
                                         'smartwealth equity performa fund', 
                                         'smartwealth money market fund', 
                                         'smartwealth sectoral equity fund', 
                                         'smartweatlh equity fund', 
                                         'smartwealth balanced fund', 
                                         'smartlikn rupiah deposit fund') and
                         STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y') > STR_TO_DATE('$getday','%d-%m-%Y')
                         ORDER  BY 1 DESC";
                         
        $xmldata2=$db->fetchAll($getAllFundName);
        /*
	echo "<pre>";
	print_r($xmldata2);
	echo "</pre>";
	die('die');
        */
        foreach($xmldata2 as $items){
	
	//last unitdate fundtype	
	$lastunitdate_="SELECT DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS last_data
                        FROM $nameCommunity AS a 
                        WHERE a.fundname='".$items['fundname']."'
                        ORDER BY unitdate DESC
                        LIMIT 1";
	$lastunitdate__=$db->fetchAll($lastunitdate_);
	$lastunitdate_item = explode("-", $lastunitdate__[0]['last_data']);
         
	        $lastunitdate_item[0]; //day
                $lastunitdate_item[1]; //month
                $lastunitdate_item[2]; //year   
                $getlastunitdate= $lastunitdate_item[2]."-".$lastunitdate_item[1]."-".$lastunitdate_item[0];
	    
	    
	    
	    
	    //get last data perbandingan	
            $getlast="SELECT a.fundname,a.bid,a.offer,DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS today
                        FROM $nameCommunity AS a
                        WHERE fundname = '".$items['fundname']."' AND 
                        STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=STR_TO_DATE('$getlastunitdate','%d-%m-%Y')
                        ORDER BY a.unitdate DESC
                        LIMIT 1";
            $lastData=$db->fetchAll($getlast);
	    $getlastdate=$lastData[0]['today'];
	    
	                
            $getToday="SELECT a.fundname,a.bid,a.offer,DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS today
                       FROM $nameCommunity AS a
                       WHERE fundname = '".$items['fundname']."' AND 
                       DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)<= STR_TO_DATE('$getlastunitdate','%d-%m-%Y')
                       ORDER BY a.unitdate DESC
                       LIMIT 1";
            $todayData=$db->fetchAll($getToday);
           
            /*===========get 1 month=========*/
            $getfirst1m="SELECT a.fundname,a.bid,a.offer,DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS last_one_month
                        FROM $nameCommunity AS a
                        WHERE fundname = '".$items['fundname']."' AND 
                        DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)<=DATE_ADD(STR_TO_DATE('$getlastunitdate','%d-%m-%Y'), INTERVAL- 1 MONTH)
                        ORDER BY a.unitdate DESC
                        LIMIT 1";
            $last1mData=$db->fetchAll($getfirst1m);
                
            $getLast3m="SELECT a.fundname,a.bid,a.offer,DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS last_3_month
                        FROM $nameCommunity AS a
                        WHERE fundname = '".$items['fundname']."' AND 
                        DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)<=DATE_ADD(STR_TO_DATE('$getlastunitdate','%d-%m-%Y'), INTERVAL- 3 MONTH)
                        ORDER BY a.unitdate DESC
                        LIMIT 1";
            $last3mData=$db->fetchAll($getLast3m);
		
	    /*$getday= tanggal terakhir di ahir taun*/	 			
            $getYtd="SELECT DISTINCT a.fundname, a.bid, a.offer,DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS today
                    FROM $nameCommunity as a
                    WHERE fundname = '".$items['fundname']."' AND 
                    DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) <= STR_TO_DATE('$getday','%d-%m-%Y')
                    GROUP BY fundname,a.bid,a.offer,a.unitdate
		    ORDER BY a.unitdate desc
		    limit 1";                    
            $ytdData=$db->fetchAll($getYtd);
            
            /*1 YAER*/
            $get1year="SELECT a.fundname,bid,offer,DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS last_year
                    FROM $nameCommunity AS a
                    WHERE fundname = '".$items['fundname']."' AND
                    DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) <=DATE_ADD(STR_TO_DATE('$getlastunitdate','%d-%m-%Y'), INTERVAL- 1 YEAR)
                    ORDER BY unitdate DESC
                    LIMIT 1";                    
            $last1year=$db->fetchAll($get1year);
            /*1 YAER*/
	    
            $last_data['today']=$todayData;
            $last_data['lastdata']=$lastData;
            $last_data['lastmonth']=$last1mData;
            $last_data['last3month']=$last3mData;
            $last_data['last1year']=$last1year;            
            $last_data['ytd']=$ytdData;
           // $perform1year['perform1year']=$fundPerformPerMonth;
 
            $dataPerform[]=$perform1year;     
            $arrayLastData[]=$last_data;
        }
        
        
           
        
        sort($arrayLastData);      
        $alldata['ytd']=$arrayLastData;
       // $alldata['dataGraph']=$arrayItem;
        $alldata['dataPerforms']=$dataPerform;
        $this->view->data=$alldata;     
       	   
    }
    
     public function investmentdailynavfilterAction(){//show data filter into table

            $filter=$_POST['filter'];
            $day1=$_POST['day1']; 
            $month1=$_POST['month1'];
            $year1=$_POST['year1'];
            $day2=$_POST['day2'];
            $month2=$_POST['month2'];
            $year2=$_POST['year2'];
            $fundtype=$_POST['fundtype'];
            //print $fundtype;
            $start=$dates=mktime(0,0,0,$month1,$day1,$year1);
            $end=$dates=mktime(0,0,0,$month2,$day2, $year2);
            
             if(strlen($fundtype)>3){
                $fundtypes=" fundname like $fundtype";
             }else{
                $fundtypes="";
             }
             
             $takeoff_fundname="fundname NOT IN('Allisya Money market fund', 
                                         'smartwealth equity performa fund', 
                                         'smartwealth money market fund', 
                                         'smartwealth sectoral equity fund', 
                                         'smartweatlh equity fund', 
                                         'smartwealth balanced fund', 
                                         'smartlikn rupiah deposit fund')";
                     
            if($day1>0){
                if($day2>0){
                    
                    if($fundtypes!=""){
                        $conditions=" $takeoff_fundname and DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) >= STR_TO_DATE('$day1-$month1-$year1','%d-%m-%Y') and DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) <= STR_TO_DATE('$day2-$month2-$year2','%d-%m-%Y') and ".$fundtypes;
                    }else{
                        $conditions=" $takeoff_fundname and DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) >= STR_TO_DATE('$day1-$month1-$year1','%d-%m-%Y') and DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) <= STR_TO_DATE('$day2-$month2-$year2','%d-%m-%Y') ";
                    }
                }else{
                    
                    if($fundtypes!=""){
                        $conditions=" $takeoff_fundname and DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)=$start and ".$fundtypes;
                    }else{
                         $conditions=" $takeoff_fundname and DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)=$start";
                    }    
                }
            }else{
                $conditions=$fundtypes;
            }
    
            if(strlen($conditions)>1){
                $conditions=" where ".$conditions;
            }else{
                $conditions=" where unitdate=''";
            }
           // die($conditions);
            
            $db = Pimcore_Resource_Mysql::get();        
            /*
	    $entries = new Object_InvestmentNav_List();
            $entries->setOrderKey("unitdate");
            $entries->setOrder("desc");
            
            $this->view->data=$entries;	 
       		/*
		foreach ($entries as $table)
		      {
			     $nameCommunity = "object_query_".$table->getClassId();
		      }
		*/
	    $nameCommunity = "object_query_30"; //table yang digunakan di live server
            //$nameCommunity = "object_query_29"; //tulis manual
	    
	    $sql_subcat="SELECT distinct unitdate, bid,offer,DATE_FORMAT(DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY),'%d-%b-%y') AS unitdates FROM ".$nameCommunity." AS xmlsource ".$conditions." order by fundname desc,unitdate";
            $xmldata=$db->fetchAll($sql_subcat);
           
           
          /*bid fund*/            
                if($day2>0){
                    if($fundtypes!=""){
                        $conditions=" DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) >= STR_TO_DATE('$day1-$month1-$year1','%d-%m-%Y') and DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) <= STR_TO_DATE('$day2-$month2-$year2','%d-%m-%Y')";
                    }else{
                        $conditions=" DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) = STR_TO_DATE('$day1-$month1-$year1','%d-%m-%Y') ";
                    }
                }
                $isFundName=$fundtype;
                $getFundBidMonth="SELECT a.fundname,
                		AVG(bid) AS bid,
                		AVG(offer) AS offer,
				DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS fulldays,
                		DAY(DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)) AS days,
                		MONTH(DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)) AS months,
                		YEAR(DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)) AS yaers
                	FROM $nameCommunity AS a 
                	WHERE a.fundname=$fundtype and $conditions
                	GROUP BY a.fundname, DAY(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')),bid,offer
                	ORDER BY DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY)";
		
		 //print_r($getFundBidMonth);
		 //die();
                $fundBidMonth=$db->fetchAll($getFundBidMonth);
        
               
                //die('s');
		$itemss['fundname']=$fundBidMonth[0]['fundname'];
                $itemss['total']=count($fundBidMonth);
                $itemss['year']=$fundBidMonth[0]['yaers'];
                $itemss['month']=$fundBidMonth[0]['months'];
		
                $i = 0;
                foreach($fundBidMonth as $itemsbid){
                    $itemsbid['bid'];
                    $array_fulldays[$i] =$itemsbid['fulldays'];
		    $array_day[$i] =$itemsbid['days']+0;
                    $array_month[$i] =$itemsbid['months']+0;
		    $array_year[$i] =$itemsbid['yaers']+0;
                    $array_bid[$i] = $itemsbid['bid']+ 0;
                $i++;
                }
             $itemss['fundbid']=$array_bid;
	     $itemss['bidday']=$array_day;
	     $itemss['bidmonth']=$array_month;
	     $itemss['bidyear']=$array_year;
	     $itemss['bidfulldate']=$array_fulldays;
               
        /*end bid fund*/ 

           $data['xml_data']=$xmldata;
           $data['resume_data']=$resumedata;
           $data['resume_graph']=$itemss;
           $data['limit_data']=10;    
           echo json_encode($data);
          
    }
    
    public function investmentNavAction(){//get data from xml
        
        $assets = new Asset_List();
		$assets->setCondition("filename = 'daily-nav'");
		foreach($assets as $row1)
		{
            $idAssets = $row1->id;
			$list_files = new Asset_List(); 
			$list_files->setCondition("parentId = '".$idAssets."'");
			$filename = array();
			
			foreach($list_files as $row2){
		      
//              echo "<pre>";
//                print_r($row2);
//              echo "</pre>";
                $myfiles=($row2->filename);
                
            }
             $mysongs = simplexml_load_file("http://investment.allianz.co.id/allianz-investment/daily-nav/$myfiles");
             
             $i=0;
             foreach($mysongs as $nav_data){
               
               foreach($nav_data->items as $items){
                    $unit_date=$items->unit_date;
                    $bid=$items->bid;
                    $offer=$items->offer;
                                
                    $unitdates = explode("/", $unit_date);
                    $unitdates[0]; //day
                    $unitdates[1]; //month
                    $unitdates[2]; //year
                    
                    //$unitdates=$unitdates[1]."/".$unitdates[0]."/".$unitdates[2];
                    $dates=mktime(0,0,0,$unitdates[1],$unitdates[0], $unitdates[2]);
                    //die(mktime(0,0,0,12, 24, 2014));;
                    
                    $navdata = new Object_InvestmentNav();
        		    $navdata->setFundName("$nav_data->fund_name");
        			$navdata->setUnitDate($dates);
        			$navdata->setBid("$bid");
        			$navdata->setOffer("$offer");
			$navdata->setKey('nav_'.date('d_m_y')."_1_"."$i".rand());
			$navdata->setO_parentId('35793');//daily-nav //live 12106 local//1292
    		        $navdata->setIndex(0);
    			    $navdata->setPublished(1);
                   // die(print_r($navdata));
                    $navdata->save();                
                    $i++;
                    
                    $input['fundname']=$nav_data->fund_name;
                    $input['dates']=$dates."_".$unitdates[1]."-".$unitdates[0]."-".$unitdates[2];
                    $input['bid']=$bid;
                    $input['offer']=$offer;
                    $navdata_r['xml_input']=$input;
                    
                    echo "<pre>";
                    print_r($input);
                    echo "</pre>";    
               }
                
             }

        }      
    }
    
    public function last3monthAction(){
	
	
	$db = Pimcore_Resource_Mysql::get();
	$nameCommunity = "object_query_30";
	
	$day=$_POST['day'];
	$month=$_POST['month'];
        $year=$_POST['year'];
	$getlastunitdate= $year."-".$month."-".$day;	
	
	$fundtype=$_POST['fundtype'];

	$getLast3m="SELECT a.fundname,a.bid,a.offer,DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) AS last_3_month
                        FROM object_query_30 AS a
                        WHERE fundname LIKE '%$fundtype%' AND 
                        DATE_ADD(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'), INTERVAL 1 DAY) >= DATE_ADD(STR_TO_DATE('$getlastunitdate','%Y-%m-%d'), INTERVAL- 1 DAY)
                        ORDER BY a.unitdate DESC";
	$last3mData=$db->fetchAll($getLast3m);
	$last3mData_en= json_encode($last3mData);
	
	echo json_encode(array(
                    'info' => "Success",
		    'data_fund' => $last3mData_en
                 ));
	
    }
    
   function pagination($query, $per_page = 10,$page = 1, $url = '?'){        
   
        $db = Pimcore_Resource_Mysql::get(); 
        $entries = new Object_InvestmentNav_List();
   	    foreach ($entries as $table)
		{
			 $nameCommunity = "object_query_".$table->getClassId();
        }
        
        $sql_subcat="SELECT *, FROM_UNIXTIME(unitdate,'%d-%m-%Y') AS unitdates  FROM ".$nameCommunity." AS xmlsource order by unitdate desc limit 10";
        $xmldata=$db->fetchAll($sql_subcat);
        
        return $xmldata;
        
   }
   
   public function deleteFileAction(){
	$file = $this->_getParam('url');
	$x = dirname(__DIR__)."/static/inv-fbshare/kalkulator/".$file;
	//unlink($x);
	
	if(unlink($x)){
		echo "Success";
	}
	else
	{
		echo "failed";
	}
    }
}
