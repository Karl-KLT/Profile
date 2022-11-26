<div>
    <div>
        <input type="text" wire:model.lazy='Search' placeholder="Search . . ." class="form-control">
    </div>

    <div style="user-select: none;" class="row container-fluid mt-2 d-flex justify-content-center">
        @forelse ($TopOfAnimes->getResults() as $TopAnimes)
        {{-- {{ dd($TopAnimes) }} --}}
            <div class="m-3 col-md-3 d-flex justify-content-center" style="max-height: auto ">
                {{-- max-w-sm --}}
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" height="50%" src="{{ $TopAnimes->getImages()->getJpg()->getImageUrl() }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 underline" style="user-select: text">{{ $TopAnimes->getTitle() }}</div>

                        {{-- <p class="text-gray-700 text-base"> --}}
                            {{-- <div class="d-flex align-items-center">
                                <div class="me-1">
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="fw-bold">
                                    {{ $stats->getScores()[10]->getVotes() }}
                                </div>
                            </div> --}}
                            {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. --}}
                            {{-- Watch new animes <span class="badge bg-primary cursor-pointer" wire:click='goToAnimes'>Go</span> --}}
                        {{-- </p> --}}
                    </div>
                </div>
            </div>

        @empty
            <div class="alert alert-danger fw-bold">not found animes</div>
        @endforelse
    </div>
</div>
