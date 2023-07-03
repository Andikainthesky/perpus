<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
<div class="panel-heading text-center">
        <h2> Edit Data Peminjaman dan Pengembalian Buku</h2>
    </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="judulbuku" class="col-sm-3 control-label">Judul Buku</label>
                             <div class="col-sm-9">
								<input type="text" name="judulbuku" value="<?=$data['judul_buku']?>"class="form-control" id="judul_buku" placeholder="Judul Buku" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" value="<?=$data['peminjam']?>"class="form-control" id="peminjam" placeholder="Nama Peminjam">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Kembali</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun_kem" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan_kem" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal_kem" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="no_anggota" class="col-sm-3 control-label">No. Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_anggota" value="<?=$data['no_anggota']?>" class="form-control" id="no_anggota" placeholder="Nomor Anggota Perpustakaan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" value="<?=$data['kelas']?>" class="form-control" id="kelas" placeholder="Kelas Peminjam">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="alamat" placeholder="Alamat Peminjam">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_tlp" class="col-sm-3 control-label">No. Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_tlp" value="<?=$data['no_tlp']?>" class="form-control" id="no_tlp" placeholder="Nomor Telepon Peminjam">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">Update Data Pinjaman</button>
                            </div>
                        </div>
                    </form>


                </div>

</div>

<?php 
if($_POST){
    $judulbuku=$_POST['judulbuku'];
	$peminjam=$_POST['peminjam'];
	$tglPinjam=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
	$tglKembali=$_POST['tahun_kem']."-".$_POST['bulan_kem']."-".$_POST['tanggal_kem'];
		$thnKem =$_POST['tahun_kem'];
		$thnpin =$_POST['tahun'];
		$blnKem =$_POST['bulan_kem'];
		$blnpin =$_POST['bulan'];
		$tglKem =$_POST['tanggal_kem'];
		$tglpin =$_POST['tanggal'];
	$lamapinjam= (($thnKem - $thnpin)*365)+(($blnKem - $blnpin)*30)+($tglKem - $tglpin);
    $no_anggota=$_POST['no_anggota'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];
    $sql="UPDATE peminjaman SET judul_buku = '$judulbuku', peminjam='$peminjam', tgl_pinjam='$tglPinjam', tgl_kembali='$tglKembali', lama_pinjam='$lamapinjam',
	no_anggota='$no_anggota', kelas='$kelas', alamat='$alamat', no_tlp='$no_tlp' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



