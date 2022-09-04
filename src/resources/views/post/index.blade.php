@extends('layouts.app')

@section('index')
    <section class="px-20 mt-10">
        @foreach ($posts as $post)
            <div class="mb-20">
                <div class="flex items-center">
                    <img class="mr-2 w-11" src="{{ asset('img/user_icon.svg') }}" alt="">
                    <p>{{ $post->user->name }}</p>
                </div>
                <div class="lg:px-20 mt-5">
                    <div class="w-full p-5 bg-slate-200 rounded-lg">
                        <p>{{ $post->comment }}</p>
                    </div>
                    <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-auto block mt-3">
                            <img src="{{ asset('img/delete_icon.svg') }}" alt="delete btn" width="28">
                        </button>
                    </form>
                    <form action="{{ route('post.edit', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="ml-auto block mt-3">
                            <img src="{{ asset('img/edit.svg') }}" alt="edit btn" width="28">
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
@endsection
