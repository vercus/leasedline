<?php
session_start();
if(empty($_SESSION)){
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#.php">Indosat</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="indexr.php">Home <span class="sr-only">(current)</span></a></li>
          <li class="active"><a href="">Tambah Pengguna</a></li>
          </ul>

      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#.php"><?php echo $_SESSION['username'] ?></a></li>   
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="user.php">Manager Pengguna</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <div class="row">
    <div class="col-xs-4 col-xs-offset-4">
      <div class="well">
        <div class="page-header">
          <h3>Tambah Pengguna</h3>
        </div>
        <form method="post" action="">
          <?php
          if(isset($_POST['simpan_user'])){
            include "includes/koneksi.php";
            $username = $_POST["username"];
            $password = md5($_POST["password"]);
            $nama     = $_POST["nama"];
            $level    = $_POST['level']; 

            $sql = "INSERT INTO users (username, password, nama, level) VALUES ('$username', '$password' , '$nama' , '$level')";

            if (mysqli_query($koneksi, $sql)) {
              ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="user.php">lihat semua data</a>.
              </div>
              <?php
            } else {
              echo "Data tidak disimpan";
            }
          }
          ?>
          <div class="form-group">
            <label for="un">Nama</label>
            <input type="text" class="form-control" name="username" required>
          </div>
          <div class="form-group">
            <label for="pw">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <div class="form-group">
            <label for="n1">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" required>
          </div>
          <div class="form-group">
            <label for="n1">Level</label>
            <select class="form-control" name="level">
              <option value="admin">Admin</option>
              <option value="user">User</option>
              <option value="guest">Guest</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="simpan_user">Simpan</button>
          <button type="button" onclick="location.href='user.php'" class="btn btn-success">Kembali</button>
        </form>

      </div>
    </div>
  </div>

  <!-- <div class="col-xs-12 col-sm-3 col-md-3"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

