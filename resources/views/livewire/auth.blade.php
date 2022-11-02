<div class="mt-1 d-flex justify-content-center align-items-center">

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>$={{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}




    <form wire:submit.prevent='login' class="d-flex justify-content-center flex-col">
        {{  csrf_field()  }}
        @if($error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endif
        <div>
            <input type="email" class="form-control" placeholder="Email . . ." wire:model.lazy='email' name="email" required>
        </div>

        <div class="mt-1">
            <input type="password" autocomplete="current-password" class="form-control" placeholder="Password . . ." wire:model.lazy='password' name="password" required>
        </div>

        <div class="mt-2">
            <div class="flex justify-content-between">

                <button type="submit" class="btn btn-outline-dark fw-bold" style="letter-spacing: 1px">
                    <div wire:loading.remove wire:target='login'>
                        SignIn
                    </div>
                    <div wire:loading wire:target='login'>
                        <div class="spinner-border"></div>
                    </div>
                </button>

                <a href="{{ route('signUp') }}" class="btn btn-outline-dark fw-bold" style="letter-spacing: 1px">
                    <div>
                        SignUp
                    </div>
                </a>




            </div>
        </div>
    </form>
</div>
