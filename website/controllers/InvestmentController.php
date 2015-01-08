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
        $mail->setSubject("Finansial Rasio Investment");
        $mail->setFrom("no-reply@allianz.co.id","Allianz Investment");
        $mail->setDocument($document);
        $mail->setParams($params);
        $mail->addTo($email);
        
        $mail->send();
        echo "Success";
    }
    
    public function investmentdailynavAction(){//show data into table
 
        $db = Pimcore_Resource_Mysql::get(); 
        $entries = new Object_InvestmentNav_List();
   	    foreach ($entries as $table)
		{
			 $nameCommunity = "object_query_".$table->getClassId();
        }
        
        
        /*
        $sql_subcat="SELECT *, FROM_UNIXTIME(unitdate,'%d-%m-%Y') AS unitdates  FROM ".$nameCommunity." AS xmlsource order by unitdate desc limit 10";
        $xmldata=$db->fetchAll($sql_subcat);
        
        $firstday=mktime(0,0,0,1,1,date("Y"));
        $today=mktime(0,0,0,date("m"),date("d"),date("Y"));
         
        $sql_byfundname="SELECT DISTINCT fundname,SUM(bid) AS total_bid, SUM(offer) AS total_offer 
                         FROM $nameCommunity 
                         WHERE unitdate >= $firstday AND unitdate <= $today 
                         GROUP BY fundName 
                         ORDER BY 1
                         LIMIT 10";
        $xmldata2=$db->fetchAll($sql_byfundname);
        */
        
         $getLastDay1M=" SELECT LAST_DAY(STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS last_one_month 
                        FROM $nameCommunity 
                        WHERE STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y') > DATE_ADD(NOW(), INTERVAL- 1 MONTH)
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
                         STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y') < STR_TO_DATE('$getday','%d-%m-%Y')  AND
	                            STR_TO_DATE(FROM_UNIXTIME(unitdate,'%d-%m-%Y'), '%d-%m-%Y') > DATE_ADD(NOW(), INTERVAL- 2 MONTH)
                         ORDER  BY 1 DESC";
                         
        $xmldata2=$db->fetchAll($getAllFundName);
        
        foreach($xmldata2 as $items){
            
            $getToday="SELECT a.fundname,bid,offer,STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') AS last_one_month
                       FROM $nameCommunity AS a
                       WHERE fundname='".$items['fundname']."' AND 
                       STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<= NOW()
                       ORDER BY 1 DESC
                       LIMIT 1";
            $todayData=$db->fetchAll($getToday);
           
            /*===========get 1 month=========*/
            $getfirst1m="SELECT a.fundname,bid,offer,STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') AS last_one_month
                        FROM $nameCommunity AS a
                        WHERE fundname='".$items['fundname']."' AND 
                        STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=DATE_ADD(NOW(), INTERVAL- 1 MONTH)
                        ORDER BY 1 DESC
                        LIMIT 1";
            $first1mData=$db->fetchAll($getfirst1m);
            
            $getlast="SELECT a.fundname,bid,offer,STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') AS last_one_month
                        FROM $nameCommunity AS a
                        WHERE fundname='".$items['fundname']."' AND 
                        STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=NOW()
                        ORDER BY 1 DESC
                        LIMIT 1";
            $lastData=$db->fetchAll($getlast);
            
            $getLast3m="SELECT a.fundname,bid,offer,STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') AS last_one_month
                        FROM $nameCommunity AS a
                        WHERE fundname='".$items['fundname']."' AND 
                        STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=DATE_ADD(NOW(), INTERVAL- 3 MONTH)
                        ORDER BY 1 DESC
                        LIMIT 1";
            $last3mData=$db->fetchAll($getLast3m);
  

            $getYtd="SELECT DISTINCT a.fundname,SUM(bid)AS ytd_bid,SUM(offer) AS ytd_offer,STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') AS today
                    FROM $nameCommunity AS a
                    WHERE	fundname='".$items['fundname']."' AND 
                    	STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') < STR_TO_DATE('30-12-2014','%d-%m-%Y') AND
                    	STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') >= DATE_FORMAT(NOW() ,'%Y-01-01')
                    GROUP BY fundname";                    
            $ytdData=$db->fetchAll($getYtd);
            
            
            /*1 YAER*/
            $get1year="SELECT a.fundname,bid,offer,STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') AS last_year
                    FROM $nameCommunity AS a
                    WHERE fundname='".$items['fundname']."' AND
                    STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y') <=DATE_ADD(NOW(), INTERVAL- 1 YEAR)
                    ORDER BY unitdate DESC
                    LIMIT 1";                    
            $last1year=$db->fetchAll($get1year);
            /*1 YAER*/
            
            /*GET ALLDATA DISTING BY FUNDNAME PERMONTH*/
            $getAllfundnamePermonth="SELECT DISTINCT (a.fundname), b.bid11, c.bid12 , d.bid1
                                    FROM $nameCommunity AS a LEFT OUTER JOIN
                                    	(
                                    	SELECT a.fundname,
                                    		AVG(bid) AS bid11,
                                    		AVG(offer) AS offer11,
                                    		MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS months,
                                    		YEAR(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS yaer
                                    	FROM $nameCommunity AS a 
                                    	WHERE STR_TO_DATE (FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=NOW()  AND
                                    	MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))=11
                                    	GROUP BY a.fundname, MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))
                                    	) AS b ON b.fundname=a.fundname LEFT OUTER JOIN
                                    	(
                                    	SELECT a.fundname,
                                    		AVG(bid) AS bid12,
                                    		AVG(offer) AS offer12,
                                    		MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS months,
                                    		YEAR(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS yaer
                                    	FROM $nameCommunity AS a 
                                    	WHERE STR_TO_DATE (FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=NOW()  AND
                                    	MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))=12
                                    	GROUP BY a.fundname, MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))
                                    	) AS c ON c.fundname=a.fundname LEFT OUTER JOIN
                                    	(
                                    	SELECT a.fundname,
                                    		AVG(bid) AS bid1,
                                    		AVG(offer) AS offer1,
                                    		MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS months,
                                    		YEAR(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS yaer
                                    	FROM $nameCommunity AS a 
                                    	WHERE STR_TO_DATE (FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=NOW()  AND
                                    	MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))=1
                                    	GROUP BY a.fundname, MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))
                                    	) AS d ON d.fundname=a.fundname
                                    	";
             $fundPerformPerMonth=$db->fetchAll($getAllfundnamePermonth);
            
            $last_data['today']=$todayData;
            $last_data['lastdata']=$lastData;
            $last_data['lastmonth']=$last1mData;
            $last_data['last3month']=$last3mData;
            $last_data['last1year']=$last1year;            
            $last_data['ytd']=$ytdData;
            $perform1year['perform1year']=$fundPerformPerMonth;
 
            $dataPerform[]=$perform1year;     
            $arrayLastData[]=$last_data;
        }
        
        
        /*bid fund*/            
            $getfundnamefilter="SELECT DISTINCT (a.fundname)
            	FROM $nameCommunity AS a 
            	WHERE STR_TO_DATE (FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=NOW()
            	GROUP BY a.fundname, DAY(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))";
            $fundnamefilter=$db->fetchAll($getfundnamefilter);     
             
            foreach($fundnamefilter as $fundnames){                
                $isFundName=$fundnames['fundname'];
                $getFundBidMonth="SELECT a.fundname,
                		AVG(bid) AS bid,
                		AVG(offer) AS offer,
                		DAY(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS days,
                		MONTH(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS months,
                		YEAR(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')) AS yaers
                	FROM $nameCommunity AS a 
                	WHERE 
                    a.fundname ='$isFundName' and
                    STR_TO_DATE (FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y')<=NOW()
                	GROUP BY a.fundname, DAY(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))
                	ORDER BY a.fundname,DAY(STR_TO_DATE(FROM_UNIXTIME(a.unitdate,'%d-%m-%Y'), '%d-%m-%Y'))";
                    
                $fundBidMonth[]=$db->fetchAll($getFundBidMonth);
            
            }
            
    //        echo "<pre>";
//            print_r($fundBidMonth);
//            echo "</pre>";
            
            foreach($fundBidMonth as $result){
             
                $itemss['fundname']=$result[0]['fundname'];
                $itemss['total']=count($result);
                $itemss['year']=$result[0]['yaers'];
                $itemss['month']=$result[0]['months'];
                
                for($j=0; $j<count($result);$j++){
                        
                      $bid.=$result[$j]['bid'].",";
                      $biddate.=$result[$j]['days'].",";
                    
                }
               // echo $bid ."<br>";
                //$itemss['datebid']=$datebid;
                $itemss['fundbit']=substr($bid, 0, -1);
                $itemss['biddate']=substr($biddate, 0, -1);
                $arrayItem[]= $itemss;
                $bid="";
            }    
        
        sort($arrayLastData);      
        $alldata['ytd']=$arrayLastData;
        $alldata['dataGraph']=$arrayItem;
        $alldata['dataPerforms']=$dataPerform;
        $this->view->data=$alldata;     

        //$alldata['defult_data']=$xmldata;
       // $alldata['ytd']=$last_data;
       	   
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
                        $conditions=" $takeoff_fundname and unitdate >= $start and unitdate <= $end and ".$fundtypes;
                    }else{
                        $conditions=" $takeoff_fundname and unitdate >= $start and unitdate <= $end ";
                    }
                }else{
                    
                    if($fundtypes!=""){
                        $conditions=" $takeoff_fundname and unitdate=$start and ".$fundtypes;
                    }else{
                         $conditions=" $takeoff_fundname and unitdate=$start";
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
            $entries = new Object_InvestmentNav_List();
            $entries->setOrderKey("unitdate");
            $entries->setOrder("desc");
            
            $this->view->data=$entries;	 
       		foreach ($entries as $table)
		      {
			     $nameCommunity = "object_query_".$table->getClassId();
		      }

            $sql_subcat="SELECT *,FROM_UNIXTIME(unitdate,'%d-%m-%Y') AS unitdates FROM ".$nameCommunity." AS xmlsource ".$conditions." order by fundname desc,unitdate";
            $xmldata=$db->fetchAll($sql_subcat);
            
           $data['xml_data']=$xmldata;
           $data['resume_data']=$resumedata;
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
                    $navdata->setKey('nav_'.date('d_m_y')."$i");
    		        $navdata->setO_parentId('1296');//live 1296 local//1292
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
    
    
    
    
}
