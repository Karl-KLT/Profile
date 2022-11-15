@extends('layouts.app')
@section('container')
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Config</h4>
    </div>
    <div class="mt-1">
        {{-- ////////////////////////////////////////// --}}
        <div style="user-select: none;" class="container-fluid">
            <livewire:config />
        </div>
    </div>
@endsection
