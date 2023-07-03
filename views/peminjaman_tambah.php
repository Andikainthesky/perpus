<?php
$judulbuku=$_GET['judulbuku'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM buku WHERE judul_buku ='$judulbuku'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
<div class="panel-heading text-center">
        <h2>Form Peminjaman Buku</h2>
    </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="judulbuku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
								<input type="text" name="judulbuku" value="<?=$data['judul_buku']?>" class="form-control" id="judul_buku" placeholder="Nomor Perkara" readonly="true">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" class="form-control" id="peminjam" placeholder="Nama Lengkap Peminjam">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglPinjam" class="form-control" id="tglPinjam" placeholder="Tanggal Pinjam">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="no_anggota" class="col-sm-3 control-label">No. Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_anggota" class="form-control" id="no_anggota" placeholder="Nomor Anggota Perpustakaan">
                            </div>
                        </div>
                        <!-- <--> 
                        <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Kelas Peminjam">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Peminjam">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_tlp" class="col-sm-3 control-label">No. Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_tlp" class="form-control" id="no_tlp" placeholder="Nomor Telepon Peminjam">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">Simpan Peminjaman</button>
                            </div>
                        </div>
                    </form>


                </div>


</div>

<?php
if($_POST){
    $noPerkara=$_POST['judul_buku'];
	$peminjam=$_POST['peminjam'];
	$tglPinjam=$_POST['tglPinjam'];
    $no_anggota=$_POST['no_anggota'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];
    $sql="INSERT INTO peminjaman VALUES ('$judulbuku','$peminjam','$tglPinjam','Belum Kembali','','$no_anggota','$kelas','$alamat','$no_tlp','')";
	$sqlBuku="UPDATE buku SET status='Dipinjam' WHERE judul_buku='$judulbuku'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
	$queryBuku=  mysqli_query($koneksi, $sqlBuku) or die ("SQL Simpan Data Buku Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
