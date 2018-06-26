<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/addnew') }}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="username">User name</label>
            <input id="username" name="username" type="text" class="form-control" placeholder="enter username">
          </div>
          <div class="form-group">
            <label for="email">User email</label>
            <input id="email" name="email" type="text" class="form-control" placeholder="enter email">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6 offset-md-6 text-right">           
                <button class="btn btn-primary form-control">Update</button>  
              </div>
            </div>        
          </div>
        </form>
      </div>      
    </div>
  </div>
</div>
