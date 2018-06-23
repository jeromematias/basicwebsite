
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
    #page-container{
        margin-top: 40px;
    }
    #button-wrapper{
        padding-bottom: 10px;
    }
</style>
<div class="row" id="page-container">
    <div class="col-md-6 offset-md-3">        
        <div class="row">
            <div class="col-md-12 text-right" id="button-wrapper">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Add new Users
                </button>
            </div>        
        </div>
        <div class="table-responsive">
            <table class="table border table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th colspan="2">email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="/user/view/{{ $user->id }}">edit</a></td>
                    </tr>        
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('add-modal')
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>