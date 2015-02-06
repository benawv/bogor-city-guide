<div id="map-shortcut">
	<h3>Pilih Jenis Kantor:</h3>
		<select class="combo kantor">
			<option value="">Pilih Semua</option>
		<?php	$jenis = Object_MarketingOfficeJenis::getList(array("orderKey" => array("jenis"), "order" => array("asc")));
			foreach($jenis as $row)
			{
		?>
				<option value="<?php echo $row->getId();?>"><?php echo $row->getJenis();?></option>
		<?php 	} ?>
		</select>
		
	<h3>Pilih wilayah:</h3>
		
		<select class="combo wilayah">
		  <option value="-2.6806246,115.8034375,5,">Pilih Semua</option>
		  <!--<option item="jakarta" value="-6.185772, 106.810804, 11">Jakarta</option>
		  <option value="-2.991103, 104.756701, 12">Sumatera Selatan</option>
		  <option value="0.535365, 101.431576, 12">Riau</option>
		  <option value="-0.494187, 117.156903, 12"">Samarinda</option>
		  <option value="-1.277198, 116.840546, 12">Balikpapan</option>
		  <option value="1.482009, 124.835022, 15">Manado</option>
		  <option value="-6.925385, 107.630928, 8">Jawa Barat</option>
		  <option value="-6.9667, 110.4167, 8">Jawa Tengah</option>
		  <option value="-7.755218, 113.218231, 8">Jawa Timur</option>
		  <option value="-8.683207, 115.527269, 9">Bali dan Nusa Tenggara</option>-->
		  <?php	$wilayah = Object_MarketingOfficeWilayah::getList(array("orderKey" => array("namaWilayah"), "order" => array("asc")));
			foreach($wilayah as $row)
			{
		?>
				<option value="<?php echo $row->getLatitude().",".$row->getLongitude().",".$row->getRuangLingkup().",".$row->getId();?>"><?php echo $row->getNamaWilayah();?></option>
		<?php 	} ?>
		</select>
</div>