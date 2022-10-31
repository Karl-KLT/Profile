<div class="mt-1 d-flex justify-content-center align-items-center">


    <form wire:submit.prevent='Reg' class="d-flex justify-content-center flex-col">

        <div>
            <input type="email" class="form-control" placeholder="Email . . ." wire:model.lazy='email' required>
        </div>
        @error('email') <span class="error alert alert-danger my-1">{{ $message }}</span> @enderror

        <div class="mt-1">
            <input type="password" autocomplete="new-password" class="form-control" placeholder="Password . . ." wire:model.lazy='password' required>
        </div>
        @error('password') <span class="error alert alert-danger my-1">{{ $message }}</span> @enderror


        <div class="mt-1">
            <input type="password" autocomplete="new-password" class="form-control" placeholder="CPassword . . ." wire:model.lazy='Cpassword' required>
        </div>
        @error('Cpassword') <span class="error alert alert-danger my-1">{{ $message }}</span> @enderror

        <div class="mt-2">
            <div class="flex justify-content-between">

                <button type="submit" class="btn btn-outline-dark fw-bold" style="letter-spacing: 1px">
                    <div wire:loading.remove wire:target='Reg'>
                        Register
                    </div>
                    <div wire:loading wire:target='Reg'>
                        <div class="spinner-border"></div>
                    </div>
                </button>

                <a href="{{ route('login') }}" class="btn btn-outline-dark fw-bold" style="letter-spacing: 1px">
                    <div>
                        Login
                    </div>
                </a>




            </div>
        </div>
    </form>
</div>
