<?php include('header.php');
//print_r($user_name);
?>

<div class="container" style="margin-top:20px;">
  <h1>Dashboard</h1>
  <p>Welcome to dashboard.</p>
  <br><br>

  <table class="table tabble-hover table-responsive-sm ">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Article Title</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php if(count($articles)): ?>
      <?php foreach ($articles as $articleList): ?>
        <tr>
          <td><?php echo $articleList->id?></td>
          <td><?php echo $articleList->article_title?></td>
          <td><a href="#" class="btn btn-primary">Edit</a></td>
          <td><a href="#" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="3">No Data Abailable</td>

      </tr>

    <?php endif; ?>

    </tbody>
  </table>
</div>
</div>

<?php include('footer.php');?>
