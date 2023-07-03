<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="panel-heading text-center">
        <h2>Data Peminjaman dan Pengembalian Buku</h2>
    </div>

                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul Buku</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Pengembalian</th>
                                <th>Lama Pinjaman</th>
                                <th>Info</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM peminjaman";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            $nomor = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; 
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['judul_buku'] ?></td>
									<td><?= $data['peminjam'] ?></td>
									<td><?= $data['tgl_pinjam'] ?></td>
                                    <td><?= $data['tgl_kembali'] ?></td>
                                    <td>  
                                        <a href="?page=peminjaman&actions=kembaliBuku&judulbuku=<?= $data['judul_buku'] ?>" class="btn btn-success btn-xs">Proses pengembalian</a>
									</td>
									<td><?= $data['lama_pinjam'] ?> hari</td>
                                    <td>
                                        <a href="?page=peminjaman&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">Detail</a>
                                    </td>
                                    <td>
                                        <a href="?page=peminjaman&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">Edit</a>
                                        <a href="?page=peminjaman&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>


</div>
