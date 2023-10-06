@extends('layout',['title'=>"DailyDaily"])
<x-navigation></x-navigation>

@section("content")
    <x-countdown></x-countdown>
    <x-searchbar></x-searchbar>
    @foreach ($wordsList as $word)
       <x-words :word="$word"></x-words>
    @endforeach
@endsection