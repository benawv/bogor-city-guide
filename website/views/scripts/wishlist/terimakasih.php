<div class="divTerima container boxes-view">
	<div class="terimaKasih">
		<div class="kata_kata">
			<div class="kata-kiri">
				<img src="/website/static/images/terima_kasih/logo.png" />
			</div>
			<div class="kata-kanan">
				<h2>Terima Kasih</h2>
				<h3>Pesan anda telah kami terima</h3>
				Silahkan cek email Anda untuk melihat rincian produk yang Anda pesan.
			</div>
		</div>
	</div>
</div>


<script type='text/javascript'>

// Conversion Name: Allianz 2015_9

// INSTRUCTIONS 

// The Conversion Tags should be placed at the top of the <BODY> section of the HTML page. 

// In case you want to ensure that the full page loads as a prerequisite for a conversion 

// being recorded, place the tag at the bottom of the page. Note, however, that this may 

// skew the data in the case of slow-loading pages and in general not recommended. 

//

// NOTE: It is possible to test if the tags are working correctly before campaign launch 

// as follows:  Browse to http://bs.serving-sys.com/Serving/adServer.bs?cn=at, which is 

// a page that lets you set your local machine to 'testing' mode.  In this mode, when 

// visiting a page that includes an conversion tag, a new window will open, showing you 

// the data sent by the conversion tag to the MediaMind servers. 

// 

// END of instructions (These instruction lines can be deleted from the actual HTML)

var ebRand = Math.random()+'';

ebRand = ebRand * 1000000;

//<![CDATA[ 

document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=676422&amp;rnd=' + ebRand + '"></scr' + 'ipt>');

//]]>

</script>

<noscript>

<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=676422&amp;ns=1"/>

</noscript>



<?php
	if($this->document->getProperty('script')){
		echo "<script>".$this->document->getProperty('script')."</script>";
		echo '<noscript><img width="1" height="1" style="border:0" src="'.$this->document->getProperty('noscript').'" /></noscript>';
	}
?>