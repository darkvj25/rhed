<div class="flex w-full gap-2.5 relative">
    <div class="flex flex-col w-full  leading-1.5 p-2 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
        <div class="flex items-center mb-2 space-x-2 rtl:space-x-reverse">

            @if ($user && $user->image === null)
                <a href="{{$user->id === Auth::user()->id ? route('forum-settings'):route('user-forum-profile', ['id' => $user->id])}}">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('logo/profile.png') }}" alt="Jese image">
                </a>

            @else

                <a href="{{$user->id === Auth::user()->id ? route('forum-settings'):route('user-forum-profile', ['id' => $user->id])}}">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . $user->image) }}" alt="Jese image">
                </a>
            @endif
            <span class="font-semibold text-dark text-md ">{{$user->name}}</span>
            <span class="text-sm font-normal text-dark">{{$forumTime->diffForHumans()}}</span>
        </div>
        <div class="flex flex-col w-full">
            @if ($forum->image !== null)
           <div class="flex w-full justify-center items-center">
                <img  src="{{ asset('storage/' . $forum->image) }}" style="height: 200px; width:280px">
            </div>
            @endif
            <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{!!$forum->post!!}</p>
        </div>

        <div class="flex justify-end">
            <div class="flex items-center gap-3">

                <button wire:click='like({{$forum->id}})' class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-heart" viewBox="0 0 16 16">
                        <path fill="{{$isLiked ? 'red' : ''}}"  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                    </svg>
                    {{$forum->like->count() == 0 ? '':$forum->like->count()}}
                </button>
                <a href="{{route('comment',['id'=>$forum->id])}}" class="text-sm font-normal text-gray-900 underline text-dark"><span class="text-dark">{{ $forum->comments->count() == 0 ? '' : $forum->comments->count() }}</span> Comments</a>

            </div>
        </div>
    </div>

    <div class="absolute right-0 top-1 ">
        <button id="dropdownMenuIconButton{{$forum->id}}" data-dropdown-toggle="dropdownDots{{$forum->id}}" data-dropdown-placement="bottom-start" class="inline-flex items-center self-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600" type="button">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
               <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
            </svg>
         </button>
    </div>

    <div  id="dropdownDots{{$forum->id}}" class="z-10 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
        <ul class="px-1 py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
            @if ($forum->user_id === Auth()->user()->id || Auth()->user()->role === 'admin')
                <li class="mb-2">
                    <a href="{{route('edit-forum',['id'=>$forum->id])}}" class="block px-4 py-2 text-center text-white bg-green-500 rounded-lg">Edit</a>
                </li>
            <li>
                <button data-modal-target="popup-modal{{$forum->id}}" data-modal-toggle="popup-modal{{$forum->id}}" class="block w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                    Delete
                </button>
            </li>
            @endif
            <li>
                <button data-modal-target="crud-modal{{$forum->id}}" data-modal-toggle="crud-modal{{$forum->id}}" class="block text-white w-full mt-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Report
                  </button>
            </li>
        </ul>
    </div>
    <div wire:ignore.self id="popup-modal{{$forum->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div  class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{$forum->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
                <div class="p-4 text-center md:p-5">
                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete post?</h3>
                    <button   wire:click="delete({{$forum->id}})" data-modal-hide="popup-modal{{$forum->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 nb-2 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal{{$forum->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self id="crud-modal{{$forum->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Report
                    </h3>
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal{{$forum->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div  class="p-4 md:p-5 ">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reason for Report</label>
                            <textarea id="description" required wire:model='reason' rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter the reason for your report"></textarea>
                            <div>
                                @error('reason') <span class="error " style="color:red !important;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                    </div>
                    <button wire:click()="report({{$forum->id}})" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">

                        Report
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
