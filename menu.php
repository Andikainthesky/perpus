<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="?page=peminjaman&actions=tampil">Data Peminjaman & Pengembalian Buku</a></li>
        <li><a href="?page=user&actions=tampil">Data Pengguna</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['username'])) { ?>
                <li><a href="#">Halo <strong><?=$_SESSION['username']?></strong></a></li>
        <?php  } 
        else {
        }?>
        <li><a href="logout.php">Logout</a></li>
        <li><a></a></li>
      </ul>
    </div>
  </div>
</nav>