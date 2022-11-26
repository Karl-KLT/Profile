<div>

    <div class="mb-3">
        <span>copy Link of your Profile :</span>
        <span wire:click='copySidLink' class="cursor-pointer">
            <i class='bx bxs-copy-alt'></i>
        </span>
    </div>

    <div class="row rounded">

        <div class="col-md-6 flex justify-content-between align-items-center">

            <div>
                <div>

                    <div>
                        <div class="w-100 d-flex justify-content-end">
                            <?php if(getUser()->Profile->Image): ?>
                                <form action="<?php echo e(route('deleteImage')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button class="badge bg-dark me-1">-</button>
                                </form>
                            <?php endif; ?>

                            <button type="submit" id="select_img" class="badge bg-dark">+</button>

                        </div>
                    </div>

                    <form action="<?php echo e(route('saveImage')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div hidden>
                            <input id="fileInput" name="image" accept="image/*" type="file" />
                            <button type="submit" id="subimage"></button>
                        </div>
                    </form>

                </div>
                <div class="border rounded-circle">
                    <img wire:ignore style="width: 155px;height: 120px;border-radius: 100%;" id="img" src="<?php echo e(getUser()->Profile->Image ? asset(getUser()->Profile->Image) : asset('DUser.jpg')); ?>" alt="Profile_image">
                </div>


                <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                document.getElementById('img').src = e.target.result
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    document.addEventListener('DOMContentLoaded',function(){
                        document.getElementById('select_img').onclick = () => {
                            var file = document.getElementById('fileInput');
                            file.click();
                            file.onchange = (event) => {
                                readURL(event.target);
                                document.getElementById('subimage').click()
                            }
                        }
                    })
                </script>
            </div>

            <div class="ms-4 w-100">

                <div class="my-2">
                    <input type="text" wire:model.lazy='Name' placeholder="Name . . ." class="form-control">
                </div>

                <div class="my-2">
                    <input type="text" wire:model.lazy='Bio' placeholder="Bio . . ." class="form-control">
                </div>

                <div class="my-2">
                    <input type="text" wire:model.lazy='localBio' placeholder="Local Bio . . ." class="form-control">
                </div>

            </div>
        </div>


        <div class="col-md-6 my-3">
            <div style="user-select: none;" class="d-flex p-2 firstBox container-fluid justify-content-start w-100 align-items-center">
                <div class="w-100 <?php if(auth()->guard()->check()): ?> py-2 <?php endif; ?>" id="scroll_skills" style="height: auto;max-height: 245px; overflow: auto;">

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('skills', [])->html();
} elseif ($_instance->childHasBeenRendered('l1220681364-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1220681364-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1220681364-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1220681364-0');
} else {
    $response = \Livewire\Livewire::mount('skills', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1220681364-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                </div>
            </div>
        </div>

    </div>

    



    <div class="my-3">

        <input type="text" placeholder="UR Message . . ." wire:model.lazy="Message" class="form-control">
        

    </div>


    <div class="text-end mb-2">

        <button class="btn btn-outline-dark" type="submit" wire:click='$emit("Save")'>
            <div wire:loading.remove>
                Save
            </div>
            <div wire:loading>
                <div class="spinner-border"></div>
            </div>
        </button>

    </div>
    


</div>
<?php /**PATH C:\Users\Administrator\Desktop\Profile\resources\views/livewire/profile.blade.php ENDPATH**/ ?>