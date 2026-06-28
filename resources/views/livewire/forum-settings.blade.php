<div class="flex justify-center pt-2 overflow-scroll h-dvh md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <a href="{{route('forum')}}" class="font-bold text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
              </svg>
        </a>
        <h1 class="mb-3 font-bold text-center">Forum</h1>
        <div class="flex flex-col items-center justify-center gap-2">
            @if(Auth::user()->image === null)
            <img src="/logo/profile.png" alt="" class="w-20 h-20 rounded">
            @else
            <img src="{{url('storage',Auth::user()->image)}}" alt="" class="w-20 h-20 rounded-full">
            @endif
            <p class="font-bold text-white">{{Auth::user()->name}}</p>
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
        <div class="flex flex-col w-full gap-3 " style="padding-bottom: 100px;">

            @forelse ($forums as $forum)
              @livewire('forum-post',['id' => $forum->id])

            @empty
            <div class="flex items-center justify-center w-full">
                <h1 class="text-xl font-bold text-gray-300">No forums found...</h1>
            </div>
            @endforelse
        </div>

        </div>


        {{-- <div class="fixed bottom-0 w-full py-2 bg-white-500 md:w-1/2 ">
            <div class="flex items-center justify-center">
                <a href="{{route('create-forum')}}"  data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="inline-flex items-center justify-center w-10 h-10 font-medium bg-green-600 rounded-full hover:bg-green-700 group focus:ring-4 focus:ring-green-300 focus:outline-none dark:focus:ring-green-800">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                </a>
            </div>
        </div> --}}
    </div>
</div>
