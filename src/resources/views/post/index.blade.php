@extends('layouts.app')

@section('sidebar')
    <x-sidebar :channelId="(int) $channel_id" />
@endsection

@section('index')
    <section class="px-20 mt-10 pb-24 w-[calc(100vw-240px)]" id="posts">
        @foreach ($posts as $post)
            <div class="mb-20">
                <div class="flex items-center">
                    <img class="mr-2 w-11" src="{{ asset('img/user_icon.svg') }}" alt="user icon">
                    <p>{{ $post->user->name }}</p>
                </div>
                <div class="lg:px-20 mt-5">
                    <div class="p-5 bg-slate-200 rounded-lg">
                        <p class="whitespace-pre-line">{{ $post->comment }}</p>
                    </div>
                    <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-auto block mt-3">
                            <img src="{{ asset('img/delete_icon.svg') }}" alt="delete btn" width="28">
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
    <footer class="absolute bottom-0 h-24">
        <form action="{{ route('post.store') }}" method="POST" class="h-full">
            @csrf
            <input type="hidden" name="channel_id" value="{{ $channel_id }}">
            <div class="flex bg-white w-[calc(100vw-240px)] py-5 px-16 shadow-sm h-full">
                <textarea
                    class="resize-none block bg-slate-200 w-full rounded-md h-full border-2 border-slate-200 focus:border-2 focus:border-blue-200 focus:outline-blue-200 focus:outline-offset-0"
                    name="comment"></textarea>
                <button type="submit"
                    class="ml-5 w-28 bg-blue-500 text-white font-bold text-xl rounded-md shadow-md cursor-pointer">
                    <img src="{{ asset('img/send.svg') }}" alt="send" width="36" class="mx-auto">
                </button>
            </div>
        </form>
    </footer>
@endsection
<script>
    const posts = document.getElementById('posts');
    posts.scrollTo(0, 1000);
    console.log(posts);
</script>
