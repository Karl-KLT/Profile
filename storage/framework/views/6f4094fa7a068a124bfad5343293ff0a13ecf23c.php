<div>
    <div>
        <input type="text" wire:loading.attr="disabled" wire:model.debounce.240ms="search" placeholder="Search . . . (must ur length = 3 or 2 for min)" class="form-control">
    </div>


    





    
    <div wire:loading wire:target="search" class="container-fluid">
        <div class="badge bg-primary">
            Loading . . .
        </div>
    </div>

    <div wire:loading.remove wire:loading.class.remove='row container-fluid mt-2 d-flex justify-content-center' wire:target="search" style="user-select: none;" class="row container-fluid mt-2 d-flex justify-content-center">
        <?php $__empty_1 = true; $__currentLoopData = $Animes->getResults(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Anime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="m-3 col-md-3 d-flex justify-content-center" style="max-height: auto ">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="<?php echo e($Anime->getImages()->getJpg()->getImageUrl()); ?>">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 underline" style="user-select: text"><?php echo e($Anime->getTitle()); ?></div>

                        <p class="text-gray-700 text-base">

                            <div>
                                <span class="fw-bold">episodes:</span>
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