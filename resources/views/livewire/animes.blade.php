<div>
    {{-- leading tem for use --}}

    {{-- <div class="border border-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
        <div class="animate-pulse flex space-x-4">
          <div class="rounded-full bg-slate-700 h-10 w-10"></div>
          <div class="flex-1 space-y-6 py-1">
            <div class="h-2 bg-slate-700 rounded"></div>
            <div class="space-y-3">
              <div class="grid grid-cols-3 gap-4">
                <div class="h-2 bg-slate-700 rounded col-span-2"></div>
                <div class="h-2 bg-slate-700 rounded col-span-1"></div>
              </div>
              <div class="h-2 bg-slate-700 rounded"></div>
            </div>
          </div>
        </div>
    </div> --}}



    {{-- search --}}
    <div>
        <input type="text" wire:loading.attr="disabled" wire:model.lazy="search" placeholder="Search . . . (must ur length = 3 or 2 for min)" class="form-control">
    </div>

    {{-- pre , next btns --}}
    <div class="m-2 d-flex justify-content-between align-items-center">
        <div wire:click='previous'>
            <button @if($page == 1) disabled @endif class="btn btn-dark">previous</button>
        </div>

        <div class="bg-dark p-1 overflow-scroll hide-scroll m-1 rounded w-100 d-flex justify-content-start align-items-center">

            @for ($i = 1; $i <= $page; $i++)
                <div class='me-1'>
                    <div wire:click='select({{ $i }})' class="badge cursor-pointer bg-primary">{{ $i }}</div>
                </div>
            @endfor

        </div>

        <div wire:click='next({{ $Animes->HasNextPage() }})' class="d-flex">
            <button @if(!$Animes->HasNextPage()) disabled @endif class="btn btn-dark">next</button>
        </div>
    </div>
    {{--








        --}}
    <div wire:loading wire:target="search,previous,next,select" class="container-fluid">

        <div class="container-fluid my-2 d-flex justify-content-start">
            <div class="d-flex animate-pulse">
                {{-- image --}}
                <div>
                    <div style="height: 160px;width: 140px" class="rounded bg-slate-700 h-10 w-10"></div>
                </div>
                {{-- name/ep/desc --}}
                <div class="ms-2 mt-1">
                    <div class="my-2">
                        <div style="width: 150px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 70px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 30px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid my-2 d-flex justify-content-start">
            <div class="d-flex animate-pulse">
                {{-- image --}}
                <div>
                    <div style="height: 160px;width: 140px" class="rounded bg-slate-700 h-10 w-10"></div>
                </div>
                {{-- name/ep/desc --}}
                <div class="ms-2 mt-1">
                    <div class="my-2">
                        <div style="width: 150px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 70px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 30px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid my-2 d-flex justify-content-start">
            <div class="d-flex animate-pulse">
                {{-- image --}}
                <div>
                    <div style="height: 160px;width: 140px" class="rounded bg-slate-700 h-10 w-10"></div>
                </div>
                {{-- name/ep/desc --}}
                <div class="ms-2 mt-1">
                    <div class="my-2">
                        <div style="width: 150px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 70px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                    <div class="my-2">
                        <div style="width: 30px" class="h-2 bg-slate-700 rounded mb-3"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div wire:loading.remove wire:loading.class.remove='row container-fluid mt-2 d-flex justify-content-center' wire:target="search,previous,next,select" class="row container-fluid mt-2 d-flex justify-content-center">
        {{-- {{ dd($Animes) }} --}}
        @forelse ($Animes->getResults() as $Anime)
            {{-- if user used search --}}
            <div class="container-fluid my-2 d-flex justify-content-between">
                <div class="d-flex">
                    {{-- image --}}
                    <div>
                        <img style="height: 160px;width: 140px" class="rounded" src="{{ $Anime->getImages()->getJpg()->getImageUrl() }}">
                    </div>
                    {{-- name/ep/desc --}}
                    <div class="ms-2">
                        <div class="my-2">
                            <div class="fw-bold mt-2 underline" style="letter-spacing: 1px">{{ $Anime->getTitle() }}</div>
                        </div>

                        <div class="my-2">
                            <span class="fw-bold">Episodes:</span>
                            {{ $Anime->getEpisodes() }}
                        </div>

                        <div class="my-2">
                            <i class='bx bxs-star'></i>
                            {{ $Anime->getScore() }}
                        </div>

                        <div>
                            <button class="badge bg-primary p-2 cursor-pointer" wire:click='RedirectToAnime({{ $Anime->getMalId() }})'>more info</button>
                        </div>

                    </div>
                </div>
                {{-- some info or click to show full information about this anime --}}
                <div></div>
            </div>
            {{-- if user not used search --}}

            {{-- <div class="m-3 col-md-3 d-flex justify-content-center" style="max-height: auto ">
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
                        {{-- </p> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            {{-- else --}}


        @empty
            <div class="alert alert-danger fw-bold">not found animes</div>
        @endforelse


    </div>
</div>
