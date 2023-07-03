<div class="container">
<div class="panel-heading text-center">
        <h2> Data Peminjaman dan Pengembalian Buku Perpustakaan</h2>
    </div>
                <div class="panel-body">
                    <?php
                    $sql = "SELECT *FROM peminjaman WHERE id='" . $_GET ['id'] . "'";
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Judul Buku</td> <td><?= $data['judul_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Peminjam</td> <td><?= $data['peminjam'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pinjam</td> <td><?= $data['tgl_pinjam'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Kembali</td> <td><?= $data['tgl_kembali'] ?></td>
                        </tr>
                        <tr>
                            <td>Lama Pinjam</td> <td><?= $data['lama_pinjam'] ?></td>
                        </tr>
						<tr>
                            <td>No. Anggota</td> <td><?= $data['no_anggota'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td> <td><?= $data['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td> <td><?= $data['no_tlp'] ?></td>
                        </tr>

                    </table>
				
                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Peminjaman </a>

                </div>

</div>

