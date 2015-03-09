<?php

class PdfController extends Website_Controller_Action {
	public function helloAction()
	{
		$pdf = new Zend_Pdf();
		$page = $pdf->newPage(Zend_Pdf_Page::SIZE_A4_LANDSCAPE); 
		$pdf->pages[] = $page;
		$page->setFont(Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA), 10);
		$page->drawText('Hello world!', 100, 510);
		
		$pdf->save('hello.pdf'); 
	}
	
	public function sendAction(){
		$mail = new Pimcore_Mail();
		$mail->setSubject("Test Email");
		$mail->setBodyText("This is just plain text");
		$mail->setFrom("no-reply@dreamcube.co.id","Dreamcube");
		$mail->addTo("benawv@gmail.com");

		$file = 'hello.pdf';
		$at = new Zend_Mime_Part(file_get_contents($file));
		$at->filename = basename($file);
		$at->disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
		$at->encoding = Zend_Mime::ENCODING_8BIT;

		$mail->addAttachment($at);

		try {
			$mail->send();
		} catch (Exception $e) {
			print_r($e);
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
}