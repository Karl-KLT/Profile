<div>
    <form wire:submit.prevent="SendPost" class="d-flex">
        <div class="w-100">
            <input type="text" wire:model.lazy="text" placeholder="What u think?" class="form-control" required>
        </div>
        <div class="ms-3">
            <input type="submit" value="Send" class="btn btn-outline-dark">
        </div>
    </form>

    @error('text')
        <div class="my-2 alert alert-danger">
            {{ $message }}
        </div>
    @enderror


    <div class="my-2 alert alert-info">
        We still working on this page
    </div>
</div>
