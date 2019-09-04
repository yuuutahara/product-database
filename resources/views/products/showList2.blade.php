@extends('layouts.app')

@section('content')
    <h1>List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Registrant</th>
                <th>Feature</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->number }}</td>
                    <td>{{ $product->user->name }}</td>
                    <td>
                    @foreach($product->features as $feature)
                        {{ $feature->feature }}
                    @endforeach
                    </td>
                    <td>
                        {!! Form::open(['route' => ['get2.get', $product->id], 'method' => 'get']) !!}
                            
                            {!! Form::hidden('id2','$product->id') !!}
                            {!! Form::submit('Get', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td>Edit</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection