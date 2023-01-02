<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
	include "koneksi.php";
	
	//baca id data yang akan dihapus
	$id = $_GET['id'];

	//hapus data
	$hapus = mysqli_query($konek, "delete from pengunjung where id='$id'");

	//jika berhasil terhapus tampilkan pesan Terhapus
	//kemudian kembali ke data pengunjung
	if($hapus)
	{
		// echo
        //             "<script> 
        //             Swal.fire({
        //                 position: 'center',
        //                 icon: 'success',
        //                 title: 'Update',
        //                 text: 'data berhasil diubah',
        //                 showConfirmButton: false,
        //                 timer: 2000
        //             }).then(()=> location = 'data-sandal.php')
        //         </script>";
		echo "
			<script>
				alert('Terhapus');
				location.replace('data-sandal.php');
			</script>
		";
	}
	else
	{
		echo "
			<script>
				alert('Gagal Terhapus');
				location.replace('data-sandal.php');
			</script>
		";
	}

?>