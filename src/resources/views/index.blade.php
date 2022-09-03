@extends('layouts.app')

@section('index')
      @foreach ($channels as $channel)
            <a href="{{ route('channel.show', $channel -> id ) }}">{{ $channel -> name }}</a><br>
      @endforeach
@endsection

