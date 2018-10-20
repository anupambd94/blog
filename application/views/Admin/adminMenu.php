<div class="collapse navbar-collapse" id="navbarColor01">
  <ul class="navbar-nav mr-auto">


  </ul>

  <?php echo form_open('admin/logout'); ?>
  <?php
        if($this->session->userdata('id')){
          global $FisrtName, $LastName;
          foreach ($user_name as $name){
                  $FisrtName  = $name->first_name;
                  $LastName  = $name->last_name;
          }
        }
   ?>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $FisrtName." ".$LastName;?></a>
        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">
        <?php echo form_button(array('name' => 'form_submit', 'type' => 'submit', 'class' => 'btn btn-sm btn-primary', 'content' => '<i class="fas fa-sign-out-alt"></i> Logout')); ?>
        </a>
        </div>
      </li>


    </ul>
  </form



</div>
