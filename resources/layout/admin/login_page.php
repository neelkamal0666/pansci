	 <div class="container">

      <form class="form-signin" role="form" method="post" action="<?php echo SITE_URL;?>/login" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
        <input type="password" class="form-control" name="password" placeholder="Password" required style="margin-top:10px;">
        <?php if(isset($login_error)) { ?><div class="alert alert-danger"><?php echo $login_error; ?></div> <?php } ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->