@extends('backpack::layout')

@section('content')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">brand</th>
            <th scope="col">number</th>
        </tr>
    </thead>
    @foreach ($list->chunk(1) as $chunk)
    @foreach ($chunk as $product)
    <tbody>
        <tr>            
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->number }}</td>
            <td><a class="btn btn-outline-success" href="#1" ><i class="fa fa-trash"></i>delete</a></td>
            <td><a class="btn btn-outline-success" href="#1" ><i class="fa fa-pen"></i>edit</a></td>
        </tr>
    </tbody>
    @endforeach
    @endforeach
</table>
@endsection
