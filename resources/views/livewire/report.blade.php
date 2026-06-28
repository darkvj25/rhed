<div>
    <div class="relative flex justify-center pt-2 h-dvh md:items-center md:justify-center">
        <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
            <div class="flex justify-between w-full">
                <a href="{{route('profile')}}" class="font-bold text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                      </svg>
                </a>
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
                    Register badwords
                </button>
                <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full p-4">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Register Bad Words
                                </h3>
                                <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form wire:submit.prevent='save'>
                            <div class="p-4 space-y-4 md:p-5">

                                    <div>
                                        <label for="words" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Words</label>
                                        <input required type="text" id="words" wire:model ='words' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   />
                                    </div>

                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                                <button data-modal-hide="default-modal" type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

                <h2 class="mb-3 font-bold text-center text-white">Report</h2>
            <div class="flex flex-col gap-2" >

                @forelse ($reports as $report)
                <div class="relative">
                    <a href="{{route('report-forum',['id'=>$report->id])}}" class="flex items-center w-full gap-2 p-2 mb-1 border-2 rounded-lg">
                        <div>
                            @php
                                $user = $report->user;
                            @endphp
                            @if ($user && $user->image === null)
                            <img class="w-10 h-10 rounded-xl" src="{{ asset('logo/profile.png') }}" alt="">
                            @elseif($user)
                            <img class="w-10 h-10 rounded-xl" src="{{ asset('storage/' . $user->image) }}" alt="">
                            @endif
                        </div>
                        <div>
                            @if ($user)
                                @if ($user->name === null)
                                <p class="font-bold text-white ">{{$user->first_name}} {{$user->last_name}}</p>
                                @else
                                <p class="font-bold text-white ">{{$user->name}}</p>
                                @endif
                            @else
                                <p class="font-bold text-white ">Unknown User</p>
                            @endif

                            <p class="text-white">{{$report->reason}}</p>
                            <p class="text-white">{{$report->created_at->diffForHumans()}}</p>
                        </div>
                    </a>
                    <button id="dropdownMenuIconButton{{$report->id}}" data-dropdown-toggle="dropdownDots{{$report->id}}" data-dropdown-placement="bottom-start" class="absolute py-2 rounded-lg right-1 top-2" type="button">
                        <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                    </button>
                    <div id="dropdownDots{{$report->id}}" class="z-10 hidden w-40 bg-green-500 divide-y divide-gray-100 rounded-lg shadow dark:divide-gray-600">
                        <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">

                        <li>
                            <button type="button" data-modal-target="popup-modal{{$report->id}}" data-modal-toggle="popup-modal{{$report->id}}" class="w-full py-2 font-bold text-red-500 bg-green-400 rounded-lg hover:bg-green-300">Delete</button>
                        </li>
                        </ul>
                    </div>
                    <div id="popup-modal{{$report->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full p-4">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{$report->id}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Delete</span>
                                </button>
                                <div class="p-4 text-center md:p-5">
                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this report?</h3>
                                    <button wire:click='delete({{$report->id}})' data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Yes, I'm sure
                                    </button>
                                    <button data-modal-hide="popup-modal{{$report->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                @empty
                <div >
                    <h1 class="text-center">Empty</h1>
                </div>

                @endforelse

            </div>
        </div>
        @if (session()->has('delete'))
        <script>
            Swal.fire({
            title: "Deleted",
            text: "Report deleted successfully",
            icon: "success"
            });
        </script>
        @endif
        @if (session()->has('save'))
        <script>
            Swal.fire({
            title: "Saved",
            text: " Succesfully saved",
            icon: "success"
            });
        </script>
        @endif
    </div>
</div>
