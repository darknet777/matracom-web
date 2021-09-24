<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Matracom - Warehouse Management System</title>
	<link rel="shortcut icon" type="image/png" href="assets/android.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
			font-size: 3.5rem;
			}
		}
    </style>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
	<div class="main">
		<!-- Header content -->
		<div class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">PT. Matracom</a>
			<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">
				<a class="nav-link" href="#" onclick="confirm('Yakin ingin keluar?')">Sign out</a>
				</li>
			</ul>
		</div>
		<!-- Close header content -->

		<!-- Main content -->
		<div class="container-fluid">
			<div class="row">
				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
					<div class="sidebar-sticky pt-3">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" href="#">
									<span data-feather="home"></span>
									Dashboard <span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file"></span>
									Orders
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="shopping-cart"></span>
									Products
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="users"></span>
									Customers
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="bar-chart-2"></span>
									Reports
								</a>
							</li>
						</ul>
						<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>Saved reports</span>
						<a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
							<span data-feather="plus-circle"></span>
						</a>
						</h6>
						<ul class="nav flex-column mb-2">
						<li class="nav-item">
							<a class="nav-link" href="#">
							<span data-feather="file-text"></span>
							Current month
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
							<span data-feather="file-text"></span>
							Last quarter
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
							<span data-feather="file-text"></span>
							Social engagement
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
							<span data-feather="file-text"></span>
							Year-end sale
							</a>
						</li>
						</ul>
						<!-- Sidebar footer -->
						<div class="d-flex flex-row justify-content-center py-3 my-4 border-top">
							<p class="text-ms-left text-muted text-center">
								&copy; Copyright 2021<script>new Date().getFullYear()>2021&&document.write("-"+new Date().getFullYear());</script>, <b>PT. Matracom</b>.<br>
								All rights reserved.
							</p>
						</div>
						<!-- Close sidebar footer -->
					</div>
				</nav>
				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Dashboard</h1>
						<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group mr-2">
							<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
							<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
						</div>
						<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
							<span data-feather="calendar"></span>
							This week
						</button>
						</div>
					</div>

      				<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

					<h2>Products list</h2>
					<div class="table-responsive">
						<table class="table table-striped table-sm">
						<thead>
							<tr>
							<th>#</th>
							<th>Name</th>
							<th>Quantity</th>
							<th>Description</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>PTCG (Piercing Tap Connector)</td>
								<td>500</td>
								<td>Konektor untuk jaringan 1 phasa</td>
								<td>
									<a href="#" class="btn btn-success btn-sm">Ubah</a>&nbsp;|&nbsp;<a href="#" class="btn btn-danger btn-sm">Hapus</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>SWC</td>
								<td>350</td>
								<td>Penahan kabel</td>
								<td>
									<a href="#" class="btn btn-success btn-sm">Ubah</a>&nbsp;|&nbsp;<a href="#" class="btn btn-danger btn-sm">Hapus</a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Sadel</td>
								<td>2570</td>
								<td>Penahan kabel</td>
								<td>
									<a href="#" class="btn btn-success btn-sm">Ubah</a>&nbsp;|&nbsp;<a href="#" class="btn btn-danger btn-sm">Hapus</a>
								</td>
							</tr>
						</tbody>
						</table>
					</div>
    			</main>
			</div>
		</div>
		<!-- Close main content -->
	</div>
	<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<script src="js/dashboard.js"></script>
</body>
</html>