@extends('layouts.app')

@section('index')
      @foreach ($channels as $channel)
            <p>{{ $channel -> name }}</p>
      @endforeach
@endsection

