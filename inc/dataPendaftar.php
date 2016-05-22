<script src="../bs3_dist/js/jquery.js"></script>
<script type="text/javascript">
	$(".active").removeClass("active");
</script>

<div style="min-height: 500px;">
	<h2>Pendaftar Seminar #GetYourProfit !</h2><br />
	<table class="table table-striped table-hover">
		<thead>
			<th>#</th>
			<th>Nama Lengkap</th>
			<th>Asal</th>
			<th>Telepon</th>
			<th>Email</th>
			<th>Plus (+)</th>
		</thead>
		<tbody style="text-transform: capitalize;">
	<?php
	   $peserta = new db;
	   $peserta->BuatQuery("SELECT * FROM peserta order by idPeserta DESC");
	   $num = 1;
	   while($baris=$peserta->BuatArray()){	   
	?>
			<tr>
				<td><?php echo $num; ?></td>
				<td><?php echo $baris[nama]; ?></td>
				<td><?php echo $baris[asal]; ?></td>
				<td><?php echo $baris[telepon]; ?></td>
				<td><?php echo $baris[email]; ?></td>
				<td><a href="#" title="Tau dari: <?php echo $baris[tau_dari]; ?>.  Pesan: <?php echo $baris[pesan]; ?>">+</a></td>
			</tr>
	<?php $num += 1; }; ?>
		</tbody>
	</table>
</div>