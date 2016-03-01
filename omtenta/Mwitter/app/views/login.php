<?php 
$pageTitle = "Welcome to Mwitter - Login or Sign up";

define( 'ROOT_DIR', dirname(__FILE__) );

include( ROOT_DIR.'/inc/header.php' );

// include '../app/views/inc/header.php'; 


?>
<div class="container-fluid">
<div class="row top-buffer">
    <div class="col-sm-4 col-sm-push-2">
        <h2>Welcome to Mwitter.</h2></br>
        <p>Connect with your friends — and other fascinating people.
         Get in-the-moment updates on the things that interest you.
          And watch events unfold, in real time, from every angle.</p>
      </div>
    <div class="col-sm-3 col-sm-push-3">

            <div id="forms">
                <div id="login-form">
                    <form action="../user/login" method="post" class="form-horizontal">
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-sm-1">
                          <button type="submit" class="btn btn-primary" id="submit_login" name="login">Sign in</button>
                        </div>
                      </div>
                    </form>
                </div>

                <div id="register">
                  <span class="new_to">New to Twitter? </span><span class="white">Sign Up</span>
                  <form action="../user/register" method="post" class="form-horizontal">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                      </div>
                      </div>
                      <!-- <div class="form-group">
                        <div class="col-sm-12">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                      </div> -->
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-9 col-sm-push-4">
                          <button type="submit" class="btn btn-warning" id="submit_register" name="register">Sign Up for Mwitter</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
        </div>

    </div>
</div>
</div>

   
<?php 
include '../app/views/inc/footer.php'; 
?>