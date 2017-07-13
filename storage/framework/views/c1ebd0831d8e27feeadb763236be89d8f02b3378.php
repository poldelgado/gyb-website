<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-12">
			<h1>Mi Galeria</h1>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('photoGallery.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>