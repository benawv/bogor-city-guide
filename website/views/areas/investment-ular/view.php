<style>
    .daily-deskripsi p{
	font-size:11px;
    }
</style>
<ul>
    <?php
	$obj = new Object_InvestmentAnnualReport_List();
	$obj->setLimit(1);
	$obj->setOrderKey("tanggal");
	$obj->setOrder("desc");
	$x = 1;
	foreach($obj as $data)
	{
	    $judul = $data->getJudul();
	    $deskripsi = $data->getDeskripsi();
	    $pdf = $data->getPdf();
	    if($x != 1)
	    {
		$deskripsi = "";
	    }
    ?>
	    <li>
		<a href="<?php echo $pdf != "" ? $pdf : "#";?>"  <?php echo $pdf != "" ? "target='_blank'" : "";?>>
		    <?php echo $judul;?>
		</a>
		<div class="daily-deskripsi"><?php echo $deskripsi;?></div>
	    </li>
    <?php
	    
	    $x++;
	}
    ?>
</ul>