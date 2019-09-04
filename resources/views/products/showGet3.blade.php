@extends('layouts.app')

@section('content')
    <h1>Get</h1>
    <table class="table table-bordered">
        <tr class="form-group">
            <td>No.</td>
            <td>{{ $number }}</td>
            <td>{{ $number2 }}</td>
            <td>{{ $number3 }}</td>
        </tr>
        <tr class="form-group">
            <td>PropertyA</td>
            <td>{{ $propertyA }}</td>
            <td>{{ $propertyA2 }}</td>
            <td>{{ $propertyA3 }}</td>
        </tr>
        <tr class="form-group">
            <td>PropertyB</td>
            <td>{{ $propertyB }}</td>
            <td>{{ $propertyB2 }}</td>
            <td>{{ $propertyB3 }}</td>
        </tr>
        <tr class="form-group">
            <td>PropertyC</td>
            <td>{{ $propertyC }}</td>
            <td>{{ $propertyC2 }}</td>
            <td>{{ $propertyC3 }}</td>
        </tr>
        <tr class="form-group">
            <td>PropertyD</td>
            <td>{{ $propertyD }}</td>
            <td>{{ $propertyD2 }}</td>
            <td>{{ $propertyD3 }}</td>
        </tr>
        <tr class="form-group">
            <td>PropertyE</td>
            <td>{{ $propertyE }}</td>
            <td>{{ $propertyE2 }}</td>
            <td>{{ $propertyE3 }}</td>
        </tr>
    </table>
@endsection