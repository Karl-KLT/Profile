@extends('layouts.app')
@section('custom-head')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/super-build/ckeditor.js"></script>
@endsection
@section('container')
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Profile</h4>
        <br>
        <div class="mb-3">
            <span>Link of your Profile -> </span>
            {{ Str::substr(env('APP_URL'),-1) == '/' ? env('APP_URL') : env('APP_URL').'/' }}User/{{ getUser()->Profile->USER_SID }}
        </div>
        <hr>
    </div>
    <div class="mt-1">
        <livewire:profile />
    </div>
@endsection
