@extends('layouts.app')

@section('content')
    @if (Auth::check())
        
        <div class="container text-center center jumbotron">
            <div class="text-center">
                <h1 style="font-size: 80px; padding: 50px;">Product database</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-default">
                        <a href="{{route('list.get')}}"><i class="far fa-list-alt fa-7x"></i></a>
                    </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-default">
                        <a href="{{route('input.get')}}"><i class="fas fa-pencil-alt fa-7x"></i></a>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    {!! link_to_route('list.get', 'List', [], ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
                <div class="col-6">
                    {!! link_to_route('input.get', 'Input', [], ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
            </div>
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

