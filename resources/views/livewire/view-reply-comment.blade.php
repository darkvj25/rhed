<div class="pl-5 mt-2">
    <div class="flex w-full gap-2.5 ">
        <img class="w-8 h-8 rounded-full" src="{{url('storage',$reply->user->image)}}" alt="Jese image">
        <div class="flex flex-col w-full  leading-1.5 p-3 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                <span class="font-semibold text-dark">{{$reply->user->name}}</span>
                <span class="text-sm font-normal text-dark">{{$commentTime->diffForHumans()}}</span>
            </div>
            <div class="flex flex-col w-full">
                <p class="text-sm font-normal py-2.5 text-dark">{!!$reply->reply!!}</p>
            </div>
        </div>
    </div>
    <div class="flex justify-start">
        <div class="flex items-center gap-3 ml-10">
            {{-- <a href="" class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-heart" viewBox="0 0 16 16">
                    <path fill="red"  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                </svg>
                1k
            </a> --}}
            <p class="ml-5 text-white">Reply</p>
        </div>
    </div>



</div>
