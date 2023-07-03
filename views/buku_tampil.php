<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">

    <div class="panel-heading text-center">
        <h2> Daftar Buku Perpustakaan</h2>
        <a href="?page=buku&actions=tambah" class="btn btn-info btn-sm">
            Tambah Data Buku
        </a>
    </div>
            
        <div class="panel-body">
            <table id="deskripsi" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Buku</th>
                        <th>Nama Pengarang</th>
                        <th>Loker Buku</th>
                        <th>Tahun Terbit</th>
                        <th>Status</th>
                        <th>Info</th>
                        <th>Aksi</th>
                        <th>Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM buku";
                    $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                    $nomor = 0;
                    while ($data = mysqli_fetch_array($query)) {
                        $nomor++; 
                        ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $data['judul_buku'] ?></td>
                            <td><?= $data['nama_pengarang'] ?></td>
                            <td><?= $data['loker_buku'] ?></td>
                            <td><?= $data['tahun_terbit'] ?></td>
                            <td><?= $data['status'] ?></td>
                            <td>
                                <a href="?page=buku&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">Detail</a>
                            </td>
                            <td>
                                <a href="?page=buku&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">Edit</a>
                                <a href="?page=buku&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                            <td>
                                <a href="?page=peminjaman&actions=tambah&judulbuku=<?= $data['judul_buku'] ?>" class="btn btn-success btn-xs">Proses pinjam</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
          

    

</div>

