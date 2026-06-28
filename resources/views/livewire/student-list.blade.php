<div class="flex justify-center md:items-center md:justify-center h-dvh">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <div class="flex items-center justify-between w-full mt-3">
            <a href="{{route('block',['id'=>$block_id])}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
            @if (Auth::user()->role ==='admin')
            <a href="{{route('create-student-list',['id'=>$id])}}" class="text-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
            </a>
            @endif

        </div>
        <h2 class="mb-3 font-bold text-center text-white">Students List</h2>
        <div class="grid w-full grid-flow-col grid-rows-6 gap-4 py-3 md:w-1/2">
            <div class="flex flex-col">
            <h2 class="font-bold text-white">Male</h2>
            @forelse ($males as $male)
                    <p class="text-white"> <span>{{ $loop->iteration }}. </span> {{$male->first_name}} {{$male->last_name}}</p>
            @empty
            @endforelse
            </div>
            <div class="flex flex-col">
                <h2 class="font-bold text-white">Female</h2>
                @forelse ($females as $female)
                    <p class="text-white"> <span class="text-white">{{ $loop->iteration }}. </span> {{$female->first_name}} {{$female->last_name}}</p>
                @empty

                @endforelse
            </div>

          </div>
    </div>
</div>

