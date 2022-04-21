@extends('layouts.standard')

@section('metaTitle', '● MovieDB')

@section('main')
<main>
    @foreach($movies as $element)
        @dump($element)
    @endforeach
</main>
@endsection