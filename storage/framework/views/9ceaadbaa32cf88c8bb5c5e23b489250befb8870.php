<div>
    <form wire:submit.prevent="SendPost" class="d-flex">
        <div class="w-100">
            <input type="text" wire:model.lazy="text" placeholder="What u think?" class="form-control" required>
        </div>
        <div class="ms-3">
            <input type="submit" value="Send" class="btn btn-outline-dark">
        </div>
    </form>

    <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="my-2 alert alert-danger">
            <?php echo e($message); ?>

        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


    <div class="my-2 alert alert-info">
        We still working on this page
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/livewire/posts.blade.php ENDPATH**/ ?>