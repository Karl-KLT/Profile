@extends('layouts.app')
@section('container')
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">{{ $anime->getTitle() }}</h4>
    </div>
    <div class="container-fluid mt-4 d-flex justify-content-between">
        <div class="d-flex">
            {{-- image --}}
            <div>
                <img style="height: 160px;width: 140px" class="rounded" src="{{ $anime->getImages()->getJpg()->getImageUrl() }}">
            </div>
            {{-- name/ep/desc --}}
            <div class="ms-2">
                <div class="my-2">
                    <div class="fw-bold mt-2 underline" style="letter-spacing: 1px">{{ $anime->getTitle() }}</div>
                </div>


                <div class="my-2">
                    <span class="fw-bold">Rank:</span>
                    {{ $anime->getRank() }}
                </div>


                <div class="my-2">
                    <span class="fw-bold">Episodes:</span>
                    {{ $anime->getEpisodes() }}
                </div>

                <div class="my-2">
                    <i class='bx bxs-star'></i>
                    {{ $anime->getScore() }}
                </div>

            </div>
        </div>
        <div>
            <iframe class="rounded" allow="fullscreen" src="{{ $anime->getTrailer()->getEmbedUrl() }}"></iframe>
        </div>
    </div>

    <div class="container-fluid mt-2">
        <div class="fw-bold">Desc:</div>
        <div class="px-3">
            {{ $anime->getSynopsis() }}
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="fw-bold">Episodes:</div>
        <div class="px-3">
            @forelse ($episodes as $episode)
                <a href="{{ $episode->getUrl() }}" class="badge bg-primary p-2 m-1 cursor-pointer">{{ $episode->getEpisode() }}</a>
            @empty
                <div class="badge bg-primary p-2 cursor-pointer">not found any episode</div>
            @endforelse
        </div>
    </div>
@endsection
