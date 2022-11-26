<div>
    <div class="d-flex justify-content-start">
        <div class="m-3">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('assets/images/anime_Cover.jpg') }}">
                <div class="px-6 py-4">
                    <div class="d-flex">
                        <div class="font-bold text-xl mb-2 underline">
                            Animes
                        </div>
                        <div class="ms-2">
                            <span class="badge bg-info">New</span>
                            <span class="badge bg-danger">underDev</span>
                            <span class="badge bg-success">1.0</span>
                        </div>
                    </div>
                    <p class="text-gray-700 text-base">
                        {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. --}}
                        Watch new ? <span class="badge bg-primary cursor-pointer" wire:click='goToAnimes'>Go</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
