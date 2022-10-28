@extends('layouts.app')
@section('container')
    <div class="alert alert-danger">
        <ul>under devolopment.</ul>
        <li>u will see some mistakes in my site</li>
    </div>

    <div class="pt-3 fw-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">My skills</h4>
    </div>
    <div class="mt-1">
        {{-- ////////////////////////////////////////// --}}
        <div style="user-select: none;" class="container-fluid">
            <livewire:skills />
        </div>
    </div>
@endsection
