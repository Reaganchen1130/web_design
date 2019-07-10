@extends('backpack::layout')

@section('content')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">acoount</th>
            <th scope="col">email</th>
            <th scope="col">cellphone</th>
            <th scope="col">address</th>
        </tr>
    </thead>
    @foreach ($user->chunk(1) as $chunk)
    @foreach ($chunk as $product)
    <tbody>
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->account }}</td>
            <td>{{ $product->email }}</td>
            <td>{{ $product->cellphone }}</td>
            <td>{{ $product->address }}</td>
            <td><a class="btn btn-outline-success" href="list/{{$product->id}}"><i class="fa fa-trash"></i>delete</a>
        </tr>
    </tbody>
    @endforeach
    @endforeach
</table>
@endsection