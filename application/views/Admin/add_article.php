
<?php include('header.php');?>



<div class="container" style="margin-top:50px;">

  <?php echo form_open('Admin/formValidation'); ?>
  <?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
    <fieldset>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <h1>Add Article</h1>
          <?php if($error=$this->session->flashdata('Insertion_faild')){?>
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
                <label for="Title">Article Title</label>

                <?php echo form_input(['class'=>'form-control','name'=>'article_title','placeholder'=>'Enter article title','id'=>'title','type'=>'text','value'=>set_value('article_title')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('article_title',"<div class='text-danger'>","</div>");?>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="Body">Article Body</label>
                <?php echo form_textarea(['class'=>'form-control','name'=>'article_body','placeholder'=>'Enter your article','id'=>'body','value'=>set_value('article_body')]); ?>
              </div>

            </div>
            <div class="col-lg-6" style="margin-top:35px;">
              <?php echo form_error('article_body',"<div class='text-danger'>","</div>");?>
            </div>

          </div>

          <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary', 'content' => '<i class="fas fa-plus"></i> Add')); ?>
          <a href="javascript:window.history.go(-1);"><?php echo form_button(array('name' => 'form_button', 'type' => 'button', 'class' => 'btn btn-danger', 'content' => '<i class="fas fa-times"></i>','onclick'=>'<?php echo base_url()?>Admin')); ?></a>

        </div>

      </div>


    </fieldset>
  </form>
</div>


 <?php include('footer.php');?>
