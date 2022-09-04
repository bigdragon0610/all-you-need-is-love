<div class="mr-60">
    <section class="w-60 h-screen bg-[#FFD4D4] absolute top-0">
        <div class="w-full leading-[80px] font-bold text-2xl bg-[#D9D9D9] px-3">
            <img src="{{ asset('img/user_icon.svg') }}" alt="user icon" width="32" class="inline">
            {{ $user }}
        </div>
        <div class="flex flex-col ml-8 gap-3 pt-5">
            @foreach ($channels as $channel)
                <a href="{{ route('channel.show', $channel->id) }}" class="block text-xl">
                    #{{ $channel->name }}
                </a>
            @endforeach
        </div>
    </section>
</div>
