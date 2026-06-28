<div class="flex justify-center pt-2 overflow-scroll h-dvh md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <div class="flex justify-between w-full">
            <a href="{{route('forum')}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
            <a href="{{route('messages',['reciever'=>$id,'sender'=>Auth::user()->id])}}" class="font-bold text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                  </svg>
            </a>
        </div>

        <h1 class="mb-3 font-bold text-center">Forum</h1>
        <div class="flex flex-col items-center justify-center gap-2">

            @if($user && $user->image !== null)
            <img src="{{url('storage', $user->image)}}" alt="" class="w-20 h-20 rounded-full">
            @else
            <img src="/logo/profile.png" alt="" class="w-20 h-20 rounded">

            @endif
            @if($user)
            <p class="font-bold text-white">{{$user->name}}</p>
            @endif
        </div>
        <div class="w-full ">
            <form wire:submit='searchAll'>
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>

                    <input type="text" wire:model="search" wire:keydown.enter="searchAll" id="default-search" class="block w-full h-8 py-4 pl-5 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..."  />
                    <button type="submit"  wire:click="$refresh" class="text-white absolute end-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
                </div>
            </form>
            {{-- <input type="text" wire:model.live="search" id="default-search" class="block w-full h-8 py-4 pl-5 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..."  /> --}}

        </div>
        <div  wire:loading>
            <p class="text-xl font-bold text-center text-gray-300">Searching...</p>
        </div>
        <div class="flex flex-col w-full gap-3 pb-5">

            @forelse ($forums as $forum)
              @livewire('forum-post',['id' => $forum->id])

            @empty
            <div class="flex items-center justify-center w-full">
                <h1 class="text-xl font-bold text-gray-300">No forums found...</h1>
            </div>
            @endforelse
        </div>
        </div>
    </div>
</div>

