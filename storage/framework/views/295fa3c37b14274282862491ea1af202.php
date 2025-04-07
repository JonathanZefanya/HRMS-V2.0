<?php $__env->startSection('page-title'); ?>
   <?php echo e(__("Manage Training Type")); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__("Home")); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__("Training Type")); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-button'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
        
        <div class="col-12">
            <?php echo $__env->make('layouts.hrm_setup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-12">
            <div class="my-3 d-flex justify-content-end">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Create Training Type')): ?>
                    <a href="#" data-url="<?php echo e(route('trainingtype.create')); ?>" data-ajax-popup="true"
                        data-title="<?php echo e(__('Create New Training Type')); ?>" data-bs-toggle="tooltip" title="" class="btn btn-sm btn-primary"
                        data-bs-original-title="<?php echo e(__('Create')); ?>">
                        <i class="ti ti-plus"></i>
                    </a>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body table-border-style">

                            <div class="table-responsive">
                            <table class="table" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('Training Type')); ?></th>
                                            <th width="200px"><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $trainingtypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainingtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($trainingtype->name); ?></td>
                                            <td class="Action">
                                                <div class="dt-buttons">
                                                    <span class="float-start">
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Edit Training Type')): ?>
                                                            <div class="action-btn me-2">
                                                                <a href="#" class="btn btn-sm align-items-center bg-info"
                                                                    data-url="<?php echo e(route('trainingtype.edit', $trainingtype->id)); ?>"
                                                                    data-ajax-popup="true" data-title="<?php echo e(__('Edit Training Type')); ?>"
                                                                    data-bs-toggle="tooltip" title="<?php echo e(__('Edit')); ?>"
                                                                    data-original-title="<?php echo e(__('Edit')); ?>">
                                                                    <i class="ti ti-pencil text-white"></i>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Delete Training Type')): ?>
                                                            <div class="action-btn ">
                                                                <?php echo Form::open([
                                                                    'method' => 'DELETE',
                                                                    'route' => ['trainingtype.destroy', $trainingtype->id],
                                                                    'id' => 'delete-form-' . $trainingtype->id,
                                                                    ]); ?>

                                                                    <a href="#"
                                                                        class="btn btn-sm  align-items-center bs-pass-para bg-danger"
                                                                        data-bs-toggle="tooltip" title="<?php echo e(__('Delete')); ?>"><i
                                                                        class="ti ti-trash text-white text-white"></i></a>
                                                                <?php echo Form::close(); ?>

                                                            </div>
                                                        <?php endif; ?>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                           </table>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-website\HRMS\resources\views/trainingtype/index.blade.php ENDPATH**/ ?>