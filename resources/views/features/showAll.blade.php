@extends('layouts.app')

@section('content')
    <h1>All Features</h1>
    @foreach ($features as $feature)
        <div>
            {{ $feature->feature }}
        </div>
    @endforeach
@endsection