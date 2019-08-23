@extends('layouts.app')

@section('content')
    @if (Auth::check())
        
            <div class="text-center">
                {!! link_to_route('list.get', 'List', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        
            <div class="text-center">
                {!! link_to_route('get.get', 'Get', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        
            <div class="text-center">
                {!! link_to_route('input.get', 'Input', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Product database</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
