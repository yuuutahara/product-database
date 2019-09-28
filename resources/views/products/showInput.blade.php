@extends('layouts.app')

@section('content')
    <h1>Input</h1>
    <div>
        {!! Form::model($product, ['route' => 'products.store']) !!}
        <table class="table table-bordered">
            <tr class="form-group">
                <td>{!! Form::label('number', 'No.') !!}</td>
                <td>{!! Form::text('number', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyA', '粘度・TI') !!}</td>
                <td>{!! Form::text('propertyA', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyB', '硬度') !!}</td>
                <td>{!! Form::text('propertyB', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyC', '硬化条件') !!}</td>
                <td>{!! Form::text('propertyC', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyD', '接着強度') !!}</td>
                <td>{!! Form::text('propertyD', null, ['class' => 'form-control']) !!}</td>
            </tr>
            <tr class="form-group">
                <td>{!! Form::label('propertyE', 'Tg') !!}</td>
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
            <div class="text-center col-6">
                {!! link_to_route('allFeatures.get', 'All Features', [], ['class' => 'btn btn-success']) !!}
            </div>
        
            <div class="text-center col-6">
                {!! link_to_route('newFeature.get', 'New Feature', [], ['class' => 'btn btn-secondary']) !!}
            </div>
        </div>
    </div>
    
@endsection