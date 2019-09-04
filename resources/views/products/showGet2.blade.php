@extends('layouts.app')

@section('content')
    <h1>Get</h1>
    <table class="table table-bordered">
        <tr class="form-group">
            <td>No.</td>
            <td>{{ $number }}</td>
            <td>{{ $number2 }}</td>
            <td>{!! link_to_route('list3.get', 'List', ['id' => $products->id,'id2' => $products->id], ['class' => 'btn btn-lg btn-primary']) !!}</td>
        </tr>
        <tr class="form-group">
            <td>PropertyA</td>
            <td>{{ $propertyA }}</td>
            <td>{{ $propertyA2 }}</td>
            <td></td>
        </tr>
        <tr class="form-group">
            <td>PropertyB</td>
            <td>{{ $propertyB }}</td>
            <td>{{ $propertyB2 }}</td>
            <td></td>
        </tr>
        <tr class="form-group">
            <td>PropertyC</td>
            <td>{{ $propertyC }}</td>
            <td>{{ $propertyC2 }}</td>
            <td></td>
        </tr>
        <tr class="form-group">
            <td>PropertyD</td>
            <td>{{ $propertyD }}</td>
            <td>{{ $propertyD2 }}</td>
            <td></td>
        </tr>
        <tr class="form-group">
            <td>PropertyE</td>
            <td>{{ $propertyE }}</td>
            <td>{{ $propertyE2 }}</td>
            <td></td>
        </tr>
    </table>
@endsection