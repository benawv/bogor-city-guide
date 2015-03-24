<link rel="stylesheet" href="/website/static/css-ajfc/daftar-peserta/css/jquery.dataTables.css"></link>
<script src="/website/static/css-ajfc/daftar-peserta/js/jquery.dataTables.js"></script>

<div class="full-w bg-white" style="text-align:left;">
	<div class="description">
		<div>
			<table id="example" class="display" cellspacing="0" width="80%">
    <thead>
        <tr>
            <th>No</th>
	    <th>No Peserta Lari</th>
	    <th>Nama</th>
	    <th>Tanggal Lahir</th>
        </tr>
    </thead>
 
    <tbody>
	<?php
		$data = new Object_DataPesertaAJFC_List();
		$x = 1;
		foreach($data as $peserta)
		{
	?>
		<tr>
		    <td><?php echo $x;?></td>
		    <td><?php echo "";?></td>
		    <td><?php echo $peserta->getNamaLengkap();?></td>
		    <td><?php echo date("d - m - Y",strtotime($peserta->getTanggalLahir()));?></td>
		</tr>
	<?php
			$x++;
		}
	?>
    </tbody>
</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>