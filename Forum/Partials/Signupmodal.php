
<!-- Modal -->
<div class="modal fade" id="Signupmodal" tabindex="-1" aria-labelledby="SignupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SignupmodalLabel">Signup-IDiscuss</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/forum/partials/handalsignup.php" method="post">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">username</label>
                        <input type="text" class="form-control" id="signupemail"  name="signupemail" aria-describedby="emailHelp">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="signuppasssword" name="signuppassword">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ConformPassword</label>
                        <input type="password" class="form-control" id="signupcpassword" name="signupcpassword" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Signup</button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </form>
      </div>
    </div>
  </div>
</div>