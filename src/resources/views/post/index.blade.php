@extends('layouts.app')

@section('index')
    <section class="ml-20 mt-10">
        @foreach ($posts as $post)
            <div class="mb-20">
                <div class="flex items-center">
                    <img class="mr-2 w-11" src="{{ asset('img/user_icon.svg') }}" alt="">
                    <p>{{ $post->user->name }}</p>
                </div>
                <div class="w-96 p-5 m-4 bg-slate-200 rounded-lg">
                    <p>{{ $post->comment }}</p>
                </div>
            </div>
        @endforeach
    </section>
@endsection
