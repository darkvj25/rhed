<div class="flex justify-center md:items-center md:justify-center h-dvh">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">

        <div class="flex items-center justify-between w-full mt-3">
            <a href="{{route('year',['id'=>$course_id])}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
            @if (Auth::user()->role == 'admin')
            <a href="{{route('create-block',['id'=>$id])}}" class="text-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
            </a>
            @endif

        </div>
        <h2 class="mb-3 font-bold text-center text-white">Blocks</h2>
        <div class="grid w-full grid-flow-col grid-rows-6 gap-4 py-4">
            @forelse ($blocks as $block)
                <div class="relative w-full py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 ">
                    <a href="{{route('student-list',['id'=>$block->id])}}" ><h2>{{$block->block}}</h2></a>
                    @if (Auth::user()->role==='admin')
                    <button id="dropdownMenuIconButton{{$block->id}}" data-dropdown-toggle="dropdownDots{{$block->id}}" data-dropdown-placement="bottom-start" class="absolute py-2 rounded-lg right-1 top-2" type="button">
                        <svg class="w-4 h-4 text-white-500 dark:text-white-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                    </button>
                    <div id="dropdownDots{{$block->id}}" class="z-10 hidden w-40 bg-green-500 divide-y divide-gray-100 rounded-lg shadow dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">

                        <li>
                            <a href="{{route('EditBlock',['id'=>$block->id])}}" class="block px-4 py-2 hover:bg-green-400 dark:hover:bg-green-600 dark:hover:text-white">Edit</a>
                        </li>
                        <li>
                            <button type="button" data-modal-target="popup-modal{{$block->id}}" data-modal-toggle="popup-modal{{$block->id}}" class="px-5 py-2 font-bold text-red-500 bg-green-500 rounded-lg hover:bg-green-400">Delete</button>
                        </li>
                        </ul>
                    </div>
                    <div id="popup-modal{{$block->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full p-4">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{$block->id}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Delete</span>
                                </button>
                                <div class="p-4 text-center md:p-5">
                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this block?</h3>
                                    <button wire:click='delete({{$block->id}})' data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Yes, I'm sure
                                    </button>
                                    <button data-modal-hide="popup-modal{{$block->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            @empty
            <p class="text-xl font-bold text-center text-gray-400">Empty</p>
            @endforelse

        </div>
        @if (session()->has('delete'))
        <script>
            Swal.fire({
            title: "Deleted",
            text: "Block deleted successfully",
            icon: "success"
            });
        </script>
        @endif
        @if (session()->has('save'))
        <script>
            Swal.fire({
            title: "Saved",
            text: "Block saved successfully",
            icon: "success"
            });
        </script>
        @endif
        @if (session()->has('update'))
        <script>
            Swal.fire({
            title: "Updated",
            text: "Block has been updated",
            icon: "success"
            });
        </script>
        @endif
    </div>
    @livewire('navigation')
</div>

