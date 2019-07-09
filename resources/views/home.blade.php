@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ Session::get('flash_message') }}</div>
    @endif
    <div class="row justify-content">
        @include('layouts.member_sidebar')
    </div>
</div>
@endsection