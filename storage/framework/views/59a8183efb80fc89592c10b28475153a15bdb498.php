
<?php $__env->startSection('container'); ?>
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Home</h4>
    </div>
    <div class="mt-1">

        <div id="desc" class="mt-2 text-light container-fluid w-md-75 rounded" style="background: #CDE4DD;">

            <div class="container-fluid p-1 w-100 text-dark" style="letter-spacing: 0.5px;">

                <b style="text-decoration: underline;">Message,</b><br>

                <p class="container-fluid text-secondary">
                    <?php echo e(old('Message',$user)); ?>

                    

                </p>

                

            </div>

        </div>
        <div class="row mb-3">

            <div class="col-md-6 mt-4">

                <div id="prof" class="d-flex p-2 firstBox container-fluid justify-content-start w-100 align-items-center">

                    <div class="me-3">
                        <img src="<?php echo e(old('Image',$user) ? old('Image',$user) : asset('DUser.jpg')); ?>" style="width: 115px;height: 115px;border-radius: 100%;border: 4px solid #B6CDC6">
                    </div>

                    <div class="mt-2 ms-3 pb-3">

                        <h4 class="fw-bold " style="letter-spacing: 1px;">
                            <?php if($user->userType): ?>
                                <div class="flex align-items-center">
                                    <i class='bx bxs-user-rectangle'></i>
                                    <span><?php echo e(old('Name',$user)); ?></span>
                                </div>
                            <?php else: ?>
                                <?php echo e(old('Name',$user)); ?>

                            <?php endif; ?>
                        </h4>

                        <h6 class='text-secondary'>
                            <?php echo e(old('Bio',$user)); ?>

                        </h6>

                        <h6 class='text-secondary'>
                            <?php echo e(old('localBio',$user)); ?>

                        </h6>
                        
                    </div>
                </div>

                

            </div>

            <div class="col-md-6 mt-4">
                <div style="user-select: none;" class="d-flex p-2 firstBox container-fluid justify-content-start w-100 align-items-center">
                    <div class="w-100 <?php if(auth()->guard()->check()): ?> py-2 <?php endif; ?>" id="scroll_skills" style="height: auto;max-height: 245px; overflow: auto;">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('skills', ['uSERSID' => ''.e($user->USER_SID).'','USER_SID' => ''.e($user->USER_SID).''])->html();
} elseif ($_instance->childHasBeenRendered('ITEZyJv')) {
    $componentId = $_instance->getRenderedChildComponentId('ITEZyJv');
    $componentTag = $_instance->getRenderedChildComponentTagName('ITEZyJv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ITEZyJv');
} else {
    $response = \Livewire\Livewire::mount('skills', ['uSERSID' => ''.e($user->USER_SID).'','USER_SID' => ''.e($user->USER_SID).'']);
    $html = $response->html();
    $_instance->logRenderedChild('ITEZyJv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




















    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/Web/index.blade.php ENDPATH**/ ?>