<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Edit Employee')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('employee')); ?>"><?php echo e(__('Employee')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Edit Employee')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .cursor-pointer {
            cursor: pointer;
        }
    </style>

    <div class="row">
        <div class="">
            <div class="">

                <?php echo e(Form::model($employee, ['route' => ['employee.update', $employee->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate'])); ?>

                <div class="row">
                    <div class="col-md-6 ">
                        <div class="card em-card">
                            <div class="card-header">
                                <h5><?php echo e(__('Personal Detail')); ?></h5>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <?php echo Form::label('name', __('Name'), ['class' => 'form-label']); ?><?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
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
                                        <?php echo Form::text('name', null, ['class' => 'form-control', 'required' => 'required']); ?>

                                    </div>
                                    <?php if (isset($component)) { $__componentOriginal5d1845474bd0b0647eed674e26ea3910 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d1845474bd0b0647eed674e26ea3910 = $attributes; } ?>
<?php $component = App\View\Components\Mobile::resolve(['divClass' => 'col-md-6','name' => 'phone','label' => ''.e(__('Phone')).'','placeholder' => ''.e(__('Enter employee phone')).'','id' => 'phone','required' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('mobile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Mobile::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d1845474bd0b0647eed674e26ea3910)): ?>
<?php $attributes = $__attributesOriginal5d1845474bd0b0647eed674e26ea3910; ?>
<?php unset($__attributesOriginal5d1845474bd0b0647eed674e26ea3910); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d1845474bd0b0647eed674e26ea3910)): ?>
<?php $component = $__componentOriginal5d1845474bd0b0647eed674e26ea3910; ?>
<?php unset($__componentOriginal5d1845474bd0b0647eed674e26ea3910); ?>
<?php endif; ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php echo Form::label('dob', __('Date of Birth'), ['class' => 'form-label']); ?><?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
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
                                            <?php echo Form::date('dob', null, ['class' => 'form-control', 'required' => 'required', 'max' => date('Y-m-d')]); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group ">
                                            <?php echo Form::label('gender', __('Gender'), ['class' => 'form-label']); ?><?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
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
                                            <div class="d-flex radio-check">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="g_male" value="Male" name="gender"
                                                        class="form-check-input"
                                                        <?php echo e($employee->gender == 'Male' ? 'checked' : ''); ?>>
                                                    <label class="form-check-label"
                                                        for="g_male"><?php echo e(__('Male')); ?></label>
                                                </div>
                                                <div class="custom-control custom-radio ms-1 custom-control-inline">
                                                    <input type="radio" id="g_female" value="Female" name="gender"
                                                        class="form-check-input"
                                                        <?php echo e($employee->gender == 'Female' ? 'checked' : ''); ?>>
                                                    <label class="form-check-label"
                                                        for="g_female"><?php echo e(__('Female')); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo Form::label('address', __('Address'), ['class' => 'form-label']); ?><?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
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
                                    <?php echo Form::textarea('address', null, ['class' => 'form-control', 'rows' => 3]); ?>

                                </div>
                                <?php if(\Auth::user()->type == 'employee'): ?>
                                    <div class="float-end">
                                        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if(\Auth::user()->type != 'employee'): ?>
                        <div class="col-md-6 ">
                            <div class="card em-card">
                                <div class="card-header">
                                    <h5><?php echo e(__('Company Detail')); ?></h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group ">
                                            <?php echo Form::label('employee_id', __('Employee ID'), ['class' => 'form-label']); ?>

                                            <?php echo Form::text('employee_id', $employeesId, ['class' => 'form-control', 'disabled' => 'disabled']); ?>

                                        </div>
                                        <div class="form-group col-md-6">
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
                                            <?php echo e(Form::select('branch_id', $branches, null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => __('select Branch')])); ?>

                                        </div>
                                        <div class="form-group col-md-6">
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
                                            <?php echo e(Form::select('department_id', $departments, null, ['class' => 'form-control', 'id' => 'department_id', 'required' => 'required', 'placeholder' => __('Select Department')])); ?>

                                        </div>
                                        <div class="form-group col-md-6">
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
                                            <?php echo e(Form::select('designation_id', $designations, null, ['class' => 'form-control', 'id' => 'designation_id', 'required' => 'required', 'placeholder' => __('Select Designation')])); ?>

                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <?php echo Form::label('company_doj', 'Company Date Of Joining', ['class' => 'form-label']); ?><?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
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
                                            <?php echo Form::date('company_doj', null, [
                                                'class' => 'form-control ',
                                                'id' => 'data_picker2',
                                                'required' => 'required',
                                            ]); ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-6 ">
                            <div class="employee-detail-wrap ">
                                <div class="card em-card">
                                    <div class="card-header">
                                        <h5><?php echo e(__('Company Detail')); ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="info">
                                                    <strong><?php echo e(__('Branch')); ?></strong>
                                                    <span><?php echo e(!empty($employee->branch) ? $employee->branch->name : ''); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info font-style">
                                                    <strong><?php echo e(__('Department')); ?></strong>
                                                    <span><?php echo e(!empty($employee->department) ? $employee->department->name : ''); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info font-style">
                                                    <strong><?php echo e(__('Designation')); ?></strong>
                                                    <span><?php echo e(!empty($employee->designation) ? $employee->designation->name : ''); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info">
                                                    <strong><?php echo e(__('Date Of Joining')); ?></strong>
                                                    <span><?php echo e(\Auth::user()->dateFormat($employee->company_doj)); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if(\Auth::user()->type != 'employee'): ?>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="card em-card">
                                <div class="card-header">
                                    <h5><?php echo e(__('Document')); ?></h5>
                                </div>
                                <div class="card-body">
                                    <?php
                                        $employeedoc = $employee
                                            ->documents()
                                            ->pluck('document_value', __('document_id'));
                                    ?>

                                    <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                            <div class="form-group col-12 d-flex">
                                                <div class="float-left col-4">
                                                    <label for="document" class=" form-label"><?php echo e($document->name); ?>

                                                        <?php if($document->is_required == 1): ?>
                                                        <?php if (isset($component)) { $__componentOriginalbba606fec37ea04333bc269e3e165587 = $component; } ?>
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
                                                        <?php endif; ?>
                                                    </label>
                                                </div>
                                                <div class="float-right col-8">
                                                    <input type="hidden" name="emp_doc_id[<?php echo e($document->id); ?>]"
                                                        id="" value="<?php echo e($document->id); ?>">

                                                    <?php
                                                        $employeedoc = !empty($employee->documents)
                                                            ? $employee
                                                                ->documents()
                                                                ->pluck('document_value', __('document_id'))
                                                            : [];
                                                    ?>
                                                    <div class="choose-files ">
                                                        <label for="document[<?php echo e($document->id); ?>]">
                                                            <div class=" bg-primary document cursor-pointer"> <i
                                                                    class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                                                            </div>
                                                            <input type="file"
                                                                class="form-control file  d-none <?php $__errorArgs = ['document'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                <?php if($document->is_required == 1): ?>  <?php endif; ?>
                                                                name="document[<?php echo e($document->id); ?>]"
                                                                id="document[<?php echo e($document->id); ?>]"
                                                                data-filename="<?php echo e($document->id . '_filename'); ?>"
                                                                onchange="document.getElementById('<?php echo e('blah' . $key); ?>').src = window.URL.createObjectURL(this.files[0])">
                                                        </label>
                                                        <?php
                                                            $logo = \App\Models\Utility::get_file('uploads/document/');

                                                        ?>
                                                            
                                                        <img id="<?php echo e('blah' . $key); ?>"
                                                            src="<?php echo e(isset($employeedoc[$document->id]) && !empty($employeedoc[$document->id]) ? $logo . '/' . $employeedoc[$document->id] : ''); ?>"
                                                            width="50%" />

                                                    </div>

                                                    <?php if(!empty($employeedoc[$document->id])): ?>
                                                        <span class="text-xs-1"><a
                                                                href="<?php echo e(!empty($employeedoc[$document->id]) ? asset(Storage::url('uploads/document')) . '/' . $employeedoc[$document->id] : ''); ?>"
                                                                target="_blank"></a>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card em-card">
                                <div class="card-header">
                                    <h5><?php echo e(__('Bank Account Detail')); ?></h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <?php echo Form::label('account_holder_name', __('Account Holder Name'), ['class' => 'form-label']); ?>

                                            <?php echo Form::text('account_holder_name', null, ['class' => 'form-control', 'placeholder' => __('Select Designation')]); ?>


                                        </div>
                                        <div class="form-group col-md-6">
                                            <?php echo Form::label('account_number', __('Account Number'), ['class' => 'form-label']); ?>

                                            <?php echo Form::number('account_number', null, ['class' => 'form-control']); ?>


                                        </div>
                                        <div class="form-group col-md-6">
                                            <?php echo Form::label('bank_name', __('Bank Name'), ['class' => 'form-label']); ?>

                                            <?php echo Form::text('bank_name', null, ['class' => 'form-control']); ?>


                                        </div>
                                        <div class="form-group col-md-6">
                                            <?php echo Form::label('bank_identifier_code', __('Bank Identifier Code'), ['class' => 'form-label']); ?>

                                            <?php echo Form::text('bank_identifier_code', null, ['class' => 'form-control']); ?>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <?php echo Form::label('branch_location', __('Branch Location'), ['class' => 'form-label']); ?>

                                            <?php echo Form::text('branch_location', null, ['class' => 'form-control']); ?>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <?php echo Form::label('tax_payer_id', __('Tax Payer Id'), ['class' => 'form-label']); ?>

                                            <?php echo Form::text('tax_payer_id', null, ['class' => 'form-control']); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="employee-detail-wrap">
                                <div class="card em-card">
                                    <div class="card-header">
                                        <h5><?php echo e(__('Document Detail')); ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <?php
                                                $employeedoc = $employee
                                                    ->documents()
                                                    ->pluck('document_value', __('document_id'));
                                                $logo = \App\Models\Utility::get_file('uploads/document/');

                                            ?>
                                            <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-12">
                                                    <div class="info">

                                                        <strong><?php echo e($document->name); ?></strong>
                                                        <span><a href="<?php echo e(!empty($employeedoc[$document->id]) ? $logo . '/' . $employeedoc[$document->id] : ''); ?>"
                                                                target="_blank"><?php echo e(!empty($employeedoc[$document->id]) ? $employeedoc[$document->id] : ''); ?></a></span>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="employee-detail-wrap">
                                <div class="card em-card">
                                    <div class="card-header">
                                        <h5><?php echo e(__('Bank Account Detail')); ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="info">
                                                    <strong><?php echo e(__('Account Holder Name')); ?></strong>
                                                    <span><?php echo e($employee->account_holder_name); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info font-style">
                                                    <strong><?php echo e(__('Account Number')); ?></strong>
                                                    <span><?php echo e($employee->account_number); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info font-style">
                                                    <strong><?php echo e(__('Bank Name')); ?></strong>
                                                    <span><?php echo e($employee->bank_name); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info">
                                                    <strong><?php echo e(__('Bank Identifier Code')); ?></strong>
                                                    <span><?php echo e($employee->bank_identifier_code); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info">
                                                    <strong><?php echo e(__('Branch Location')); ?></strong>
                                                    <span><?php echo e($employee->branch_location); ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info">
                                                    <strong><?php echo e(__('Tax Payer Id')); ?></strong>
                                                    <span><?php echo e($employee->tax_payer_id); ?></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(\Auth::user()->type != 'employee'): ?>
                    <div class="float-end">
                        <a class="btn btn-secondary btn-submit"
                            href="<?php echo e(route('employee.index')); ?>"><?php echo e(__('Cancel')); ?></a>
                        <button class="btn btn-primary btn-submit ms-1" type="submit"
                            id="submit"><?php echo e(__('Update')); ?></button>
                    </div>
                <?php endif; ?>
                <div class="col-12">
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-page'); ?>
    <script type="text/javascript">
        $(document).on('change', '#branch_id', function() {
            var branch_id = $(this).val();
            getDepartment(branch_id);
        });

        function getDepartment(branch_id) {
            var data = {
                "branch_id": branch_id,
                "_token": "<?php echo e(csrf_token()); ?>",
            }

            $.ajax({
                url: '<?php echo e(route('monthly.getdepartment')); ?>',
                method: 'POST',
                data: data,
                success: function(data) {
                    $('#department_id').empty();
                    $('#department_id').append(
                        '<option value="" disabled><?php echo e(__('Select Department')); ?></option>');

                    $.each(data, function(key, value) {
                        $('#department_id').append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    $('#department_id').val('');
                }
            });
        }

        $(document).on('change', 'select[name=department_id]', function() {
            var department_id = $(this).val();
            getDesignation(department_id);
        });

        function getDesignation(did) {
            $.ajax({
                url: '<?php echo e(route('employee.json')); ?>',
                type: 'POST',
                data: {
                    "department_id": did,
                    "_token": "<?php echo e(csrf_token()); ?>",
                },
                success: function(data) {
                    $('#designation_id').empty();
                    $('#designation_id').append(
                        '<option value=""><?php echo e(__('Select Designation')); ?></option>');
                    $.each(data, function(key, value) {
                        $('#designation_id').append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                }
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-website\HRMS\resources\views/employee/edit.blade.php ENDPATH**/ ?>