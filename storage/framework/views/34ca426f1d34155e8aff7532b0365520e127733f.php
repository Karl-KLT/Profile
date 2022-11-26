<div class="mt-3">
    <?php if($users): ?>
        <table class="table table-striped table-dark">
            <thead>
            <tr>

                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">name</th>
                <th scope="col" class="text-center">email</th>
                <th scope="col" class="text-center">SID</th>
                <th scope="col" class="text-center">Type</th>

            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th class="text-center" scope="row"><?php echo e($loop->iteration); ?></th>
                        <td class="text-center"><?php echo e($user->Profile->Name); ?></td>
                        <td class="text-center"><?php echo e($user->email); ?></td>
                        <td class="text-center" style="user-select: text;"><?php echo e($user->Profile->USER_SID); ?></td>
                        <?php if(env('MAIN_ADMIN_EMAIL') != $user->email): ?>

                            <?php if($user->email == auth()->user()->email): ?>
                                <td class="text-center"><?php echo e($user->Profile->userType ? 'admin' : 'user'); ?> ( you )</td>
                            <?php else: ?>
                                <td class="text-center">

                                    <form action="<?php echo e(route('saveProm')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>

                                        <select name="prom" id="prom" class="text-dark">
                                            <option value="<?php echo e($user->Profile->userType ? 1 : 0); ?>" selected><?php echo e($user->Profile->userType ? 'admin' : 'user'); ?></option>
                                            <option value="<?php echo e($user->Profile->userType ? 0 : 1); ?>"><?php echo e($user->Profile->userType ? 'user' : 'admin'); ?></option>
                                        </select>

                                        <button id="sub" type="submit" hidden></button>
                                        <input type="text" name="id" value="<?php echo e($user->id); ?>" hidden>
                                        <script>document.getElementById('prom').addEventListener('change',function(){document.getElementById('sub').click();})</script>
                                    </form>

                                </td>
                            <?php endif; ?>

                        <?php else: ?>
                            <td class="text-center">not available</td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="d-flex justify-content-center">
            <div>Not found any users</div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/livewire/config.blade.php ENDPATH**/ ?>