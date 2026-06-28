<div>
    <div class="relative flex justify-center pt-2 h-dvh md:items-center md:justify-center">
        <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">

                <a href="{{route('report')}}" class="font-bold text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                      </svg>
                </a>
                <h2 class="mb-3 font-bold text-center text-white">Report</h2>
                <div class="relative flex flex-col w-full p-2 bg-white rounded-lg">
                    @if($forum)
                    <div class="flex items-center gap-2">
                        @php
                             $user = $forum->user;
                        @endphp
                        @if ($user && $user->image === null)
                            <img class="w-10 h-10 rounded-full" src="{{ asset('logo/profile.png') }}" alt="">
                        @elseif($user)
                            <img class="w-10 h-10 rounded-full" src="{{ asset('storage/' . $user->image) }}" alt="">
                        @endif
                        <div>
                            @if ($user)
                                @if ($user->name === null)
                                <p class="font-bold text-dark ">{{$user->first_name}} {{$user->last_name}}</p>
                                @else
                                <p class="font-bold text-dark ">{{$user->name}}</p>
                                @endif
                            @else
                                <p class="font-bold text-dark ">Unknown User</p>
                            @endif
                            <p class="text-grey-500">{{$forum->created_at->diffForHumans()}}</p>
                        </div>

                    </div>
                    <div class="flex justify-center">
                        @if ($forum->image != null)
                           <img class="object-fill h-48 w-96" src="{{ asset('storage/' . $forum->image) }}" alt="">
                        @endif

                    </div>
                    <div>
                        <p>{!!$forum->post!!}</p>
                    </div>
                    <div class="absolute right-0 top-1">
                        <button id="dropdownMenuIconButton{{$forum->id}}" data-dropdown-toggle="dropdownDots{{$forum->id}}" data-dropdown-placement="bottom-start" class="inline-flex items-center self-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600" type="button">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                               <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                            </svg>
                         </button>
                    </div>
                    <div id="dropdownDots{{$forum->id}}" class="z-10 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                           <li>
                                <button data-modal-target="popup-modal{{$forum->id}}" data-modal-toggle="popup-modal{{$forum->id}}" class="block w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                                    Delete
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div id="popup-modal{{$forum->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full p-4">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{$forum->id}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 text-center md:p-5">
                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this post?</h3>
                                    <button   wire:click="delete({{$forum->id}})" data-modal-hide="popup-modal{{$forum->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mb-2">
                                        Yes, I'm sure
                                    </button>
                                    <button data-modal-hide="popup-modal{{$forum->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="p-4 text-center">
                            <p class="text-gray-500">This forum post has been deleted or is no longer available.</p>
                        </div>
                    @endif
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
    </div>
</div>
