  <div class="card-group">
    <div class="card bg-secondary text-white">
      <div class="card-body">
        <div class="card-body">
          <form method="post" id="user_login_form">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" minlength="5" id="username" class="form-control"/>
              <span id="username_error" class="text-warning"></span>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="userpassword" id="userpassword" class="form-control"/>
              <span id="userpassword_error" class="text-warning"></span>
            </div>
            <div class="form-group">
              <input type="submit" name="userlogin" id="userlogin" class="btn btn-info" value="Login" />
            </div>
          </form>
        </div>
      </div>
      <div id="test"></div>
    </div>
      <div class="card bg-info text-white">
        <div class="card-body">
          <h1 class="display-4">User Secured Login</h1>
        </div>
      </div>
    </div>
  </div>