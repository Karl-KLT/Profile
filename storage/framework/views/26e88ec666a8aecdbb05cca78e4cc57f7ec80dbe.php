<div id="container_Skills">
    <div>
        <?php $__empty_1 = true; $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="Box container-fluid navbar mt-2" id="<?php echo e($skill->Name); ?>">

                <div style="letter-spacing: 0.8px;font-weight: bold;">
                    <?php echo e(Str::upper($skill->Name)); ?>

                </div>
                <div class="flex text-secondary" style="font-weight: bold;"><span id="<?php echo e($skill->Name); ?>Num">
                    <span>
                        <?php echo e($skill->MaxNum); ?></span>%
                    </span>
                    <?php if(!$visitor): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <span class="ms-2">
                                <form wire:submit.prevent="remove(<?php echo e($skill->id); ?>)">
                                    <button type="submit" style="outline: none" class="hover:text-red-400"><i class='bx bxs-message-square-x'></i></button>
                                </form>
                            </span>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div style="display: flex;width: 100%;height: 10px;">
                    <div class="badge bg-secondary w-100 p-0">
                        <div class="badge" id="<?php echo e($skill->Name); ?>Num_bar" style="float:left;height: 10px;background-color: #A2CABD;width:<?php echo e($skill->MaxNum); ?>%;">&nbsp;</div>
                    </div>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="Box container-fluid navbar mt-2">
                <div style="letter-spacing: 0.8px;font-weight: bold;letter-spacing: 1px" class="flex justify-center w-100 underline">
                    without any skills
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php if(!$visitor): ?>
        <?php if(auth()->guard()->check()): ?>

            <div class="w-100 mt-2  container-fluid">





                <form wire:submit.prevent='$emit("save")' class="flex">


                    <div class="w-100">
                        <input type="text" placeholder="Name" wire:model.lazy='Name'  maxlength="12" class="form-control" id="">
                    </div>



                    <div class="w-25 mx-2">
                        <input type="text" maxlength="3" placeholder="MaxNum" wire:model.lazy='MaxNum' class="form-control" id="">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-dark text-gray-900">Add</button>
                    </div>
                </form>

                <?php if($errors->any()): ?>
                    <div class="flex my-4 justify-content-between w-100">

                        <?php $__errorArgs = ['Name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div>
                                <span class="error alert alert-danger"><?php echo e($message); ?></span>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                        <?php $__errorArgs = ['MaxNum'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div>
                                <span class="error alert alert-danger"><?php echo e($message); ?></span>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                <?php endif; ?>


            </div>
        <?php endif; ?>
    <?php endif; ?>
    <style>.Box{width: 100%;height: auto;background-color: #CDE4DD;border-radius: 10px; }</style>
</div>

<?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/livewire/skills.blade.php ENDPATH**/ ?>