
<?php include('header.php');?>

<div class="container" style="margin-top:50px;">
 <div class="jumbotron">
  <?php echo form_open('login/sendEmail'); ?>
    <fieldset>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <h1>Register Form</h1>
          <?php if($error=$this->session->flashdata('user')){
            $class=$this->session->flashdata('user_class');?>
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="alert <?php echo $class ?>">
                    <?php echo $error; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email">First Name</label>

                <?php echo form_input(['class'=>'form-control','name'=>'first_name','placeholder'=>'Enter First Name','id'=>'firstname','type'=>'text','value'=>set_value('first_name')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('first_name',"<div class='text-danger'>","</div>");?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email">Last Name</label>

                <?php echo form_input(['class'=>'form-control','name'=>'last_name','placeholder'=>'Enter Last Name','id'=>'lastname','type'=>'text','value'=>set_value('last_name')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('last_name',"<div class='text-danger'>","</div>");?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email">Username</label>

                <?php echo form_input(['class'=>'form-control','name'=>'username','placeholder'=>'Enter username','id'=>'username','type'=>'text','value'=>set_value('username')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('username',"<div class='text-danger'>","</div>");?>
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
                <?php echo form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Enter password','id'=>'password','value'=>set_value('password')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('password',"<div class='text-danger'>","</div>");?>
            </div>

          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <?php echo form_password(['class'=>'form-control','name'=>'cpassword','placeholder'=>'Confirm password','id'=>'cpassword','value'=>set_value('cpassword')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('cpassword',"<div class='text-danger'>","</div>");?>
            </div>

          </div>


          <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary', 'content' => '<i class="fas fa-user-plus"></i> Register')); ?>
          <?php echo form_button(array('name' => 'form_reset', 'type' => 'reset', 'class' => 'btn btn-danger', 'content' => '<i class="fas fa-redo"></i>')); ?>
          <?php echo anchor("Login","Already have accoutn. login?","class='link-class'"); ?>
        </div>

      </div>


    </fieldset>
  </form>
</div>
</div>


 <?php include('footer.php');?>
