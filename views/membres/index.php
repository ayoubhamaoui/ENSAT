<div>
  <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>membres/addpro">Add Project</a>
  <?php endif; ?>
</div>
<br/>
<div>
<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>membres/projet">Projects</a>
</div>
<br/>
<div>
<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>membres/membre">Contact membres</a>
</div>
