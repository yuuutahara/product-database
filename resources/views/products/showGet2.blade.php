@extends('layouts.app')

@section('content')
    <h1>Get</h1>
    <table class="table table-striped">
        <tr>
            <td>No.</td>
            <td>{{ $product1->number }}</td>
            <td>{{ $products->number }}</td>
        </tr>
        <tr>
            <td>粘度・TI</td>
            <td>{{ $product1->propertyA }}</td>
            <td>{{ $products->propertyA }}</td>
        </tr>
        <tr>
            <td>硬度</td>
            <td>{{ $product1->propertyB }}</td>
            <td>{{ $products->propertyB }}</td>
        </tr>
        <tr>
            <td>硬化条件</td>
            <td>{{ $product1->propertyC }}</td>
            <td>{{ $products->propertyC }}</td>
        </tr>
        <tr>
            <td>接着強度</td>
            <td>{{ $product1->propertyD }}</td>
            <td>{{ $products->propertyD }}</td>
        </tr>
        <tr>
            <td>Tg</td>
            <td>{{ $product1->propertyE }}</td>
            <td>{{ $products->propertyE }}</td>
        </tr>
        <tr>
            <td>Feature</td>
            <td>{{ $product1->features->implode('feature', ', ') }}</td>
            <td>{{ $products->features->implode('feature', ', ') }}</td>
        </tr>
    </table>
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                {!! link_to_route('list.get', 'List', [], ['class' => 'btn btn-primary']) !!}
            </div>
            <div class="col-6">
                {!! link_to_route('list3.get', 'Add', ['id' => $products->id], ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>
@endsection