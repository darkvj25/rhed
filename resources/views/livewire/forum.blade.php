<div class="relative flex justify-center pt-2 overflow-scroll  md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <a href="/" class="font-bold text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
              </svg>
        </a>
        <h1 class="mb-3 font-bold text-center">Forum</h1>
        <div class="flex items-center w-full gap-2">
            <form wire:submit='searchAll' class="w-full">
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
            <a href="{{route('forum-settings')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                  </svg>
            </a>

        </div>
        <div>
            <ul class="flex justify-between w-full">
                <a href="{{route('forum')}}"  class="flex justify-center w-full border-b-2  {{request()->is('forums')?' text-blue-600 border-blue-300':'text-gray-500 border-gray-300'}}">
                    Forums
                </a>
                @if(Auth::user()->course !== null)
                <a href="{{route('department-forum')}}"  class="flex justify-center w-full ml-1 border-b-2 border-gray-300">
                   Department Forums
                </a>
                @endif
            </ul>
        </div>
        <div  wire:loading>
            <p class="text-xl font-bold text-center text-gray-300">Searching...</p>
        </div>
        <div class="flex flex-col w-full gap-3 " style="padding-bottom: 100px;">

            @forelse ($forums as $forum)
                @php
                    $forum_year = $forum->year;
                     $year_id = Auth::user()->id;
                     $year = \App\Models\Year::where('year',  $forum_year)->pluck('id')->toArray();

                @endphp
                  @if(Auth::user()->role === 'admin' ||
                  (is_array($year) && in_array(intval(Auth::user()->year), $year)) ||
                  $forum->user_id === Auth::user()->id)
                  @livewire('forum-post', ['id' => $forum->id])
                @endif

            @empty
            <div class="flex items-center justify-center w-full">
                <h1 class="text-xl font-bold text-gray-300">No forums found...</h1>
            </div>
            @endforelse
        </div>
        </div>


        <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-green-900 border-t border-gray-200 md:hidden dark:bg-gray-700 dark:border-gray-600">
            <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
                <a  href="/" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg class="w-5 h-5 mb-2  {{ request()->is('/') ? 'text-green-500' : 'text-white' }}" dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    <span class="text-sm dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
                </a>
                <a href="{{route('news')}}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill=" {{ request()->is('news')||request()->is('course-news')||request()->is('news-settings') ? 'green' : 'white' }}" class="mb-2 bi bi-newspaper " viewBox="0 0 16 16">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                        <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                      </svg>
                    <span class="text-sm dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">News</span>
                </a>
                <a href="{{route('create-forum')}}" class="inline-flex flex-col items-center justify-center px-5 rounded-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg class="w-6 h-6 mb-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>

                </a>

                <a href="{{route('event')}}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="{{ request()->is('events')||request()->is('department-event')||request()->is('event-settings') ? 'green' : 'white' }}" class="mb-2 bi bi-calendar-event" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                      </svg>
                    <span class="text-sm text-white dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Events</span>
                </a>
                <a href="{{route('editProfile')}}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg class="w-5 h-5 mb-2 text-white dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    <span class="text-sm text-white dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Profile</span>
                </a>
            </div>
        </div>
        @if (session()->has('report'))
        <script>
            Swal.fire({
            title: "Report",
            text: "Report successfully sent.",
            icon: "success"
            });
        </script>
        @endif
    </div>



</div>

