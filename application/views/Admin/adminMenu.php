<div class="collapse navbar-collapse" id="navbarColor01">
  <ul class="navbar-nav mr-auto">


  </ul>

  <?php echo form_open('admin/logout'); ?>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <?php foreach ($user_name as $name){
                $FisrtName  = $name->first_name;
                $LastName  = $name->last_name;
        } ?>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $FisrtName." ".$LastName;?><span class="caret"></span></a>

        <ul class="dropdown-menu">


          <li>
            <from>
              <?php echo form_button(array('name' => 'form_submit', 'type' => 'submit', 'class' => 'btn btn-primary', 'content' => '<i class="fas fa-sign-out-alt"></i> Logout')); ?>


            </form>
          </li>
        </ul>
      </li>
    </ul>
  </form



</div>
