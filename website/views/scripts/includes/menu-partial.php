<ul class="clearfix">
<?php foreach($this->container as $page): ?>
	<li>
		<a href="<?php echo $page->getUri()?>"><?php echo $page->getLabel()?></a>
		<div class="menu-level2">
			<a href="#" class="back">Back</a>
			<!--<ul class="noborder">
				<li class="menutitle">Profil</li>
				<li><a href="visimisi.php">Visi dan Misi</a></li>
				<li><a href="profil.php#tentang" onclick="navigateMe('tentang')">Tentang Allianz</a></li>
				<li><a href="profil.php#pesan" onclick="navigateMe('pesan')">Pesan CEO</a></li>
				<li><a href="profil.php#komposisi" onclick="navigateMe('komposisi')">Komposisi Saham</a></li>
				<li><a href="profil.php#dewan_direksi" onclick="navigateMe('dewan_direksi')">Dewan Direksi</a></li>
				<li><a href="profil.php#dewan_komisaris" onclick="navigateMe('dewan_komisaris')">Dewan Komisaris</a></li>
				<li><a href="profil.php#video" onclick="navigateMe('video')">Video Korporat</a></li>
			</ul>
			-->
			<!--div class="mainmenu noborder2"-->
			<ul class="noborder">
				<li class="menutitle"><span class="clickPage" onclick="link('profil')">Profil</span></li>
					<li><a href="visi-misi-allianz.php"> Visi dan Misi</a></li>
					<li><a href="profil.php#pro-tentang" onclick="navigateMe('tentang')">Tentang Allianz</a></li>
					<li><a href="profil.php#pro-pesan" onclick="navigateMe('pesan')">Pesan CEO</a></li>
					<li><a href="profil.php#pro-komposisi" onclick="navigateMe('komposisi')"> Komposisi Saham</a></li>
					<li><a href="profil.php#pro-dewan_direksi" onclick="navigateMe('dewan_direksi')"> Dewan Direksi</a></li>
					<li><a href="profil.php#pro-dewan_komisaris" onclick="navigateMe('dewan_komisaris')"> Dewan Komisaris</a></li>
					<li><a href="profil.php#pro-video" onclick="navigateMe('video')"> Video Korporat</a></li>
				</ul>
			<!--/div-->
			<ul>
				<li class="menutitle"><span class="clickPage" onclick="link('finansial')">Finansial</span></li>
				<li><a href="finansial.php#fin-fraud" onclick="navigateMe('fraud')">Fraud Warning</a></li>
				<li><a href="finansial.php#fin-rbc" onclick="navigateMe('rbc')">Risk Based Capital (RBC)</a></li>
				<li><a href="finansial.php#fin-report" onclick="navigateMe('report')">Laporan Keuangan</a></li>
			</ul>
			<ul>
				<li class="menutitle"><span class="clickPage" onclick="link('sosial')">Kepedulian Sosial</span></li>
				<!--<li><a href="sosial.php#yayasan_allianz_peduli" onclick="navigateMe('yayasan_allianz_peduli')">Yayasan Allianz Peduli</a></li>
				--><li><a href="sosial.php#community_champion" onclick="navigateMe('community_champion')">Community Champion</a></li>
				<li><a href="sosial.php#micro_insurance" onclick="navigateMe('micro_insurance')">Micro Insurance</a></li>
				<li><a href="sosial.php#donor_darah" onclick="navigateMe('donor_darah')">Donor Darah</a></li>
				<li><a href="sosial.php#perpustakaan_keliling" onclick="navigateMe('perpustakaan_keliling')">Perpustakaan Keliling</a></li>
			</ul>
			<ul>
				<li class="menutitle"><span class="clickPage" onclick="link('mitra-kerja')">Mitra Kerja</span></li>
				<li><a href="mitra-kerja.php#mk_atas" onclick="navigateMe('atas')">Allianz Star Network</a></li>
				<li><a href="mitra-kerja.php#mk_atas" onclick="navigateMe('atas')">Mitra Bancassurance</a></li>
				<li><a href="mitra-kerja.php#mk_bawah" onclick="navigateMe('bawah')">Saluran Distribusi Lainnya</a></li>
				<li><a href="mitra-kerja.php#mk_bawah" onclick="navigateMe('bawah')">Perusahaan Distribusi</a></li>
				<li><a href="mitra-kerja.php#mk_bawah" onclick="navigateMe('bawah')">Broker</a></li>
				<li><a href="mitra-kerja.php#mk_atas" onclick="navigateMe('atas')">Reasuransi</a></li>
				
				
			</ul>
			<ul>
				<li class="menutitle"><span class="clickPage" onclick="link('karir')">Karir</span></li>
				<li><a href="karir.php#top" onclick="navigateMe('top')">Mengapa Allianz Life Indonesia?</a></li>
				<li><a href="karir.php#top" onclick="navigateMe('top')">Bagaimana menjadi agen Allianz?</a></li>
				<li><a href="karir.php#top" onclick="navigateMe('top')">Pengembangan Karir</a></li>
				<li><a href="karir.php#bottom" onclick="navigateMe('bottom')">Allianz Profesional</a></li>
				<li><a href="karir.php#bottom" onclick="navigateMe('bottom')">Mengapa Bergabung?</a></li>
				<!--<li><a href="karir.php">Allianz Berani Berubah</a></li>-->
			</ul>
			
		</div>
	</li>
<?php endforeach;?>
</ul>