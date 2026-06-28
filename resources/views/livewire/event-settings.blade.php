<div class="flex justify-center pt-3 overflow-scroll md:items-center md:justify-center h-dvh">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <div class="flex items-center justify-between w-full ">
            <a href="{{route('event')}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
        </div>

        <h1 class="mb-3 font-bold text-center text-white">Events</h1>
        <div class="flex flex-col items-center justify-center gap-2">
            @if(Auth::user()->name === null)
            <img src="/logo/profile.png" alt="" class="w-20 h-20 rounded">
            @else
            <img src="{{url('storage',Auth::user()->image)}}" alt="" class="w-20 h-20 rounded-full">
            @endif
            <p class="font-bold text-white">{{Auth::user()->name}}</p>
        </div>
        <div class="flex items-center w-full gap-2">
            <form wire:submit='searchAll' class="w-full" >
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>

                    <input type="text" wire:model="search" wire:keydown.enter="searchAll"  id="default-search" class="block w-full h-8 py-4 pl-5 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..."  />
                    <button type="submit"   class="text-white absolute end-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
                </div>
            </form>
        </div>
        <div>
            <ul class="flex justify-between w-full">
                <p  class="flex justify-center w-full text-white border-b-2 border-gray-300">
                   Events
                </p>

            </ul>
        </div>
        <div  wire:loading>
            <p class="text-xl font-bold text-center text-gray-300">Searching...</p>
        </div>
        <div class="flex flex-col gap-3 "style="padding-bottom: 100px;">


            @forelse ($events as $event)
            <div class="flex justify-center w-full ">
                <div class="relative block w-full max-w-lg px-6 py-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="flex justify-center w-full mb-3 bg-gray-500">
                        <img class="cover" src="{{url('storage',$event->image)}}" alt="">
                    </div>
                    <a href="">
                        <div class="mt-2 text-dark">
                            {!!$event->post!!}
                         </div>
                    </a>
                    @if (Auth::check() && Auth::user()->id === $event->user_id && (Auth::user()->role === 'admin' || Auth::user()->role === 'org'))
                    <div class="absolute right-0 top-1">
                        <button id="dropdownMenuIconButton{{$event->id}}" data-dropdown-toggle="dropdownDots{{$event->id}}" data-dropdown-placement="bottom-start" class="inline-flex items-center self-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600" type="button">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                               <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                            </svg>
                         </button>
                    </div>
                    @endif
                </div>

           </div>
                <div id="dropdownDots{{$event->id}}" class="z-10 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">

                    <li class="mb-2">
                        <a href={{route('edit-event',['id'=>$event->id])}} class="block px-4 py-2 text-center bg-green-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <button data-modal-target="popup-modal{{$event->id}}" data-modal-toggle="popup-modal{{$event->id}}" class="block w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                            Delete
                            </button>

                        </li>
                    </ul>
                </div>
                <div id="popup-modal{{$event->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full p-4">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{$event->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 text-center md:p-5">
                                <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete event?</h3>
                                <button   wire:click="delete({{$event->id}})" data-modal-hide="popup-modal{{$event->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mb-2">
                                    Yes, I'm sure
                                </button>
                                <button data-modal-hide="popup-modal{{$event->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <div class="flex items-center justify-center w-full">
                    <h1 class="text-xl font-bold text-gray-300">No events found...</h1>
                </div>

                @endforelse
        </div>
    </div>
</div>

