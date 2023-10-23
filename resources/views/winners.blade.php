@extends('layout',['title'=>"DailyDaily"])
<x-navigation></x-navigation>

@section("content")
    <x-countdown></x-countdown>
    
    @if($errors->any())
    <h2>{{$errors->first()}}</h2>
    @else
    <x-searchbar></x-searchbar>
    @endif
    
    @foreach ($wordsList as $word)
       <x-words :word="$word"></x-words>
    @endforeach
    
@endsection