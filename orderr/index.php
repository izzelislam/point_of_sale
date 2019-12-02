<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/master/point_of_sale/Adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/master/point_of_sale/Adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/master/point_of_sale/Adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/master/point_of_sale/Adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/master/point_of_sale/Adminlte/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="http://localhost/master/point_of_sale/Adminlte/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    </nav>
  </header>

  <!-- =============================================== -->
      <?php 
        include "../sidebar.php";
       ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <h1>
         Order
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <a href="tambah.php" class="btn btn-success"><i class="fa fa-fw fa-plus-square"> </i>tambah data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  	<th>No</th>
			 		<th>Table Number</th>
			 		<th>item</th>
			 		<th>Qty</th>
			 		<th>total</th>
			 		<th>diskon</th>
			 		<th>after diskon</th>
			 		<th>action</th>
                </tr>
                </thead>
                <tbody>
                 <?php 
					include "../config/koneksi.php";

					$sql="SELECT * FROM orderr";
					$result=mysqli_query($koneksi,$sql);

					function item($koneksi,$item){
						$sql="SELECT * FROM item WHERE id=$item";
						$result=mysqli_query($koneksi,$sql);
						$data=mysqli_fetch_assoc($result);

						return $data['nama'];

					}

					function diskon($total){
						if ($total>100000) {
							return "20%";
						}else{
							return " - ";
						}
						
					}

					function afd($adis){
						if ($adis > 100000) {
							$dis=($adis/100)*20;
							$kon=$adis-$dis;
							return $kon;
						}else{
							return $adis;
						}
					}

					$no=1;
					while ($data=mysqli_fetch_assoc($result)) {
		 			?>

                 	<tr>
				 		<td><?= $no++;?></td>
				 		<td><?= $data['table_number'];?></td>
				 		<td><?= item($koneksi,$data['item_id']);?></td>
				 		<td><?= $data['qty'];?></td>
				 		<td><?= $data['total'];?></td>
				 		<td><?= diskon($data['total']);?></td>
				 		<td><?= afd($data['total']) ;?></td>

				 		<td>
              <a href="edit.php?id=<?= $data['id'];?>" class="btn  btn-primary"> <i class="fa fa-fw fa-pencil"></i>edit</a>
              <a href="hapus.php?id=<?= $data['id'];?>" class="btn  btn-danger"><i class="fa fa-fw fa-trash"></i>hapus</a>
            </td>
				 	</tr>
				 	<?php 
				 		}
				 	 ?>
            
              </table>
            </div>

          </div>
         
        </div>

      </div>

    </section>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://localhost/master/point_of_sale/Adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/master/point_of_sale/Adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="http://localhost/master/point_of_sale/Adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/master/point_of_sale/Adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/master/point_of_sale/Adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/master/point_of_sale/Adminlte/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
