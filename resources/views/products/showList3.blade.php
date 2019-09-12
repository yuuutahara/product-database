@extends('layouts.app')

@section('content')
    <h1>List</h1>
    <h2>No.{{ $product1->number }}, No.{{ $product2->number }} &...</h2>
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
                            <a href="{{route('featureList.get', ['id' => $feature->id]) }}">{{ $feature->feature }}</a>
                        @endforeach
                    </td>
                    <td>
                        {!! link_to_route('get3.get', 'Get', ['id' => $product->id], ['class' => 'btn btn-primary']) !!}
                    </td>
                    <td>
                        {!! link_to_route('edit.get', 'Edit', ['id' => $product->id], ['class' => 'btn btn-success']) !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection