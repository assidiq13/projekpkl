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
   
     <!-- CSS DATA TABLE -->
  <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css" >
  <!-- <link rel="stylesheet" type="text/css" href="css/rowReorder.dataTables.min.css" > -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.dataTables.min.css" >
  <!-- <link rel="stylesheet" type="text/css" href="css/dataTables.material.min.css" > -->

  <!-- custom css -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="assets/css/material.min.css" >
 
  <!--  JQUERY-->
  <script src="assets/js/jquery-2.1.1.min.js"></script>


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
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
<!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Nama Jemaah Haji As-Shiddiq
                        </div>
           



  <!-- DAFTAR PESERTA PKL-->
  <div class="container">
    <div class="row">
      <div class="data-table">
     
          <table id="example" class="display nowrap highlight striped" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th style="text-align:center">NO</th>
                <th style="text-align:center">ID</th>
                <th style="text-align:center">Nama</th>
                <th style="text-align:center">Jenis Kelamin</th>
                <th style="text-align:center">Alamat</th>
                <th style="text-align:center">Tanggal</th>
              </tr>
            </thead>
            <tbody>

              <?php
                // panggil koneksi db
                include 'koneksi.php';
              
                // eksekusi perintah sql cari semua data pendaftaran
                $sql  = mysql_query("SELECT * FROM jemaah order by id asc");

                  $no = 1;
                while ($dp = mysql_fetch_array($sql)) {

                  //tampilkan data pendaftaran
                  echo "<tr>
                          <td style='text-align:center'>$no</td>
                          <td style='text-align:center'>$dp[id]</td>
                          <td style='text-align:center'>$dp[nama]</td>
                          <td style='text-align:center'>$dp[jenis_kelamin]</td>
                          <td style='text-align:center'>$dp[alamat]</td>
                          <td style='text-align:center'>$dp[tanggal]</td>
                        </tr>";
                  $no++;
                }
              ?>
              
            </tbody>
          </table>
          <hr>
         
      </div><!-- end .data-table -->
    </div><!-- end .row -->
  </div><!-- end .container -->






                </div>
                <div class="col-md-6">
                     
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
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
   
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
       <!--  Scripts-->
  <script src="assets/js/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>

  <!-- jquery data table -->
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.rowReorder.min.js"></script>
  <script src="assets/js/dataTables.responsive.min.js"></script>
  <script src="assets/js/dataTables.material.min.js" type="text/javascript"></script>

  <!-- SCRIPT DATA TABLE RESPONSIV -->
   <script type="text/javascript">
   
       // responsive-table jadwal
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

 </script>
 
</body>
</html>
