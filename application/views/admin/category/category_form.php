<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="row">
      <div class="card">
        <div class="card-body">
        <h2 style="margin-top:0px">Category <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <input type="hidden" name="category_id" value="<?php echo $category_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('admin/category') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
      </div>
    </div>
  </div>
</div>