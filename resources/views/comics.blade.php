@extends('layouts.main')

@section('page-title')
    Comics
@endsection

@section('page-content')

@include('partials.jumbotron')

    <section class="comics py-5">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                <div class=" col-6 col-md-3 col-lg-2">
                    <a href="{{route('show', $loop->index)}}">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </a>
                    <h4>{{ $comic['series']}}</h4>
                </div>                    
                @endforeach 
            </div>
        </div>
    </section>    
@endsection