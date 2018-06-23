<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
	#page-container{
		margin-top: 40px;
	}
</style>
<div class="row" id="page-container">
	<div class="col-md-4 offset-md-4">		
		@if($user!="update")
			<form action="/user/update/{{ $user[0]->id }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="username">User name</label>
					<input type="text" class="form-control" placeholder="enter username">
				</div>
				<div class="form-group">
					<label for="username">User email</label>
					<input type="text" class="form-control" placeholder="enter email">
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6 offset-md-6 text-right">						
							<button class="btn btn-primary form-control">Update</button>	
						</div>
					</div>				
				</div>
			</form>
		@elseif($user == "update")
			@if($update == "success")
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-success" role="alert">
						<strong>User Successfully Changed!</strong>
					</div>
				</div>
				<div class="col-md-12 text-right">
					<a class="btn btn-primary" href="/"><small>go back to user list</small></a>
				</div>				
			</div>
			@endif			
		@endif
	</div>	
</div>