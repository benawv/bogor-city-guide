<?php

class TujuanFinansialController extends Website_Controller_Action { 
	
	public function indexAction() {
		$this->enableLayout();
	}
	
	public function FV($rate = 0, $nper = 0, $pmt = 0, $pv = 0, $type = 0) {
	
		// Validate parameters
		if ($type != 0 && $type != 1) {
        	return False;
		}
    
		// Calculate
		if ($rate != 0.0) {
           return -$pv * pow(1 + $rate, $nper) - $pmt * (1 + $rate * $type) * (pow(1 + $rate, $nper) - 1) / $rate;
		} else {
           return -$pv - $pmt * $nper;
		}
	}
	
	public function PV($rate,$nper,$pmt) {
		
		$z = 1/(1+$rate);
        return ($pmt*$z*(1-pow($z,$nper)))/(1-$z);
        
	}
	
	public function PMT($ir=0, $np=0, $pv=0, $fv=0, $type=0) {
		
		/*
        * ir   - interest rate per month
        * np   - number of periods (months)
        * pv   - present value
        * fv   - future value
        * type - when the payments are due:
        *        0: end of the period, e.g. end of month (default)
        *        1: beginning of period
        */
        
        //return $ir * $pv * pow((1 + $ir), $np) / (1 - pow((1 + $ir), $np));
        $pvif = pow(1+$ir,$np);
        return $ir * $pv * ($pvif + $fv) / ($pvif - 1);
        
	}
	
	public function PMT1($rate, $per, $nper, $pv, $fv) {
		$rate = $rate/(1*100);
        $x = pow(1+$rate,$nper);
        
        return -(($rate * ($fv+$x*$pv))/(-1+$x));
	}
	
	public function PMT2($rate, $per, $nper, $pv, $fv) {
		$x = pow(1+$rate,$nper);
        
        return -(($rate * ($fv+$x*$pv))/(-1+$x));
	}
	
	public function calculateAction() {
		$total = 0;
	    for($i=1;$i<=5;$i++)
	    {
	        $nilai = $this->_getParam('soal'.$i);
	        $total = $total + $nilai;
	    }
	    $member = $_POST["member"];
	    $soal6 = $_POST["soal6"];
	    
	    if($soal6=='dd')
	    {
	        $dd = $this->_getParam('dd');
	        $lama = $this->_getParam('lama');
	        $inflasi = $this->_getParam('inflasi');
	        $kembalian = $this->_getParam('kembalian');
	        
	        $future_value = $this->FV($inflasi/100, $lama, 0, $dd);
	        
	        $text['FV'] = number_format($future_value*-1,2);
	        $text['PMT'] = number_format(($this->PMT($kembalian/100, $lama, $dd)),2);
	        $text['PMT_bulan'] = number_format((($this->PMT($kembalian/100, $lama, $dd)))/12,2);
	    }
	    if($soal6=='dp')
	    {
	        $dp = $_POST["dp"];
	        $lama_pensiun = $this->_getParam('lama_pensiun');
	        $inflasi = $this->_getParam('inflasi');
	        $investasi = $this->_getParam('investasi');
	        $lama_menikmati = $this->_getParam('lama_menikmati');
	        
	        $future_value = $this->FV($inflasi/100, $lama_pensiun, 0, $dp);
	        $pvad = $this->PV(($investasi-$inflasi)/100,$lama_menikmati,-($future_value));
	        $text['FV'] = number_format($future_value*-1,2);
	        $text['PMT'] = number_format(($this->PMT1($investasi, 1, $lama_pensiun, 0, -($pvad))),2);
	        $text['PMT_bulan'] = number_format((($this->PMT1($investasi, 1, $lama_pensiun, 0, -($pvad))))/12,2);
	        $text['PVAD'] = number_format($this->PV(($investasi-$inflasi)/100,$lama_menikmati,-($future_value)),2);
	    }
	    
	    if($soal6=='pa')
	    {
	        $pa = $_POST["pa"];
	        $lama_waktu_pendidikan = $_POST["lama_waktu_pendidikan"];
	        $inflasi = $_POST["inflasi"];
	        $investasi = $_POST["investasi"];
	        
	        $future_value = $this->FV($inflasi/100, $lama_waktu_pendidikan, 0, $pa);
	        $text['FV'] = number_format($future_value*-1,2);
	        $text['PMT'] = number_format(($this->PMT2(($investasi/100)/12, 1, $lama_waktu_pendidikan*12, 0, $future_value)*12),2);
	        $text['PMT_bulan'] = number_format($this->PMT2(($investasi/100)/12, 1, $lama_waktu_pendidikan*12, 0, $future_value),2);
	    }
	    
	    if($total < 32)
	    {
	        $text['item1'] = "Anda termasuk investor yang Sangat Konservatif dimana masih mementingkan keutuhan nilai pokok investasi";
	        $text['item2'] = "dan sangat rentan terhadap fluktuasi hasil investasi. Anda dapat menginvestasikan dana Anda di:";
	        if($member=='all')
	        {
	            $text['item3'] = "<span class='ungu'>SMARTLINK MONEY MARKET FUND atau ALLISYA MONEY MARKET (Investor UL)</span><br /><span class='merah'>DPLK MONEY MARKET FUND (Investor DPLK)</span>";
	        }
	        elseif($member=='ul')
	        {
	            $text['item3'] = "<span class='ungu'>SMARTLINK MONEY MARKET FUND atau ALLISYA MONEY MARKET (Investor UL)</span>";
	        }
	        elseif($member=='dplk')
	        {
	            $text['item3'] = "<span class='merah'>DPLK MONEY MARKET FUND (Investor DPLK)</span>";
	        }
	    }
	    
	    elseif($total < 54 && $total > 32)
	    {
	        $text['item1'] = "Anda termasuk investor Konservatif-Moderate yang tetap mementingkan pada kebutuhan nilai pokok investasi, tapi mulai bersedia <br />menerima fluktuasi dalam jangka menengah utnuk mendapatkan hasil investasi yang lebih tinggi.";
	        $text['item2'] = "Anda dapat menginvestasikan dana Anda di:";
	        if($member=='all')
	        {
	            $text['item3'] = "<span class='ungu'>SMARTLINK FIXED INCOME FUND, MANAGED FUND USD atau ALLISYA FIXED INCOME FUND (Investor UL)</span><br /><span class='merah'>DPLK FIXED INCOME atau DPLK USD FUND (Investor DPLK)</span>";
	        }
	        elseif($member=='ul')
	        {
	            $text['item3'] = "<span class='ungu'>SMARTLINK FIXED INCOME FUND, MANAGED FUND USD atau ALLISYA FIXED INCOME FUND (Investor UL)</span>";
	        }
	        elseif($member=='dplk')
	        {
	            $text['item3'] = "<span class='merah'>DPLK FIXED INCOME atau DPLK USD FUND (Investor DPLK)</span>";
	        }
	    }
	    
	    elseif($total < 75 && $total > 53)
	    {
	        $text['item1'] = "Anda termasuk investor Moderate dan sudah mulai mencoba jenis-jenis investasi yang menghasilkan return<br />yang cukup tinggi dengan potensi fluktuasi negatif nilai investasinya.";
	        $text['item2'] = "Anda dapat menginvestasikan dana Anda di:";
	        if($member=='all')
	        {
	            $text['item3'] = "<span class='ungu'>SMARTLINK BALANCED FUND atau ALLISYA BALANCED FUND (investor UL)</span><br /><span class='merah'>DPLK FIXED INCOME atau DPLK USD FUND (Investor DPLK)</span>";
	        }
	        elseif($member=='ul')
	        {
	            $text['item3'] = "<span class='ungu'>SMARTLINK BALANCED FUND atau ALLISYA BALANCED FUND (investor UL)</span>";
	        }
	        elseif($member=='dplk')
	        {
	            $text['item3'] = "<span class='merah'>DPLK FIXED INCOME atau DPLK USD FUND (Investor DPLK)</span>";
	        }
	    }
	    
	    elseif($total > 75)
	    {
	        $text['item1'] = "Anda termasuk investor yang Agresif dan siap menerima fluktuasi return negatif. Kesiapan ini didukung dengan jangka waktu<br />investasi Anda yang panjang.";
	        $text['item2'] = "Anda dapat menginvestasikan dana Anda di:";
	        if($member=='all')
	        {
	            $text['item3'] = "<span class='ungu'>SMARTLINK EQUITY FUND (investor UL)</span><br /><span class='merah'>DPLK EQUITY FUND atau DPLK SYARIAH (Investor DPLK)</span>";
	        }
	        elseif($member=='ul')
	        {
	            $text['item3'] = "<span class='ungu'>SMARTLINK EQUITY FUND (investor UL)</span>";
	        }
	        elseif($member=='dplk')
	        {
	            $text['item3'] = "<span class='merah'>DPLK EQUITY FUND atau DPLK SYARIAH (Investor DPLK)</span>";
	        }
	    }
	    
	    echo json_encode($text);
	}
	
}