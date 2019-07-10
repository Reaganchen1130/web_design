@extends('backpack::layout')

@section('content')
<div class="container">
    <form method="POST" action="{{route('editproduct')}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" value="{{$data->name}}" name="name" required
                    autocomplete="name" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="type" class="col-md-2 col-form-label text-md-right">{{ __('type') }}</label>

            <div class="col-md-6">
                <input id="type" type="text" class="form-control" value="{{$data->type}}" name="type" required
                    autocomplete="type" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="brand" class="col-md-2 col-form-label text-md-right">{{ __('brand') }}</label>

            <div class="col-md-6">
                <input id="brand" type="text" class="form-control" value="{{$data->brand}}" name="brand" required
                    autocomplete="brand" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="number" class="col-md-2 col-form-label text-md-right">{{ __('number') }}</label>

            <div class="col-md-6">
                <input id="number" type="text" class="form-control" value=" {{$data->number}}" name="number" required
                    autocomplete="number" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="photo" class="col-md-2 col-form-label text-md-right">{{ __('new photo') }}</label>

            <div class="col-md-6">
                <input id="photo" type="file" class="form-control" name="photo" >
            </div>
        </div>
        <div class="form-group row">
            <label for="now_photo" class="col-md-2 col-form-label text-md-right">{{ __('now photo') }}</label>
            <div class="col-md-6">
                <img src="/images/{{$data->photo}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('description') }}</label>

            <div class="col-md-6">
                <input id="description" type="text" class="form-control" value="{{$data->description}}"
                    name="description" required autocomplete="description" autofocus>
            </div>
        </div>
        <input id="id" type="hidden" class="form-control" value="{{$data->id}}" name="id" >
        <div class="form-group row justify-content-center">
            <div class="col-md-4 ">
                <button type="submit" class="btn btn-primary">
                    {{ __('修改') }}
                </button>
            </div>
        </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection