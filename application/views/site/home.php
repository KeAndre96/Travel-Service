<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
      <h3 align "center">Welcome to the Travel Agency</h3>
      <div class="panel panel-default">
        <div class="panel-heading">Sign In</div>
        <div class="panel-body">
          <form class="" action="site/dashboard" method="post">
            <div class="form-group">
              <label>Username:</label>
              <input type="text" name="" value=""><br>
              <span class = "text-danger"><?php echo form_error('user_name'); ?></span>
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" name="" value=""><br>
              <span class = "text-danger"><?php echo form_error('user_email'); ?></span>
            </div>
            <div class="form-group">
              <input type="submit" name="signin" value="Sign In" class = "btn btn-group">
            </div>
            <a href='index.php/register'>Click Here to Register</a>

          </form>
        </div>
      </div>

    </div>

  </body>
</html>
