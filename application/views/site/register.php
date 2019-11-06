<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register_Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
      <br>
      <h3 align = "center">Complete this form to register to the Travel Agency</h3>
      <br>
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
          <?php
            if($this->session->flashdata('message'))
            {
              echo
              '
                <div class "alert alert-success">'.$this->session->flashdata("message").'

                </div>
              ';
            }
           ?>
          <form class="" action="<?php echo base_url(); ?>index.php/register/validation" method="post">
            <div class="form-group">
              <label>Enter Your First and Last Name </label>
              <input type="text" name="user_name" class="form-control" value = "<?php echo set_value ('user_name');?>"/>
              <span class = "text-danger"><?php echo form_error('user_name'); ?></span>
            </div>
            <div class="form-group">
              <label>Enter Your Valid Email</label>
              <input type="text" name="user_email" class = "form-control" value="<?php echo set_value('user_email');?>">
              <span class = "text-danger"><?php echo form_error('user_email'); ?></span>
            </div>
            <div class="form-group">
              <label>Enter Your Password</label>
              <input type="password" name="user_password" class  = "form-control" value="<?php echo set_value('user_password'); ?>">
              <span class = "text-danger"><?php echo form_error('user_password'); ?></span>
            </div>
            <div class="form-group">
              <input type="submit" name="register" value="Register" class = "btn btn-group">

            </div>
          </form>

        </div>
      </div>
    </div>

  </body>
</html>
