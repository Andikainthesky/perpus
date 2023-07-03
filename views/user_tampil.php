<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">

    <div class="panel-heading text-center">
        <h2> Daftar Pengguna</h2>
    </div>

                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>

                        </thead>
                        <tbody>
                          <tr>
                              <th>No.</th>
                              <th>Nama User</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Keterangan</th>
                              <th>Aksi</th>
                          </tr>
                            <?php
                            $sql = "SELECT * FROM user";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            $nomor = 0;
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++;
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									                  <td><?= $data['nama'] ?></td>
									                  <td><?= $data['username'] ?></td>
									                  <td><?= $data['email'] ?></td>
                                    <td><?= $data['ket'] ?> </td>
                                    <td>
                                        <a href="?page=user&actions=edit&uid=<?= $data['username'] ?>" class="btn btn-warning btn-xs">Edit</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
</div>
