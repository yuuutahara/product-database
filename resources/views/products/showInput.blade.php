@extends('layouts.app')

@section('content')
    <h1>Input</h1>
    <div>
        {!! Form::model($product, ['route' => 'products.store']) !!}
        <table class="table table-bordered">
            <tr class="form-group">
                <td>
                    {!! Form::label('number', 'No.') !!}
                </td>
                <td>
                    {!! Form::text('number', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    {!! Form::label('feature_id', 'Feature1') !!}
                </td>
                <td>
                    {!! Form::text('feature_id', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    {!! Form::label('feature_id', 'Feature2') !!}
                </td>
                <td>
                    {!! Form::text('feature_id', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    {!! Form::label('feature_id', 'Feature3') !!}
                </td>
                <td>
                    {!! Form::text('feature_id', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    {!! Form::label('propertyA', 'PropertyA') !!}
                </td>
                <td>
                    {!! Form::text('propertyA', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    {!! Form::label('propertyB', 'PropertyB') !!}
                </td>
                <td>
                    {!! Form::text('propertyB', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    {!! Form::label('propertyC', 'PropertyC') !!}
                </td>
                <td>
                    {!! Form::text('propertyC', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    {!! Form::label('propertyD', 'PropertyD') !!}
                </td>
                <td>
                    {!! Form::text('propertyD', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    {!! Form::label('propertyE', 'PropertyE') !!}
                </td>
                <td>
                    {!! Form::text('propertyE', null, ['class' => 'form-control']) !!}
                </td>
            </tr>
        </table>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    
        <div class="text-center">
            {!! link_to_route('allFeatures.get', 'All Features', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    
    
        <div class="text-center">
            {!! link_to_route('newFeature.get', 'New Feature', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    
@endsection