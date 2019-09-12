@extends('layouts.app')

@section('content')
    <h1>Get</h1>
    <table class="table table-striped">
        <tr>
            <td>No.</td>
            <td>{{ $products->number }}</td>
            
        </tr>
        <tr>
            <td>PropertyA</td>
            <td>{{ $products->propertyA }}</td>
        </tr>
        <tr>
            <td>PropertyB</td>
            <td>{{ $products->propertyB }}</td>
        </tr>
        <tr>
            <td>PropertyC</td>
            <td>{{ $products->propertyC }}</td>
        </tr>
        <tr>
            <td>PropertyD</td>
            <td>{{ $products->propertyD }}</td>
        </tr>
        <tr>
            <td>PropertyE</td>
            <td>{{ $products->propertyE }}</td>
        </tr>
        <tr>
            <td>Feature</td>
            <td>{{ $products->features->implode('feature', ', ') }}</td>
        </tr>
    </table>
    <div class="container">
        <div class="row">
            <div class="col-6">
                {!! link_to_route('list.get', 'List', [], ['class' => 'btn btn-primary']) !!}
            </div>
            <div class="col-6">
                {!! link_to_route('list2.get', 'Add', ['id' => $products->id], ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>
@endsection