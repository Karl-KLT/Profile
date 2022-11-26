<div>
    <div>
        <input type="text" wire:loading.attr="disabled" wire:model.lazy="search" placeholder="Search . . . (must ur length = 3 or 2 for min)" class="form-control">
    </div>


    {{-- <div class="m-2 d-flex justify-content-between align-items-center">
        <div>
            <button disabled  class="btn btn-dark">previous</button>
        </div>

        <div class="bg-dark p-1 m-1 rounded w-100 d-flex justify-content-between align-items-center">

            <div>
                <div class="badge bg-primary"></div>
            </div>

            <div class="d-flex">

                <div class="badge bg-primary"></div>

            </div>

            <div>
                <div class="badge bg-primary"></div>
            </div>

        </div>

        <div>
            @if (true)
                <div class="btn btn-dark d-flex align-items-center">
                    <button class="me-2">next</button>
                    <span class="badge bg-primary d-flex align-items-center"></span>
                </div>
            @else
                <div class="btn btn-dark d-flex align-items-center">
                    <button class="me-2">next</button>
                </div>
            @endif
        </div>
    </div> --}}





    {{--








        --}}
    <div wire:loading wire:target="search" class="container-fluid">
        <div class="badge bg-primary">
            Loading . . .
        </div>
    </div>

    <div wire:loading.remove wire:loading.class.remove='row container-fluid mt-2 d-flex justify-content-center' wire:target="search" style="user-select: none;" class="row container-fluid mt-2 d-flex justify-content-center">
        @forelse ($Animes->getResults() as $Anime)
            <div class="m-3 col-md-3 d-flex justify-content-center" style="max-height: auto ">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="{{ $Anime->getImages()->getJpg()->getImageUrl() }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 underline" style="user-select: text">{{ $Anime->getTitle() }}</div>

                        <p class="text-gray-700 text-base">

                            <div>
                                <span class="fw-bold">episodes:</span>
                                {{ $Anime->getEpisodes() }}
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="me-1">
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="fw-bold">
                                    {{ $Anime->getScore() }}
                                </div>
                            </div>
                            {{-- <div>
                                {{ $Anime->getSynopsis() }}
                            </div> --}}
                            {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. --}}
                            {{-- Watch new animes <span class="badge bg-primary cursor-pointer" wire:click='goToAnimes'>Go</span> --}}
                        </p>
                    </div>
                </div>
            </div>

        @empty
            <div class="alert alert-danger fw-bold">not found animes</div>
        @endforelse


    </div>
</div>
