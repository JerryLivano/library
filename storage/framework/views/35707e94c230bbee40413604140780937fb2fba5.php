<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Genre Form</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('genreList')); ?>">Genre List</a></li>
                    <li class="breadcrumb-item active">Genre Form</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

        <div class="card">
            <div class="card-body p-3">
                <form action="<?php echo e(route('storeGenre')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="txtName">Genre Name</label>
                        <input type="text" id="txtName" name="txtName" class="form-control" required placeholder="Genre Name">
                    </div>
                    <div class="text-right">
                        <a href="<?php echo e(route('genreList')); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/genre/create.blade.php ENDPATH**/ ?>