<div class="mr-60">
    <section class="w-60 h-screen bg-rose-200 absolute top-0">
        <div class="w-full leading-[80px] font-bold text-2xl bg-[#D9D9D9] px-3">
            <img src="{{ asset('img/user_icon.svg') }}" alt="user icon" width="32" class="inline">
            {{ $user }}
        </div>
        <div class="flex flex-col pt-5">
            @foreach ($channels as $channel)
                <a href="{{ route('channel.show', $channel->id) }}"
                    class="block py-3 {{ $channelId === $channel->id ? 'bg-rose-300 font-bold text-2xl pl-3' : 'text-xl pl-8' }}">
                    #{{ $channel->name }}
                </a>
            @endforeach
        </div>
    </section>
</div>
