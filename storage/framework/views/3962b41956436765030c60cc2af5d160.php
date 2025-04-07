<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Job Stage')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Job Stage')); ?></li>
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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Create Job Stage')): ?>
                    <a href="#" data-url="<?php echo e(route('job-stage.create')); ?>" data-ajax-popup="true"
                        data-title="<?php echo e(__('Create New Job Stage')); ?>" data-bs-toggle="tooltip" title=""
                        class="btn btn-sm btn-primary" data-bs-original-title="<?php echo e(__('Create')); ?>">
                        <i class="ti ti-plus"></i>
                    </a>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content tab-bordered">
                                <div class="tab-pane fade show active" role="tabpanel">
                                    <ul class="list-unstyled list-group sortable">
                                        <?php $__currentLoopData = $stages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="list-group-item d-flex align-items-center justify-content-between"
                                                data-id="<?php echo e($stage->id); ?>">
                                                <h6 class="mb-0">
                                                    <i class="me-3" data-feather="move"></i>
                                                    <span><?php echo e($stage->title); ?></span>
                                                </h6>
                                                <span class="float-end">
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Edit Job Stage')): ?>
                                                        <div class="action-btn me-2">
                                                            <a href="#" class="btn btn-sm align-items-center bg-info"
                                                                data-url="<?php echo e(route('job-stage.edit', $stage->id)); ?>"
                                                                data-ajax-popup="true" data-title="<?php echo e(__('Edit Job Stage')); ?>"
                                                                data-bs-toggle="tooltip" title="<?php echo e(__('Edit')); ?>"
                                                                data-original-title="<?php echo e(__('Edit')); ?>">
                                                                <i class="ti ti-pencil text-white"></i>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Delete Job Stage')): ?>
                                                        <div class="action-btn ">
                                                            <?php echo Form::open([
                                                                'method' => 'DELETE',
                                                                'route' => ['job-stage.destroy', $stage->id],
                                                                'id' => 'delete-form-' . $stage->id,
                                                            ]); ?>

                                                            <a href="#"
                                                                class="btn btn-sm  align-items-center bs-pass-para bg-danger"
                                                                data-bs-toggle="tooltip" title="<?php echo e(__('Delete')); ?>"><i
                                                                    class="ti ti-trash text-white text-white"></i></a>
                                                            <?php echo Form::close(); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                </span>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <p class="mt-3">
                                        <b><?php echo e(__('Note: You can easily order change of card blocks using drag & drop.')); ?></b>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-page'); ?>
    <script src="<?php echo e(asset('js/jquery-ui.min.js')); ?>"></script>
    <?php if(\Auth::user()->type == 'company'): ?>
        <script>
            $(function() {
                $(".sortable").sortable();
                $(".sortable").disableSelection();
                $(".sortable").sortable({
                    stop: function() {
                        var order = [];
                        $(this).find('li').each(function(index, data) {
                            order[index] = $(data).attr('data-id');
                        });

                        $.ajax({
                            url: "<?php echo e(route('job.stage.order')); ?>",
                            data: {
                                order: order,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'POST',
                            success: function(data) {},
                            error: function(data) {
                                data = data.responseJSON;
                                toastr('Error', data.error, 'error')
                            }
                        })
                    }
                });
            });
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-website\HRMS\resources\views/jobStage/index.blade.php ENDPATH**/ ?>