<?php
include('connect.php')
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="production/stylesheet.css">
	<!-- icon -->
	<link rel="icon" href="images/Laikipia-logo.jpeg" >
	<title>Laikipia University Graduands</title>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laikipia Graduands</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px;">Log in </button>
				
				<!-- Modal -->
				<div class="modal fade" id="modal-dept">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<!-- modal header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3>Log in</h3>
							</div>
							<!-- modal body -->
							<div class="modal-body">
								<ul class="nav nav-pills">
									<li class="active"><a data-toggle="pill" href="#home">Staff</a></li>
									<li><a data-toggle="pill" href="#menu2">Graduand</a></li>
									<li><a data-toggle="pill" href="#menu1">Admin</a></li>

								</ul>
								<div class="tab-content">
									<!-- Department -->
									<div id="home" class="tab-pane fade in active">
										<h3>Staff</h3>
										<form method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="deptName" placeholder="Staff Name">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="deptPass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-department">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
									<!-- Admin -->
									<div id="menu1" class="tab-pane fade">
										<h3>Admin</h3>
										<form method="post">
											<div class="form-group">
												<input type="password" class="form-control" name="adminPass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-admin">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
									<!-- Graduand -->
									<div id="menu2" class="tab-pane fade">
										<h3>Graduand</h3>
										<form method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="graduandId" placeholder="Graduand Id">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="GraduandPass" placeholder="Password">
											</div>
											<!-- <div class="form-group">
												<input type="password" class="form-control" name="new_password" placeholder="Password">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="new_cpassword" placeholder="Password">
											</div> -->
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-graduand">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- ENNNNNNNNNND MODAL-->				

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<!-- carousel -->
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding:20px 20px 20px 20px;">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/Laikipia.png" alt="Laikipia" width="460" height="200">
					</div>

					<div class="item">
						<img src="images/Graduation1.jpeg" alt="Laikipia" width="460" height="200">
					</div>

					<div class="item">
						<img src="images/Graduation3.jpg" alt="Laikipia" width="460" height="200">
					</div>

					<div class="item">
						<img src="images/jaffer.png" alt="Laikipia" width="460" height="200">
					</div>
					<div class="item">
						<img src="images/Nakuru.jpg" alt="Laikipia" width="460" height="200">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="icon-prev" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="icon-next" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<br />
		<div class="row"> 
			<div class="col-md-5 mv">
				<center><h3>Mission</h3></center>
				<p>To serve students and society through research, education, scholarship, training, innovation, outreach and consultancy</p>
			</div>
			<div class="col-md-5 mv">
				<center><h3>Vision</h3></center>
				<p>A University for valued transformation of society</p>
				</div>
			</div>
		</div>
		<script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>
<script>
	jQuery(function(){
		$('.signin-button-admin').click(function(e){
			e.preventDefault();

			var pass = $.trim($('input[name="adminPass"]').val());

			$.ajax({
				type: 'POST',
				url: 'loginAdmin.php',
				data: {adminPass: pass}
			})
			.done(function(res){
				console.log(res);
				if (res == 1 ){
					window.location.href = "production/admin1.php";
				}else{
					alert('Login failed!');
					$('input[name="adminPass"]').focus();
					$('input').val('');
				}
			});
			}); //Admin

		$('.signin-button-department').click(function(e){
			e.preventDefault();

			var uname = $.trim($('input[name="deptName"]').val());
			var pass = $.trim($('input[name="deptPass"]').val());

			$.ajax({
				type: 'POST',
				url: 'logindept.php',
				data: {deptName: uname, deptPass: pass}
			})
			.done(function(res){
				console.log(res);
				if (res == 1 ){
					window.location.href = "production/staff.php";
				}else{
					alert('Login failed!');
					$('input[name="deptName"]').focus();
					$('input').val('');
				}
			});
			}); //Department

		$('.signin-button-graduand').click(function(e){
			e.preventDefault();

			var uname = $.trim($('input[name="graduandId"]').val());
			var pass = $.trim($('input[name="GraduandPass"]').val());

			$.ajax({
				type: 'POST',
				url: 'logingraduand.php',
				data: {graduandId: uname, GraduandPass: pass}
			})
			.done(function(res){
				console.log(res);
				if (res == 1 ){
					window.location.href = "production/graduand.php";
				}else if (res == 2){
					alert('#deadline');
				}else{
					alert('Login failed!');
					$('input[name="graduandId"]').focus();
					$('input').val('');
				}
			});
			}); //Graduand
	});
</script>
</body>
</html>