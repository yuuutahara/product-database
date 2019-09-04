@extends('layouts.app')

@section('content')
    <h1>Edit No.{{ $product->number }}</h1>
    <div>
        {!! Form::model($product, ['route' => ['products.update', $product->id],'method' => 'put']) !!}
        <table class="table table-bordered">
            <tr class="form-group">
                <td>{!! Form::label('number', 'No.') !!}</td>
                <td>{!! Form::text('number', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyA', 'PropertyA') !!}</td>
                <td>{!! Form::text('propertyA', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyB', 'PropertyB') !!}</td>
                <td>{!! Form::text('propertyB', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyC', 'PropertyC') !!}</td>
                <td>{!! Form::text('propertyC', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyD', 'PropertyD') !!}</td>
                <td>{!! Form::text('propertyD', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyE', 'PropertyE') !!}</td>
                <td>{!! Form::text('propertyE', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('addFeature1', 'Feature1') !!}</td>
                <td>{!! Form::select('addFeature1',$addFeature1, null, ['placeholder' => 'Pick a feature...']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('addFeature2', 'Feature2') !!}</td>
                <td>{!! Form::select('addFeature2',$addFeature2, null, ['placeholder' => 'Pick a feature...']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('addFeature3', 'Feature3') !!}</td>
                <td>{!! Form::select('addFeature3',$addFeature3, null, ['placeholder' => 'Pick a feature...']) !!}</td>
            </tr>
        </table>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    
    <div class="container text-center">
        <div class="row">
            <div class="text-center col-4">
                {!! link_to_route('allFeatures.get', 'All Features', [], ['class' => 'btn btn-success']) !!}
            </div>
        
            <div class="text-center col-4">
                {!! link_to_route('newFeature.get', 'New Feature', [], ['class' => 'btn btn-secondary']) !!}
            </div>
            
            <div class="text-center col-4">
                {!! Form::model($product, ['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
@endsection