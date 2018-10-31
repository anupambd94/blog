<?php include('header.php');
//print_r($user_name);
?>

<div class="container" style="margin-top:20px;">
  <h1>Dashboard</h1>
  <p>Welcome to dashboard.</p>
  <?php if($message=$this->session->flashdata('message')){?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="alert alert-success">
            <?php echo $message; ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <br><br>

  <?php echo anchor('Admin/addArticle',"Add Article","class='btn btn-lg btn-success'"); ?><br><br>
  <table class="table tabble-hover table-responsive-sm ">
    <thead>
      <tr>
        <th scope="col">Article Title</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php if(count($articles)): ?>
      <?php foreach ($articles as $articleList): ?>
        <tr>
          <td><?php echo $articleList->article_title?></td>
          <td><a href="#" class="btn btn-primary">Edit</a></td>
          <td>
            <?=
              form_open('Admin/Delete_article'),
              form_hidden('id',$articleList->id),
              form_submit(array('value' => 'Delete','type'=> 'submit','class'=> 'btn btn-danger')),
              form_close();
             ?>

          </td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="3">No Data Abailable</td>

      </tr>

    <?php endif; ?>

    </tbody>
  </table>
  
<?php echo $this->pagination->create_links(); ?>
</div>

</div>

<?php include('footer.php');?>
