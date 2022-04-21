@extends('layouts.standard')

@section('metaTitle', '● MovieDB')

@section('main')
<main>
    @foreach($movies as $element)
        <div class="card">
            <div class="movie-title">{{ $element['title'] }}</div>
            <div class="movie-original-title">({{ $element['original_title'] }})</div>
            <div class="movie-nationality">Nationality: {{ $element['nationality'] }}</div>
            <div class="movie-year">Year: {{ $element['date'] }}</div>
            <div class="movie-vote">Vote: {{ $element['vote']}}</div>
        </div>
    @endforeach
</main>
@endsection

