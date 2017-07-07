

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add Project </h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Name</label>
    		<input class="form-control" name="name" type="text" value="<?php echo $_SESSION['user_data']['name'];  ?>" readonly/>
    	</div>
      <div class="form-group">
    		<label>email</label>
    		<input class="form-control" name="email" type="text" value="<?php echo $_SESSION['user_data']['email'];  ?>" readonly/>
    	</div>
      <div class="form-group">
    		<label>club</label>
    		<input class="form-control" name="club" type="text" value="<?php echo $_SESSION['user_data']['club'];  ?>" readonly/>
    	</div>
      <div class="form-group">
    		<label>Telephone</label>
    		<input type="text" name="numero" class="form-control" />
    	</div>
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" />
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
      </div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>membres">Cancel</a>
    </form>
  </div>
</div>
