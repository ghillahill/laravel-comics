@extends('layouts.app')

@section('content')

    <div class="jumbotron"></div>

    <section class="dc-series">
        <div class="container">

            <h1>Current Series</h1>

            <div class="cards">
                @foreach ($series as $element)
                    <div class="dc-card">
                        <div class="dc-card-thumb">
                            <img src="{{$element['thumb']}}" alt="{{$element['series']}}">
                        </div>
                        <div class="dc-card-name">
                            <p>{{$element['series']}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </section>

@endsection
