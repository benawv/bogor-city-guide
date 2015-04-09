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
				if($tgl1 <= $tgl2)
				{
					$this->enableLayout();
					$this->setLayout('ajfc');
					$this->view->peserta = $data;
				}
				else{
					$this->redirect("/ajfc/expire/expire-page");
				}
			}
		}
		else
		{
			$this->redirect("/ajfc");
		}
	}
	
}