<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jemaah Haji Assidiq</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">As-shiddiq</a> 
            </div>
                    </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
          </li>
        
          
                    <li>
                        <a  href="index.php"><i class="fa fa-qrcode fa-3x"></i> Menu Utama</a>
                    </li>
                   <li>
                        <a  href="tambah.php"><i class="fa fa-edit fa-3x"></i> Tambah Data</a>
                    </li>            
                    <li  >
                        <a  href="cari.php"><i class="fa fa-desktop fa-3x"></i> Cari Data </a>
                    </li>               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-11">
                        
                        <h5>As-Shiidiq Tour  </h5>
                       

<?php
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $show = mysql_query("SELECT * FROM jemaah WHERE id='$id'");
  
  if(mysql_num_rows($show) == 0){
  
    echo '<script>window.history.back()</script>';
    
  }else{
    $data = mysql_fetch_assoc($show); 
  }
  ?>
  <form action="proses_edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="form-group">
          <label>Nama</label>
          <input class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required/>
      </div>

     <div class="form-group">
           <label>Jenis Kelamin</label>
           <div class="radio">
              <label>
                 <input type="radio" name="jk" id="optionsRadios1" value="laki-laki" checked/>Laki-Laki
              </label>
           </div>
           <div class="radio">
              <label>
                 <input type="radio" name="jk" id="optionsRadios2" value="perempuan"/>Perempuan
              </label>
            </div>
        </div>
      
      <div class="form-group">
          <label>Alamat</label>
          <input class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>" required />
      </div>

      <div class="form-group">
          <label>Tanggal</label><br>
          <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required/>
      </div>

       <input type="submit" name="tambah" value="Tambah">  
  </form>












                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">




             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
