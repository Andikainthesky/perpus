<?php
$id=$_GET['uid'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM user WHERE username='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
<div class="panel-heading text-center">
        <h2> Edit Data Pengguna</h2>
    </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                             <div class="col-sm-9">
								<input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Input Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" value="<?=$data['username']?>"class="form-control" id="inputEmail3" placeholder="Input Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?=$data['email']?>" class="form-control" id="inputPassword3" placeholder="Input Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Input Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">Update Data User</button>
                            </div>
                        </div>
                    </form>


                </div>
</div>

<?php
if($_POST){
    $nama=$_POST['nama'];
	  $username=$_POST['username'];
		$email =$_POST['email'];
		$ket =$_POST['ket'];
    $sql="UPDATE user SET nama = '$nama', username='$username', email='$email',
	       ket='$ket' WHERE username='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit User Error");
    if ($query){
        echo "<script>window.location.assign('?page=user&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>
