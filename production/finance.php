<?php
include('../session.php');
include('../connect.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laikipia University Graduands </title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- CSS -->
	<link href="../production/stylesheet.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- jQuery custom content scroller -->
	<link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
	<!-- icon -->
	<link rel="icon" href="../images/Laikipia-logo.jpeg" >
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col menu_fixed">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="#" class="site_title"><i class="fa fa-heart"></i> <span>Laikipia Graduands</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="../requirements/<?php echo "$pic";?>" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php echo $name; ?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<?php include('sidebar.php'); ?>
					<!-- /sidebar menu -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="../requirements/<?php echo "$pic";?>" alt=""><?php echo $name; ?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
						<!-- <li><a href="javascript:;"> Profile</a></li>
						<li>
							<a href="javascript:;">
								<span class="badge bg-red pull-right">50%</span>
								<span>Settings</span>
							</a>
						</li>
						<li><a href="javascript:;">Help</a></li> -->
						<li><a href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green">
							<?php
							$userid = $_SESSION['id'];
							$sql = "SELECT * FROM message WHERE id = $userid AND message_status = 0 ";
							$query = $conn->query($sql);
							$count = $query->rowCount();
							echo $count;
							?>
						</span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<li><h5>Message</h5></li><hr>
						<?php
						$userid = $_SESSION['id'];
						$sql = "SELECT * FROM message LEFT JOIN staff ON staff.staff_id = message.staff_id 
						WHERE id = $userid ";
						$query = $conn->prepare($sql);
						$query->execute();
						$count = $query->rowCount();
						$fetch = $query->fetchAll();

						foreach ($fetch as $key => $value) { ?>
						<li>
							<a href = "#message<?php echo $value['message_id'] ?>" data-toggle="modal">
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span><?php echo $value['staff_name']; ?></span>
								</span>
								<span class="message">
									<?php echo $value['message_content']; ?>
									<span class="pull-right">
										<?php 
										if($value['message_status'] == 1){
											echo '<i class="fa fa-check-circle-o"></i>';
										}
										else{
											echo '<i class="fa fa-envelope"></i>';
										}
										?>
									</span>
								</span>
							</a>
						</li>

						<?php } ?>
					</ul>
				</li>

				<!-- <li role="presentation" class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green">6</span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<div class="text-center">
								<a>
									<strong>See All Alerts</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</li>
					</ul>
				</li> -->
			</ul>
		</nav>
	</div>
</div>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Graduand</h3>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Clearance</h2>
					<div class="clearfix"></div>
				</div>

				<div class="x_content tae">
					<div class="row">
						<div class="col-md-12" style="margin-left:10px">

							<!-- Personal info tab -->
							<div class="row">
								<h4>Requirements</h4>
								<ol>
									<?php
									$sql = "SELECT * FROM requirement NATURAL JOIN staff WHERE staff_id = 4";
									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value) { ?>
									<li>
										<a href = "#edit<?php echo $value ['req_id']?>" data-toggle="modal">
											<?php echo $value['req_content'] ?>
										</a>
									</li>
									<?php include '../modal_pass_req.php'; ?>
									<?php } ?>
								</ol>
								<?php


								if(isset($_POST['files']))
								{
									$req_id = $_POST['req_id'];
									$staff_id = $_POST['staff_id'];
									$a = $_FILES['file']['name'];
									$ab = $_FILES['file']['tmp_name'];
									$location = "".$a;
									move_uploaded_file($ab, "../requirements/".$location);
									$userid = $_SESSION['id']; 
									$sql1 = $conn->prepare("INSERT INTO requirementstatus (id,req_id,staff_id,file) VALUES (?,?,?,?)");
									$sql1->execute(array($userid,$req_id,$staff_id,$location));
									if($sql1){ 													
										echo '
										<script> 														
											window.location = "finance.php"
										</script>'; 												
									}
								}
								?>
								<table class="table table-bordered">
									<thead>
										<th>Requirement Content</th>
										<th>Passed file</th>
										<th>Requirement Status</th>
									</thead>
									<tbody>
										<?php
										$user_id = $_SESSION['id'];
										$sql = "SELECT * FROM requirementstatus 
										NATURAL JOIN requirement WHERE staff_id = 4 AND id = $userid ";
										$query = $conn->prepare($sql);
										$query->execute();
										$fetch = $query->fetchAll();

										foreach ($fetch as $key => $value) { ?>
										<tr>
											<td><?php echo $value['req_content']; ?></td>
											<td><?php echo $value['file']; ?></td>
											<td><?php
												if ($value['status'] == 1) {
													echo '<i class = "fa fa-check"' ;
												}else{
													echo 'Pending';
												}

												?></td>
											</tr>
										</tbody>
										<?php } ?>
									</table>
									<!--/ Personal info tab -->
								</div>
							</div>
						</div>
					</div><!-- /x content -->
				</div><!-- /x panel -->
			</div>
		</div>
	</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
	<div class="pull-right">
		Copyright © 2023 Mulwa Joseph .All rights reserved
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- jQuery custom content scroller -->
<script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<script src="../build/js/md5.js"></script>
	<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
<script type="text/javascript">

<script>
		$(document).ready(function() {
			var handleDataTableButtons = function() {
				if ($("#datatable-buttons").length) {
					$("#datatable-buttons").DataTable({
						dom: "Bfrtip",
						buttons: [
						{
							extend: "copy",
							className: "btn-sm"
						},
						{
							extend: "csv",
							className: "btn-sm"
						},
						{
							extend: "excel",
							className: "btn-sm"
						},
						{
							extend: "pdf",
							className: "btn-sm"
						},
						{
							extend: "print",
							className: "btn-sm"
						},
						],
						responsive: true
					});
				}
			};

			TableManageButtons = function() {
				"use strict";
				return {
					init: function() {
						handleDataTableButtons();
					}
				};
			}();

			$('#datatable').dataTable();

			$('#datatable-keytable').DataTable({
				keys: true
			});

			$('#datatable-responsive').DataTable();

			$('#datatable-scroller').DataTable({
				ajax: "js/datatables/json/scroller-demo.json",
				deferRender: true,
				scrollY: 380,
				scrollCollapse: true,
				scroller: true
			});

			$('#datatable-fixed-header').DataTable({
				fixedHeader: true
			});

			var $datatable = $('#datatable-checkbox');

			$datatable.dataTable({
				'order': [[ 1, 'asc' ]],
				'columnDefs': [
				{ orderable: false, targets: [0] }
				]
			});
			$datatable.on('draw.dt', function() {
				$('input').iCheck({
					checkboxClass: 'icheckbox_flat-green'
				});
			});

			TableManageButtons.init();
		});
	</script>
	
	
</body>
</html>