
<?php $__env->startSection('container'); ?>
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Config</h4>
    </div>
    <div class="mt-1">
        
        <div style="user-select: none;" class="container-fluid">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('config', [])->html();
} elseif ($_instance->childHasBeenRendered('b1hFmdl')) {
    $componentId = $_instance->getRenderedChildComponentId('b1hFmdl');
    $componentTag = $_instance->getRenderedChildComponentTagName('b1hFmdl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('b1hFmdl');
} else {
    $response = \Livewire\Livewire::mount('config', []);
    $html = $response->html();
    $_instance->logRenderedChild('b1hFmdl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/Web/config.blade.php ENDPATH**/ ?>