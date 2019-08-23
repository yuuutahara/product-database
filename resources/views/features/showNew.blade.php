@extends('layouts.app')

@section('content')
    <h1>New Feature</h1>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::model($feature, ['route' => 'features.store']) !!}
                <div class="form-group">
                    {!! Form::label('feature', 'New Feature') !!}
                    {!! Form::text('feature', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@endsection