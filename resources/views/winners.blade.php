@extends('layout',['title'=>"DailyDaily"])
<x-navigation></x-navigation>

@section("content")
    <x-countdown></x-countdown>
    
    @foreach ($winners as $winner)
       <x-winner :word="$winner"></x-winner>
    @endforeach
    
@endsection