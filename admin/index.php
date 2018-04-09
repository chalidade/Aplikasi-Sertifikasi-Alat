 <!Doctype html>
 <html lang="en">

 <head>
 	<title>Dashboard | Sertifikasi Alat</title>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 	<!-- VENDOR CSS -->
 	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
 	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
 	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
 	<script src="assets/Chart.bundle.js"></script>
 	<script src="assets/utils.js"></script>
 	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
 	<!-- MAIN CSS -->
 	<link rel="stylesheet" href="assets/css/main.css">
 	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
 	<link rel="stylesheet" href="assets/css/demo.css">
 	<!-- GOOGLE FONTS -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
 	<!-- ICONS -->
 	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
 	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
 </head>

 <body>
 	<!-- WRAPPER -->
 	<div id="wrapper">
 		<!-- NAVBAR -->
 		<nav class="navbar navbar-default navbar-fixed-top"  style="background: #2b333e;">
 			<div class="brand"  style="background: #2b333e;">
 				<a href="index.html" style="color: #fff;font-weight: 800;text-transform: uppercase;font-size: 18px;">Admin Panel</a>
 			</div>
 			<div class="container-fluid">
 				<div class="navbar-btn">
 					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
 				</div>
 				<div id="navbar-menu">
 					<ul class="nav navbar-nav navbar-right">
 						<li class="dropdown">
 							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background: #2b333e;"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['nama']." - (".$_SESSION['id'].")"; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
 							<ul class="dropdown-menu">
 								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
 								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
 							</ul>
 						</li>
 					</ul>
 				</div>
 			</div>
 		</nav>
    <!-- END NAVBAR -->
     <?php include "sidebar.php"; ?>
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h3 class="panel-title">Data Sertifikasi Alat</h3>
              <p class="panel-subtitle">Tanggal Hari Ini: <?php  echo date("d M Y"); ?></p>
            </div>
            <div class="panel-body">
              <table class="table table-hover" width="100%">
                <thead>
                  <th>#</th>
                  <th>Nama Alat</th>
                  <th>Id Alat </th>
                  <th>Letak Alat</th>
                  <th>Kode Alat</th>
                  <th>Tanggal Sertifikasi</th>
                </thead>
                <tbody>
                  <tr style="background:#acffade6" width="100%">
                    <td>1</td>
                    <td>Crane</td>
                    <td>01</td>
                    <td>PLTU1</td>
                    <td><a href="sertifikasi.php">01</a></td>
                    <td>17 Maret 2019</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Boiler</td>
                    <td>02</td>
                    <td>PLTU2</td>
                    <td><a href="sertifikasi.php">02</a></td>
                    <td>20 Maret 2019</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Crane</td>
                    <td>03</td>
                    <td>PLTU3</td>
                    <td><a href="sertifikasi.php">01</a></td>
                    <td>29 Maret 2019</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END OVERVIEW -->


            </div>
          </div>
        </div>
      </div>

      <script>
      var ctx = document.getElementById("myChart1").getContext('2d');
      var a = "<?php echo $apar_baik; ?>";
      var b = "<?php echo $apar_rsk; ?>";
      var myChart1 = new Chart(ctx, {
          type: 'pie',
          data: {
              labels: ["Rusak", "Baik"],
              datasets: [{
                  label: '# of Votes',
                  data: [b, a],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
      </script>
      <script>
      var ctx = document.getElementById("myChart").getContext('2d');
      var a = "<?php echo $insp_done; ?>";
      var b = "<?php echo $insp_yet; ?>";
      var myChart = new Chart(ctx, {
          type: 'pie',
          data: {
              labels: ["Belum Dicek", "Sudah Dicek"],
              datasets: [{
                  label: '# of Votes',
                  data: [b, a],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
      </script>
      <!-- END MAIN CONTENT -->
    <?php include "footer.php"; ?>
