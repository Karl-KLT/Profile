<div>
    

    



    
    <div>
        <input type="text" wire:loading.attr="disabled" wire:model.lazy="search" placeholder="Search . . . (must ur length = 3 or 2 for min)" class="form-control">
    </div>

    
    <div class="m-2 d-flex justify-content-between align-items-center">
        <div wire:click='previous'>
            <button <?php if($page == 1): ?> disabled <?php endif; ?> class="btn btn-dark">previous</button>
        </div>

        <div class="bg-dark p-1 overflow-scroll hide-scroll m-1 rounded w-100 d-flex justify-content-start align-items-center">

            <?php for($i = 1; $i <= $page; $i++): ?>
                <div class='me-1'>
                    <div wire:click='select(<?php echo e($i); ?>)' class="badge cursor-pointer bg-primary"><?php echo e($i); ?></div>
                </div>
            <?php endfor; ?>

        </div>

        <div wire:click='next(<?php echo e($Animes->HasNextPage()); ?>)' class="d-flex">
            <button <?php if(!$Animes->HasNextPage()): ?> disabled <?php endif; ?> class="btn btn-dark">next</button>
        </div>
    </div>
    
    <div wire:loading wire:target="search,previous,next,select" class="container-fluid">

        <div class="container-fluid my-2 d-flex justify-content-start">
            <div class="d-flex animate-pulse">
                
                <div>
                    <div style="height: 160px;width: 140px" class="rounded bg-slate-700 h-10 w-10"></div>
                </div>
                
                <div class="ms-2 mt-1">
                    <div class="my-2">
                        <div style="width: 150px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 70px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 30px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid my-2 d-flex justify-content-start">
            <div class="d-flex animate-pulse">
                
                <div>
                    <div style="height: 160px;width: 140px" class="rounded bg-slate-700 h-10 w-10"></div>
                </div>
                
                <div class="ms-2 mt-1">
                    <div class="my-2">
                        <div style="width: 150px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 70px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 30px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid my-2 d-flex justify-content-start">
            <div class="d-flex animate-pulse">
                
                <div>
                    <div style="height: 160px;width: 140px" class="rounded bg-slate-700 h-10 w-10"></div>
                </div>
                
                <div class="ms-2 mt-1">
                    <div class="my-2">
                        <div style="width: 150px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 70px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 30px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div wire:loading.remove wire:loading.class.remove='row container-fluid mt-2 d-flex justify-content-center' wire:target="search,previous,next,select" class="row container-fluid mt-2 d-flex justify-content-center">
        
        <?php $__empty_1 = true; $__currentLoopData = $Animes->getResults(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Anime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            
            <div class="container-fluid my-2 d-flex justify-content-between">
                <div class="d-flex">
                    
                    <div>
                        <img style="height: 160px;width: 140px" class="rounded" src="<?php echo e($Anime->getImages()->getJpg()->getImageUrl()); ?>">
                    </div>
                    
                    <div class="ms-2">
                        <div class="my-2">
                            <div class="fw-bold mt-2 underline" style="letter-spacing: 1px"><?php echo e($Anime->getTitle()); ?></div>
                        </div>

                        <div class="my-2">
                            <span class="fw-bold">Episodes:</span>
                            <?php echo e($Anime->getEpisodes()); ?>

                        </div>

                        <div class="my-2">
                            <i class='bx bxs-star'></i>
                            <?php echo e($Anime->getScore()); ?>

                        </div>

                        <div>
                            <button class="badge bg-primary p-2 cursor-pointer" wire:click='RedirectToAnime(<?php echo e($Anime->getMalId()); ?>)'>more info</button>
                        </div>

                    </div>
                </div>
                
                <div></div>
            </div>
            

            
                            
                            
                        
                    
                
            
            


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="alert alert-danger fw-bold">not found animes</div>
        <?php endif; ?>


    </div>
</div>
<?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/livewire/animes.blade.php ENDPATH**/ ?>