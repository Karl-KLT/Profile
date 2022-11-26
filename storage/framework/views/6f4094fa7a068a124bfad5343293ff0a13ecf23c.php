<div>
    <div>
        <input type="text" wire:model.lazy="search" placeholder="Search . . ." class="form-control">
    </div>

    <?php $__errorArgs = ['search'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert bg-dark"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


    





    
    <div style="user-select: none;" class="row container-fluid mt-2 d-flex justify-content-center">
        <?php $__empty_1 = true; $__currentLoopData = $Animes->getResults(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Anime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
        
            <div class="m-3 col-md-3 d-flex justify-content-center" style="max-height: auto ">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="<?php echo e($Anime->getImages()->getJpg()->getImageUrl()); ?>">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 underline" style="user-select: text"><?php echo e($Anime->getTitle()); ?></div>

                        <p class="text-gray-700 text-base">

                            <div>
                                <span>episodes</span>
                                <?php echo e($Anime->getEpisodes()); ?>

                            </div>

                            <div class="d-flex align-items-center">
                                <div class="me-1">
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="fw-bold">
                                    <?php echo e($Anime->getScore()); ?>

                                </div>
                            </div>
                            
                            
                            
                        </p>
                    </div>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="alert alert-danger fw-bold">not found animes</div>
        <?php endif; ?>


    </div>
</div>
<?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/livewire/animes.blade.php ENDPATH**/ ?>