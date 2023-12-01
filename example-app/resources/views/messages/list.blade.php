@extends('layouts.app')

@section('content')

<h2>Hello {{$name}}</h2>

@foreach($messages as $message)
  <p><a href="/messages/{{ $message->id }}">{{ $message->name }}</a></p>
@endforeach

@endsection
