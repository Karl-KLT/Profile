<div>

    <div wire:loading class="w-100 d-flex justify-content-center">
        <div wire:loading class="spinner-border text-primary mt-5"></div>
    </div>

    <div wire:loading.remove>
        @yield('container')
    </div>

</div>
