<div>
  <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>membres/addpro">Add projet</a>
  <?php endif; ?>
    <?php foreach ($viewmodel as $item):?>
      <div class="well">
        <h3><?php echo $item['title'] ?></h3>
        <h4><?php echo $item['name'] ?></h4>
        <small><?php echo $item['create_date']; ?></small>
        <hr />
  			<p><?php echo $item['body']; ?></p>
        <p><?php echo $item['club']; ?></p>
      </div>
    <?php endforeach; ?>
</div>
