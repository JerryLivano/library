<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Genre List</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Genre List</li>
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
            <div class="card-header text-right">
                <a href="<?php echo e(route('createGenre')); ?>" class="btn btn-primary" role="button">Open Genre Form</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0 text-center">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($genre -> id); ?></td>
                            <td><?php echo e($genre -> name); ?></td>
                            <td>
                                <a href="<?php echo e(route('editGenre', ['id' => $genre -> id])); ?>" class="btn btn-warning" role="button"><i class="nav-icon fa fa-edit"></i></a>
                                <a href="<?php echo e(route('deleteGenre', ['id' => $genre -> id])); ?>" class="btn btn-danger" role="button"><i class="nav-icon fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/genre/index.blade.php ENDPATH**/ ?>