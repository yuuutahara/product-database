@extends('layouts.app')

@section('content')
    <h1>Get</h1>
    <table class="table table-striped">
        <tr>
            <td>No.</td>
            <td>{{ $product1->number }}</td>
            <td>{{ $product2->number }}</td>
            <td>{{ $products->number }}</td>
        </tr>
        <tr>
            <td>PropertyA</td>
            <td>{{ $product1->propertyA }}</td>
            <td>{{ $product2->propertyA }}</td>
            <td>{{ $products->propertyA }}</td>
        </tr>
        <tr>
            <td>PropertyB</td>
            <td>{{ $product1->propertyB }}</td>
            <td>{{ $product2->propertyB }}</td>
            <td>{{ $products->propertyB }}</td>
        </tr>
        <tr>
            <td>PropertyC</td>
            <td>{{ $product1->propertyC }}</td>
            <td>{{ $product2->propertyC }}</td>
            <td>{{ $products->propertyC }}</td>
        </tr>
        <tr>
            <td>PropertyD</td>
            <td>{{ $product1->propertyD }}</td>
            <td>{{ $product2->propertyD }}</td>
            <td>{{ $products->propertyD }}</td>
        </tr>
        <tr>
            <td>PropertyE</td>
            <td>{{ $product1->propertyE }}</td>
            <td>{{ $product2->propertyE }}</td>
            <td>{{ $products->propertyE }}</td>
        </tr>
        <tr>
            <td>Feature</td>
            <td>{{ $product1->features->implode('feature', ', ') }}</td>
            <td>{{ $product2->features->implode('feature', ', ') }}</td>
            <td>{{ $products->features->implode('feature', ', ') }}</td>
        </tr>
    </table>
    
    <div>
        {!! link_to_route('list.get', 'List', [], ['class' => 'btn btn-primary']) !!}
    </div>
    
@endsection