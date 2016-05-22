<div align="center" style="min-height: 500px;">
<h2>Harap Tunggu ... </h2>
<div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
	<span class="sr-only">85% Complete</span>
  </div>
</div>
<?php //post proses
	if(isset($_POST[nama])){
		$waktu = date('d-m-Y');
		$postIN = array($_POST[nama],$_POST[asal],$_POST[telepon],$_POST[email],$_POST[tau_dari],htmlentities($_POST[pesan]." Waktu Daftar: ".$waktu));
		$masuk = new db;
		$updbIN = $masuk->BuatQuery("INSERT INTO peserta VALUES('','$postIN[0]','$postIN[1]','$postIN[2]','$postIN[3]','$postIN[4]','$postIN[5]',0)");
		if($updbIN){
		$nama = $postIN[0];
		?>
		<meta http-equiv="refresh" content="2; url=?ur=finish&nama=<?php echo $nama; ?>" />
		<?php
		}
	};
?>
</div>