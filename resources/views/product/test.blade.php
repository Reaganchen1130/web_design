@extends('backpack::layout')

@section('content')
<div class="container">
    <form method="POST" action="product" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="type" class="col-md-2 col-form-label text-md-right">{{ __('type') }}</label>

            <div class="col-md-6">
                <input id="type" type="text" class="form-control" name="type" required autocomplete="type" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="brand" class="col-md-2 col-form-label text-md-right">{{ __('brand') }}</label>

            <div class="col-md-6">
                <input id="brand" type="text" class="form-control" name="brand" required autocomplete="brand" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="number" class="col-md-2 col-form-label text-md-right">{{ __('number') }}</label>

            <div class="col-md-6">
                <input id="number" type="text" class="form-control" name="number" required autocomplete="number" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="photo" class="col-md-2 col-form-label text-md-right">{{ __('photo') }}</label>

            <div class="col-md-6">
                <input id="photo" type="file" class="form-control" name="photo" required autocomplete="photo" autofocus>
            </div>
        </div>
        <div class="form-group row">
                <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('description') }}</label>
    
                <div class="col-md-6">
                    <input id="description" type="text" class="form-control" name="description" required autocomplete="description" autofocus>
                </div>
            </div>

        <div class="form-group row justify-content-center">
            <div class="col-md-4 ">
                <button type="submit" class="btn btn-primary">
                    {{ __('新增') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection