<div class="flex justify-center pt-2 overflow-scroll h-dvh md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <div class="flex items-center justify-between w-full ">
            <a href="/" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
            @if (Auth::user()->role == 'admin')
            <a href="{{route('create-faculty')}}" class="text-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
            </a>
            @endif
        </div>
        <h1 class="mb-3 font-bold text-center">Faculty</h1>


        <div class="grid grid-flow-row grid-cols-2" style="margin-bottom: 100px;">
            @forelse ($faculties as $faculty)
            <div class="flex flex-col items-center justify-center">
                @if(Auth::user()->role === 'admin')
                <a href="{{route('edit-faculty-profile',['id'=>$faculty->id])}}" class="flex justify-center w-full " >
                    @if($faculty->image === null)
                    <img src="{{ asset('logo/profile.png') }}" class="w-20 h-20 rounded-full" alt="">
                    @else
                    <img src="{{ asset('storage/' . $faculty->image) }}" class="w-20 h-20 rounded-full" alt="">
                    @endif
                </a>
                @else
                <div class="flex justify-center w-full">
                    @if($faculty->image === null)
                    <img src="{{ asset('logo/profile.png') }}" class="w-20 h-20 rounded-full" alt="">
                    @else
                    <img src="{{ asset('storage/' . $faculty->image) }}" class="w-20 h-20 rounded-full" alt="">
                    @endif
                </div>
                @endif

                <div class="flex flex-col justify-center ">
                    <h2 class="text-xl font-bold text-center text-white">{{$faculty->first_name}} {{$faculty->last_name}}</h2>
                    <a class="text-center">{{$faculty->position}}</a>
                </div>
                <div>
                    <a href="{{route('messages',['reciever'=>$faculty->user_id,'sender'=>Auth::user()->id])}}" class="btn btn-success">Message</a>
                </div>
            </div>
            @empty
            <h1>Empty</h1>
        @endforelse

        </div>


    </div>
</div>
