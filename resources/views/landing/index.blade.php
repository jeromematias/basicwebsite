
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
<body ng-app="myApp" ng-controller="LandingController">
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
	    <a class="navbar-brand" href="#"><img height="45" src="assets/images/icons/anesthesia-logo-white.png" alt=""></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#jobPostNav" aria-controls="jobPostNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="jobPostNav">
	      	<ul class="navbar-nav mr-auto">
		        <li class="nav-item active">
		          	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		        </li>		        
		        <li class="nav-item dropdown">
		          	<a class="nav-link dropdown-toggle text-white" href="https://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job Posting</a>
		          	<div class="dropdown-menu" aria-labelledby="dropdown09">
			            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
			            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                        @csrf
	                    </form>
		          	</div>		          	                    
		        </li>
	      	</ul>
	      	<form class="form-inline my-2 my-md-0">
	        	<input class="form-control" type="text" placeholder="Search" aria-label="Search">
	      	</form>
	    </div>
  	</nav>
	<div class="page-container" style="overflow-x: hidden;">        
    @yield('content')
	</div>
</body>

<!-- jQuery library -->
<script src="assets/js/jquery-3.3.1.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- landing App Controller -->
<script src="assets/js/LandingController.js"></script>
