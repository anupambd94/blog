
<?php include('header.php');?>



<div class="container" style="margin-top:50px;">

  <?php echo form_open('Admin/formValidation'); ?>
    <fieldset>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <h1>Add Article</h1>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="Title">Article Title</label>

                <?php echo form_input(['class'=>'form-control','name'=>'title','placeholder'=>'Enter article title','id'=>'title','type'=>'text','value'=>set_value('title')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('title',"<div class='text-danger'>","</div>");?>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="Body">Article Body</label>
                <?php echo form_textarea(['class'=>'form-control','name'=>'body','placeholder'=>'Enter your article','id'=>'body','value'=>set_value('body')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('body',"<div class='text-danger'>","</div>");?>
            </div>

          </div>

          <?php echo form_button(array('name' => 'form_submit', 'type' => 'submit', 'class' => 'btn btn-primary', 'content' => '<i class="fas fa-plus"></i> Add')); ?>
          <a href="javascript:window.history.go(-1);"><?php echo form_button(array('name' => 'form_button', 'type' => 'button', 'class' => 'btn btn-danger', 'content' => '<i class="fas fa-times"></i>','onclick'=>'<?php echo base_url()?>Admin')); ?></a>

        </div>

      </div>


    </fieldset>
  </form>
</div>


 <?php include('footer.php');?>
