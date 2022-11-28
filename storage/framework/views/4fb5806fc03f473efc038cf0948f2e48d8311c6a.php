
<?php $__env->startSection('container'); ?>
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Sections</h4>
    </div>
    <div class="mt-1">
        
        <div style="user-select: none;" class="container-fluid">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sections', [])->html();
} elseif ($_instance->childHasBeenRendered('YG7Utjh')) {
    $componentId = $_instance->getRenderedChildComponentId('YG7Utjh');
    $componentTag = $_instance->getRenderedChildComponentTagName('YG7Utjh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YG7Utjh');
} else {
    $response = \Livewire\Livewire::mount('sections', []);
    $html = $response->html();
    $_instance->logRenderedChild('YG7Utjh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/Web/sections/Sections.blade.php ENDPATH**/ ?>