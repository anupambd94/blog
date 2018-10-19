
<?php include('header.php');?>

<div class="container" style="margin-top:50px;">

  <?php echo form_open('admin/sendEmail'); ?>
    <fieldset>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <h1>Register Form</h1>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email">First Name</label>

                <?php echo form_input(['class'=>'form-control','name'=>'fname','placeholder'=>'Enter First Name','id'=>'firstname','type'=>'text','value'=>set_value('fname')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('fname',"<div class='text-danger'>","</div>");?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email">Last Name</label>

                <?php echo form_input(['class'=>'form-control','name'=>'lname','placeholder'=>'Enter Last Name','id'=>'lastname','type'=>'text','value'=>set_value('lname')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('lname',"<div class='text-danger'>","</div>");?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email">Username</label>

                <?php echo form_input(['class'=>'form-control','name'=>'uname','placeholder'=>'Enter username','id'=>'username','type'=>'text','value'=>set_value('uname')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('uname',"<div class='text-danger'>","</div>");?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email">Email</label>

                <?php echo form_input(['class'=>'form-control','name'=>'email','placeholder'=>'Enter Email','id'=>'email','type'=>'text','value'=>set_value('email')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('email',"<div class='text-danger'>","</div>");?>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="password">Password</label>
                <?php echo form_password(['class'=>'form-control','name'=>'pass','placeholder'=>'Enter password','id'=>'password','value'=>set_value('pass')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('pass',"<div class='text-danger'>","</div>");?>
            </div>

          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <?php echo form_password(['class'=>'form-control','name'=>'cpass','placeholder'=>'Confirm password','id'=>'cpassword','value'=>set_value('cpass')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('cpass',"<div class='text-danger'>","</div>");?>
            </div>

          </div>


          <?php echo form_button(array('name' => 'form_submit', 'type' => 'submit', 'class' => 'btn btn-primary', 'content' => '<i class="fas fa-user-plus"></i> Register')); ?>
          <?php echo form_button(array('name' => 'form_reset', 'type' => 'reset', 'class' => 'btn btn-danger', 'content' => '<i class="fas fa-redo"></i>')); ?>
          <?php echo anchor("Admin/Login","Already have accoutn. login?","class='link-class'"); ?>
        </div>

      </div>


    </fieldset>
  </form>
</div>


 <?php include('footer.php');?>
