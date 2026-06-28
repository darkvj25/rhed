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

            @if($user->first_name === null || $user->last_name === null)
            <p class="font-bold text-white">{{$user->name}}</p>
            @else
            <p class="font-bold text-white">{{$user->first_name}}</p>
            <p class="font-bold text-white">{{$user->last_name}}</p>
            @endif
        </div>
        <div class="flex gap-2">
            @if ($year)
                <p class="text-white">
                    {{ $year->year }}
                </p>
                <p class="text-white">
                    {{ $course->course }}
                </p>
             @else
                <p>
                    {{ $user->position }}
                </p>
            @endif



        </div>
        <div class="flex mt-1 md:mt-1">
            @if (Auth::user()->role === 'admin')
            <button wire:click='delete({{$user->id}})' wire:confirm="Are you sure you want to delete this user?" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Remove</button>
            @endif

            @if ($user->accept === 1)
                <a href="{{route('messages',['reciever'=>$user->id,'sender'=>Auth::user()->id])}}"   class="px-4 py-2 text-sm font-medium text-gray-900 bg-green-500 border border-gray-200 rounded-lg ms-2 focus:outline-none hover:bg-green-400 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Message</a>

            @else
            <button wire:click='update({{$user->id}})'
                class="px-4 py-2 text-sm font-medium text-white bg-green-500 border border-gray-200 rounded-lg ms-2 focus:outline-none hover:bg-green-400 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-green-100 dark:focus:ring-green-700 dark:bg-green-800 dark:text-green-400 dark:border-green-600 dark:hover:text-white dark:hover:bg-green-700">Accept</button>
            @endif

        </div>
    </div>

</div>
