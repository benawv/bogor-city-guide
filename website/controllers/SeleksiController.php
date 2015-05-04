<?php

class SeleksiController extends Website_Controller_Action {
	
	public function kuisAction () {
		$id = $this->_getParam('id');
		$data = new Object_DataPesertaAJFC_List();
		$data->setCondition("`idPeserta`='".$id."' AND (`statusSubmitKuis` IS NULL OR `statusSubmitKuis` = 0)");
		if(count($data) == 1)
		{
			foreach($data as $row)
			{
				$today = strtotime(date('Y-m-d H:i'));
				$tgl1 = new Pimcore_Date($today);
				$tgl2 = $row->getTglExpireKuis();
				
				//$date2 = strtotime(date('Y-m-d 23:59'));
				//$today2 = new Pimcore_Date($date2);
				//echo $today;
				//die();
				//if($tgl1 <= $today2)
				if($tgl1 <= $tgl2)
				{
					$this->enableLayout();
					$this->setLayout('ajfc');
					$this->view->peserta = $data;
				}
				else{
					$this->redirect("/expire/expire-page");
				}
			}
		}
		else
		{
			$data2 = new Object_DataPesertaAJFC_List();
			$data2->setCondition("`idPeserta`='".$id."' AND `statusSubmitKuis` = 1");
			if(count($data2) == 1)
			{
				$this->redirect("/thanks/sudah-submit");
			}
			else{
				$this->redirect("/");
			}
		}
	}
	
}