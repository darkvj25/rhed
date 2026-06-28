<div>
<div class="relative flex justify-center pt-2 h-dvh md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">

        <a href="{{route('profile')}}" class="font-bold text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
              </svg>
        </a>
        <h2 class="mb-3 font-bold text-center text-white">Notification</h2>
        <div class="flex flex-col gap-2" >

            @forelse ($forums as $forum)
                @livewire('notication-item', ['id' => $forum->id])
            @empty
            <div >
                <h1 class="text-center">Empty</h1>
            </div>

            @endforelse

        </div>
    </div>
</div>
</div>
