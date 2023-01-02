<?php
error_reporting(0);
include "koneksi.php";
//baca isi tabel tmprfid
$sql = mysqli_query($konek, "select * from tmprfid");
$data = mysqli_fetch_array($sql);
//baca nokartu
$nokartu = $data['nokartu'];
?>
<!-- Loading form no kartu -->
<div class="col-md-6 form-group">
	<input type="text" name="nokartu" class="form-control" id="nokartu" placeholder="Nomor Kartu" value="<?php echo $nokartu; ?>">
</div>