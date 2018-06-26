<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/landing.css">
<style type="text/css">
	body {
	  padding-bottom: 20px;
	  font-family: "Open Sans", sans-serif;
	}

	.navbar {
	  	margin-bottom: 20px;
	  	background: #bc90f9;
	    background: -moz-linear-gradient(to right, #bc90f9 0%, #6e6af8 49%, #6e6af8 51%, #57d3fa 100%);
	    background: -webkit-linear-gradient(to right, #bc90f9 0%,#6e6af8 49%,#6e6af8 51%,#57d3fa 100%);
	    background: linear-gradient(to right, #bc90f9 0%,#6e6af8 49%,#6e6af8 51%,#57d3fa 100%);
	  	-webkit-backdrop-filter: saturate(180%) blur(20px);
	  	backdrop-filter: saturate(180%) blur(20px);
	  	padding-top: 0;
	  	padding-bottom: 0;	  
	}
	.nav-item{
		line-height: 50px;
	}
	.nav-item.active{
		background: #c69efe;		
	}
	.nav-item.dropdown .dropdown-menu{
		line-height: 20px;
	}
	.nav-item.active a{
		color: #ebebeb !important;
	}
	ul li, a{
		font-family: "Open Sans", sans-serif;
	}
</style>
<script src="assets/js/angular.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<body ng-app="myapplication" ng-controller="angularController">
	@verbatim
	<div class="row">
		<div class="col-md-4 offset-md-4" style="margin-top:40px;">
			<div class="form-group">
				<label for="name">name</label>
				<input type="text" class="form-control" ng-model="name" name="name">
			</div>
			<div class="form-group">
				<label for="name">address</label>
				<input type="text" class="form-control" ng-model="address" name="address">
			</div>
			<div class="form-group">
				<label for="name">age</label>
				<input type="text" class="form-control" ng-model="age" name="age">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" ng-click="save()">save</button>
			</div>
		</div>
	</div>
	@endverbatim
</body>

<!-- jQuery library -->
<script src="assets/js/jquery-3.3.1.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- landing App Controller -->
<script src="assets/js/angularController.js"></script>
<script type="text/javascript">
	$(function(){

	})
</script>