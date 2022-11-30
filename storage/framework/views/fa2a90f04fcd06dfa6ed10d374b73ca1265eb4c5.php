

<?php $__env->startSection('container'); ?>
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Login</h4>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth', [])->html();
} elseif ($_instance->childHasBeenRendered('gBgDNia')) {
    $componentId = $_instance->getRenderedChildComponentId('gBgDNia');
    $componentTag = $_instance->getRenderedChildComponentTagName('gBgDNia');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gBgDNia');
} else {
    $response = \Livewire\Livewire::mount('auth', []);
    $html = $response->html();
    $_instance->logRenderedChild('gBgDNia', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/Auth/index.blade.php ENDPATH**/ ?>