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
                        
                        <h5>As-Shiidiq Tour and Travel  </h5>
                       <h3>Percobaan Perubahan untuk Commit  </h3>
                         
                       
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
                        <!-- bagian filter -->
                        <br>
                        <center><form action="" method="post">
                           <label>Mulai</label>     <input type="date" name="tgl1">
                           <label>Sampai</label>     <input type="date" name="tgl2">
                           <button type="submit" class="glyphicon glyphicon-search" name="search" value="Cari"><i class="fa fa-check"></i>
                            </button>
                         
                        </form>
                      </center>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" style='text-align:center'>NO</th>
                                            <th onclick="sortTable(1)" style='text-align:center'>ID</th>
                                            <th onclick="sortTable(2)" style='text-align:center'>Nama</th>
                                            <th onclick="sortTable(3)" style='text-align:center'>Jenis Kelamin</th>
                                            <th onclick="sortTable(4)" style='text-align:center'>Alamat</th>
                                            <th onclick="sortTable(5)" style='text-align:center'>Tanggal</th>
                                            <th style='text-align:center'>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
 <?php
 error_reporting(0);
 include 'koneksi.php';

  if($_POST['search']){
    $tgl1=$_POST['tgl1'];
    $tgl2=$_POST['tgl2'];
    $sql  = "SELECT * FROM jemaah WHERE tanggal BETWEEN '$tgl1' AND '$tgl2'";
   
    $no = 1;
    $query = mysql_query($sql);
    while ($r  = mysql_fetch_array($query)){

                 echo "
                    <tr>
                    <td>".$no."</td>
                    <td>".$r['id']."</td>
                    <td>".$r['nama']."</td>
                    <td>".$r['jenis_kelamin']."</td>
                    <td>".$r['alamat']."</td>
                    <td>".$r['tanggal']."</td>
                

                    </tr>";
                    $no++;
    };
  } else {
    $sql = "select * from jemaah";
    $no= 1;
     $query = mysql_query($sql);
    while ($r  = mysql_fetch_array($query)){

                    echo'<tr>';
                   echo '<td>'.$no.'</td>';
                    echo '<td>'.$r['id'].'</td>';
                    echo '<td>'.$r['nama'].'</td>';
                    echo '<td>'.$r['jenis_kelamin'].'</td>';
                    echo '<td>'.$r['alamat'].'</td>';
                    echo '<td>'.$r['tanggal'].'</td>';
                    echo '<td><a href="edit.php"?id='.$r['id'].'"><center><span class="glyphicon glyphicon-pencil"></span></a> ||
                    <a href="hapus.php"?id='.$r['id'].'"  onclick="return confirm"(\'Yakin?\')"><span class="glyphicon glyphicon-trash">
                    </span></center></a><td>';

                    
                    $no++;
    };
  }
              ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
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
       <!--  SCRIPTS sORTING -->
    <script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
   
   
</body>
</html>
