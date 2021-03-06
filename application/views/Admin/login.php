
<?php include('header.php');?>



<div class="container" style="margin-top:50px;">
  <div class="jumbotron">
  <?php echo form_open('login'); ?>
    <fieldset>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <h1>Login Form</h1>
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
          <?php if($error=$this->session->flashdata('Login_faild')){?>
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="alert alert-danger">
                    <?php echo $error; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="username">Username</label>

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
                <label for="password">Password</label>
                <?php echo form_password(['class'=>'form-control','name'=>'pass','placeholder'=>'Enter password','id'=>'password','value'=>set_value('pass')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('pass',"<div class='text-danger'>","</div>");?>
            </div>

          </div>


          <fieldset class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <?php echo form_checkbox(['class'=>'form-check-input','type'=>'checkbox']); ?>
                Remember me
              </label>
            </div>
          </fieldset>

          <?php echo form_button(array('name' => 'form_submit', 'type' => 'submit', 'class' => 'btn btn-primary', 'content' => '<i class="fas fa-sign-in-alt"></i> Login')); ?>
          <?php echo form_button(array('name' => 'form_reset', 'type' => 'reset', 'class' => 'btn btn-danger', 'content' => '<i class="fas fa-redo"></i>')); ?>
          <?php echo anchor('login/register',"Sign Up?","class='link-class'"); ?>
        </div>

      </div>


    </fieldset>
  </form>
</div>
</div>


 <?php include('footer.php');?>
