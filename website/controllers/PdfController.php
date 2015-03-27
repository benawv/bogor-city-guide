<?php

class PdfController extends Website_Controller_Action {
	public function helloAction()
	{
		$pdf = new Zend_Pdf();
		$page = $pdf->newPage(Zend_Pdf_Page::SIZE_A4_LANDSCAPE); 
		$pdf->pages[] = $page;
		$image = Zend_Pdf_Image::imageWithPath('website/static/images/template-no-lari/ajfc.jpg');
		$page->drawImage($image, 0, 0, 842, 595);
		
		$arial = Zend_Pdf_Font::fontWithPath('website/static/font-pdf-ajfc/arialbd.ttf');
		$page->setFont($arial, 95);
		
		$page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))
			->drawText('9999', 471, 267);
			
		$page->setFont($arial, 30);
		
		$page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))
			->drawText('MUHAMMAD ROBBI NUGRAHA', 230, 210);
		//$page->setFont($arial, 30);
		//
		//$page->setFillColor(Zend_Pdf_Color_Html::color('#005399'));
		//
		//$this->drawCenteredText($page, "MUHAMMAD ROBBI NUGRAHA", 210);
		
		
		$pdf->save('website/static/pdf-no-lari/hello.pdf');
		
		//$font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA);
		//$pdf = new Zend_Pdf();
		//
		//// Create a new page, add to page listing
		//$pdfPage = $pdf->newPage(Zend_Pdf_Page::SIZE_LETTER_LANDSCAPE);
		//$pdf->pages[] = $pdfPage;
		//
		//// Add certify that
		//$pdfPage->setFont($font, 15.75);
		//$this->drawCenteredText($pdfPage, "THIS IS TO CERTIFY THAT", 378);
		//
		//// Add name
		//$pdfPage->setFont($font, 39.75);
		//$this->drawCenteredText($pdfPage, "Example", 314.25);
		//
		//// Output PDF
		//$pdf->save('website/static/pdf-no-lari/hello123.pdf');

	}
	
	function drawCenteredText($page, $text, $bottom) {  
		$text_width = $this->getTextWidth($text, $page->getFont(), $page->getFontSize());
		$box_width = $page->getWidth();
		$left = (($box_width - $text_width) / 2)+20;
	    
		$page->drawText($text, $left, $bottom, 'UTF-8');
	    }
	    
	function getTextWidth($text, $font, $font_size) {
	    $drawing_text = iconv('', 'UTF-8', $text);
	    $characters    = array();
	    for ($i = 0; $i < strlen($drawing_text); $i++) {
		$characters[] = (ord($drawing_text[$i++]) << 8) | ord ($drawing_text[$i]);
	    }
	    $glyphs        = $font->glyphNumbersForCharacters($characters);
	    $widths        = $font->widthsForGlyphs($glyphs);
	    $text_width   = (array_sum($widths) / $font->getUnitsPerEm()) * $font_size;
	    return $text_width;
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