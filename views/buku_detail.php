<div class="container">
<div class="panel-heading text-center">
        <h2> Detail Buku Perpustakaan</h2>
    </div>
                <div class="panel-body">
                    <?php
                    $sql = "SELECT *FROM buku WHERE id ='" . $_GET ['id'] . "'";
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Loker Buku</td> <td><?= $data['loker_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Rak/Lemari</td> <td><?= $data['no_rak'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Tingkat/Laci</td> <td><?= $data['no_laci'] ?></td>
                        </tr>
						<tr>
                            <td>Nomor Boks</td> <td><?= $data['no_boks'] ?></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td> <td><?= $data['judul_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pengarang</td> <td><?= $data['nama_pengarang'] ?></td>
                        </tr>
						<tr>
                            <td>Tahun Terbit</td> <td><?= $data['tahun_terbit'] ?></td>
                        </tr>
						<tr>
                            <td>Penerbit Buku</td> <td><?= $data['penerbit'] ?></td>
                        </tr>
						<tr>
                            <td>Penerima Buku</td> <td><?= $data['penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> 
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Buku </a>

                </div>


</div>

