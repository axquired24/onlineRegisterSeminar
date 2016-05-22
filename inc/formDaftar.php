<script src="../bs3_dist/js/jquery.js"></script>
<script type="text/javascript">
	$(".active").removeClass("active");
	$(".form").addClass("active");
</script>

<h2>Data Peserta Seminar #GetYourProfit !</h2>
<form role="form" method="post" enctype="multipart/form-data" action="?ur=post_proses">
  <div class="form-group">
    <label for="namaLengkap">Nama Lengkap *</label>
    <input type="text" class="form-control" id="namaLengkap" name="nama" placeholder="Nama asli kamu. Contoh: Alvina Novaisyah Putri" required>
  </div>
  
  <div class="form-group">
    <label for="asal">Asal *</label>
    <input type="text" class="form-control" id="asal" name="asal" placeholder="Asal kamu. contoh: Universitas Muhammadiyah Surakarta/ MA Negeri 4/ Umum" required>
  </div>
  
  <div class="form-group">
    <label for="telepon">Telepon *</label>
    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Nomor yang dapat kami hubungi untuk verifikasi transfer anda. contoh : 0896-3456-2323" required>
  </div>
  
  <div class="form-group">
    <label for="email">Email *</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Isi email kamu disini untuk mendapatkan info terbaru seputar seminar. contoh: himatifums@gmail.com" required>
  </div>
  
  <div class="form-group"><label for="vote">Tau seminar ini dari?</label>
	<select name="tau_dari" id="vote" class="form-control">
	  <option value="Teman">Diajak Teman</option>
	  <option value="Pamflet">Lihat Pamflet</option>
	  <option value="Sosmed">Nemu di facebook/twitter/ sosmed lainnya</option>
	  <option value="Lainnya">Lainnya</option>
	</select>
   </div>
   
   <div class="form-group"><label for="pesan">Ada pesan buat kami? Tulis aja disini ^^</label>
	<textarea name="pesan" id="pesan" cols="30" rows="4" class="form-control" placeholder="Tulis pesan kamu disini. kami akan membacanya .."></textarea>
   </div>
  
  <div class="checkbox">
    <label>
      <input type="checkbox" required> Saya akan mendaftar seminar #GetYourProfit secara online.
    </label>
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>
  <button type="reset" class="btn btn-default">Reset</button>
</form>