
<?php $__env->startSection('custom-head'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/super-build/ckeditor.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Profile</h4>
    </div>
    <div class="mt-1">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile', [])->html();
} elseif ($_instance->childHasBeenRendered('H11lsao')) {
    $componentId = $_instance->getRenderedChildComponentId('H11lsao');
    $componentTag = $_instance->getRenderedChildComponentTagName('H11lsao');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H11lsao');
} else {
    $response = \Livewire\Livewire::mount('profile', []);
    $html = $response->html();
    $_instance->logRenderedChild('H11lsao', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/admin/index.blade.php ENDPATH**/ ?>