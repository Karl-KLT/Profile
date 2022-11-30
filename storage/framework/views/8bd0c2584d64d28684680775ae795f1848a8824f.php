
<?php $__env->startSection('container'); ?>
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Animes</h4>
    </div>
    <div class="mt-1">
        <div class="alert alert-info">
            under development
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('animes', [])->html();
} elseif ($_instance->childHasBeenRendered('QENMGUc')) {
    $componentId = $_instance->getRenderedChildComponentId('QENMGUc');
    $componentTag = $_instance->getRenderedChildComponentTagName('QENMGUc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QENMGUc');
} else {
    $response = \Livewire\Livewire::mount('animes', []);
    $html = $response->html();
    $_instance->logRenderedChild('QENMGUc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/Web/sections/Animes/index.blade.php ENDPATH**/ ?>