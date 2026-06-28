<div class="relative flex justify-center pt-3 overflow-scroll h-dvh md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <div class="flex items-center justify-between w-full ">
            <a href="/" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
            {{-- @if (Auth::user()->role == 'admin' || Auth::user()->role == 'org')
            <a href="{{route('createEvent')}}" class="text-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
            </a>
            @endif --}}
        </div>
        <h1 class="mb-3 font-bold text-center">User</h1>
        <div class="w-full ">
            <form wire:submit='searchAll'>
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
                <a href="{{route('user')}}" wire:navigate class="flex justify-center w-full border-b-2 border-gray-300 ">
                   Students
                </a>
                <a href="{{route('organization-account')}}" wire:navigate class="flex justify-center w-full ml-1 border-b-2 {{request()->is('organization-account')?' text-blue-600 border-blue-300':'text-gray-500 border-gray-300'}}" ">
                   Organization
                </a>
                @if (Auth::user()->role === 'admin')
                <a href="{{route('request')}}" wire:navigate class="flex justify-center w-full ml-1 border-b-2 border-gray-300">
                    Request
                 </a>
                @endif

            </ul>
        </div>

        <div class="flex flex-col gap-2">
            @forelse ($users as $user)
            <div class="flex w-full gap-2 p-2 mt-2 ">
                <div>
                    @if ($user->image === null)
                    <img class="w-20 h-20 mb-3 rounded-full shadow-lg" src="/logo/profile.png" alt="Bonnie image"/>
                     @else
                     <img class="w-20 h-20 mb-3 rounded-full shadow-lg" src="{{url('storage',$user->image)}}" alt="Bonnie image"/>
                    @endif

                </div>
                <div>
                    <div class="flex gap-2">
                        <p class="font-bold text-white">{{$user->name}}</p>
                    </div>
                    <div class="flex gap-2">
                            <p class="text-white">
                                Organization
                            </p>
                    </div>
                    <div class="flex mt-1 md:mt-1">
                        @if (Auth::user()->role === 'admin')
                        <button wire:click='delete({{$user->id}})' wire:confirm="Are you sure you want to delete this user?" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Remove</button>
                        @endif
                        @if ($user->accept === 1)
                            <a href="{{route('messages',['reciever'=>$user->id,'sender'=>Auth::user()->id])}}"   class="px-4 py-2 text-sm font-medium text-gray-900 bg-green-500 border border-green-500 rounded-lg ms-2 focus:outline-none hover:bg-green-400 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Message</a>

                        @else
                        <button wire:click='update({{$user->id}})'
                            class="px-4 py-2 text-sm font-medium text-white bg-green-500 border border-gray-200 rounded-lg ms-2 focus:outline-none hover:bg-green-400 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-green-100 dark:focus:ring-green-700 dark:bg-green-800 dark:text-green-400 dark:border-green-600 dark:hover:text-white dark:hover:bg-green-700">Accept</button>
                        @endif

                    </div>
                </div>

            </div>
            @empty
            <div class="flex items-center justify-center w-full h-full ">
                <h1>Empty</h1>
            </div>

            @endforelse

        </div>
        @if (session()->has('accept'))
        <script>
            Swal.fire({
            title: "Accepted",
            text: "User accepted successfully.",
            icon: "success"
            });
        </script>
        @endif
        @if (session()->has('delete'))
        <script>
            Swal.fire({
            title: "Removed",
            text: "User Has been Removed successfully.",
            icon: "success"
            });
        </script>
        @endif
    </div>
</div>
