<?php echo e(Form::open(['url' => 'indicator', 'method' => 'post', 'id' => 'ratingForm', 'class' => 'needs-validation', 'novalidate'])); ?>

<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?php echo e(Form::label('branch_id', __('Select Branch'), ['class' => 'form-label'])); ?><?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbba606fec37ea04333bc269e3e165587 = $attributes; } ?>
<?php $component = App\View\Components\Required::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('required'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Required::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbba606fec37ea04333bc269e3e165587)): ?>
<?php $attributes = $__attributesOriginalbba606fec37ea04333bc269e3e165587; ?>
<?php unset($__attributesOriginalbba606fec37ea04333bc269e3e165587); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbba606fec37ea04333bc269e3e165587)): ?>
<?php $component = $__componentOriginalbba606fec37ea04333bc269e3e165587; ?>
<?php unset($__componentOriginalbba606fec37ea04333bc269e3e165587); ?>
<?php endif; ?>
                <?php echo e(Form::select('branch_id', $brances, null, ['class' => 'form-control ', 'required' => 'required', 'placeholder' => __('Select Branch')])); ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('department_id', __('Select Department'), ['class' => 'form-label'])); ?><?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbba606fec37ea04333bc269e3e165587 = $attributes; } ?>
<?php $component = App\View\Components\Required::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('required'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Required::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbba606fec37ea04333bc269e3e165587)): ?>
<?php $attributes = $__attributesOriginalbba606fec37ea04333bc269e3e165587; ?>
<?php unset($__attributesOriginalbba606fec37ea04333bc269e3e165587); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbba606fec37ea04333bc269e3e165587)): ?>
<?php $component = $__componentOriginalbba606fec37ea04333bc269e3e165587; ?>
<?php unset($__componentOriginalbba606fec37ea04333bc269e3e165587); ?>
<?php endif; ?>
                <?php echo e(Form::select('department_id', [], null, ['class' => 'form-control ', 'id' => 'department_id', 'required' => 'required', 'placeholder' => __('Select Department')])); ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('designation_id', __('Select Designation'), ['class' => 'form-label'])); ?><?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbba606fec37ea04333bc269e3e165587 = $attributes; } ?>
<?php $component = App\View\Components\Required::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('required'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Required::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbba606fec37ea04333bc269e3e165587)): ?>
<?php $attributes = $__attributesOriginalbba606fec37ea04333bc269e3e165587; ?>
<?php unset($__attributesOriginalbba606fec37ea04333bc269e3e165587); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbba606fec37ea04333bc269e3e165587)): ?>
<?php $component = $__componentOriginalbba606fec37ea04333bc269e3e165587; ?>
<?php unset($__componentOriginalbba606fec37ea04333bc269e3e165587); ?>
<?php endif; ?>
                <?php echo e(Form::select('designation_id', [], null, ['class' => 'form-control ', 'id' => 'designation_id', 'required' => 'required', 'placeholder' => __('Select Designation')])); ?>

            </div>
        </div>
    </div>
    <?php if(empty($competencies->count())): ?>
        <span class="text-danger"><?php echo e(__('Please first add competencies')); ?><a href="<?php echo e(route('competencies.index')); ?>"
                target="_blank"><?php echo e(__(' here')); ?></a>.</span>
    <?php endif; ?>
    <div class="row">
        <?php $__currentLoopData = $performance_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-12 mt-3">
                <h6><?php echo e($performance_type->name); ?></h6>
                <hr class="mt-0">
            </div>

            <?php $__currentLoopData = $performance_type->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6">
                    <?php echo e($types->name); ?>

                </div>
                <div class="col-6">
                    <fieldset id='demo1' class="rate">
                        <input class="stars" type="radio" id="technical-5-<?php echo e($types->id); ?>"
                            name="rating[<?php echo e($types->id); ?>]" value="5" />
                        <label class="full" for="technical-5-<?php echo e($types->id); ?>" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="technical-4-<?php echo e($types->id); ?>"
                            name="rating[<?php echo e($types->id); ?>]" value="4" />
                        <label class="full" for="technical-4-<?php echo e($types->id); ?>"
                            title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="technical-3-<?php echo e($types->id); ?>"
                            name="rating[<?php echo e($types->id); ?>]" value="3" />
                        <label class="full" for="technical-3-<?php echo e($types->id); ?>" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="technical-2-<?php echo e($types->id); ?>"
                            name="rating[<?php echo e($types->id); ?>]" value="2" />
                        <label class="full" for="technical-2-<?php echo e($types->id); ?>"
                            title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="technical-1-<?php echo e($types->id); ?>"
                            name="rating[<?php echo e($types->id); ?>]" value="1" />
                        <label class="full" for="technical-1-<?php echo e($types->id); ?>"
                            title="Sucks big time - 1 star"></label>
                    </fieldset>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div class="modal-footer">
    <input type="button" value="Cancel" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn btn-primary">
</div>

<?php echo e(Form::close()); ?>



    <script>
        document.getElementById('ratingForm').addEventListener('submit', function(event) {
            let isValid = true;

            <?php if(empty($performance_types->count()) || empty($competencies->count())): ?>
                isValid = false;
                alert(
                    'Performance types or competencies are missing. Please add them before submitting the form.'
                );
                event.preventDefault();
                return false;
            <?php endif; ?>

            <?php $__currentLoopData = $performance_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $performance_type->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    if (!document.querySelector('input[name="rating[<?php echo e($types->id); ?>]"]:checked')) {
                        isValid = false;
                        alert('Please select a rating for "<?php echo e($types->name); ?>"');
                        event.preventDefault();
                        return false;
                    }
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        });
    </script>

<?php /**PATH C:\xampp\htdocs\project-website\HRMS\resources\views/indicator/create.blade.php ENDPATH**/ ?>