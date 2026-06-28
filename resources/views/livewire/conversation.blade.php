<div>
    <div class="relative flex justify-center pt-3 overflow-auto h-dvh md:items-center md:justify-center" style="scrollbar-width: none; -ms-overflow-style: none; ::-webkit-scrollbar { display: none; }">
        <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">

            <a href="{{route('profile')}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
            <h2 class="mb-3 font-bold text-center text-white">Messages</h2>
            <div class="flex flex-col gap-2 "  wire:poll>

                @forelse ($convos as $convo)
                    @php
                        if(Auth::user()->id === $convo->reciever_id){
                            $reciver = \App\Models\User::where('id',$convo->sender_id)->first();
                        }else{
                            $reciver = \App\Models\User::where('id',$convo->reciever_id)->first();

                        }
                    @endphp
                <div  class="flex justify-between gap-3 px-2 py-1 mb-2 border-2 rounded-md">
                    <div class="flex gap-3">
                        @if($reciver->image === null)
                        <img class="w-12 h-12 mt-1" src="{{ asset('logo/profile.png') }}" alt="">
                        @else
                        <img class="w-12 h-12 mt-1" src="{{ asset('storage/' . $reciver->image) }}" alt="">
                        @endif

                        <a href="{{route('messages',['reciever'=>$convo->reciever_id,'sender'=> $convo->sender_id])}}">

                            @if ($reciver->first_name === null || $reciver->last_name === null)
                                <h2 class="font-bold text-white
                                    {{
                                       optional($convo->message->last())->read_at === null &&
                                        !empty(optional($convo->message->last())->body) &&
                                            $convo->message->last()->sender_id != Auth::user()->id
                                        ? 'text-orange-500'
                                        : 'text-white'

                                    }}">
                                    {{$reciver->name}}
                                </h2>
                            @else
                                <h2 class="font-bold
                                    {{
                                        optional($convo->message->last())->read_at === null &&
                                        !empty(optional($convo->message->last())->body) &&
                                            $convo->message->last()->sender_id != Auth::user()->id ?
                                        'text-orange-500' : 'text-white'
                                    }}">
                                    {{$reciver->first_name}} {{$reciver->last_name}}
                                </h2>
                            @endif

                            @if(empty($convo->message->last()->body))
                                <p>Conversation has been deleted</p>
                            @else
                                <p class="{{$convo->message->last()->read_at === null && $convo->message->last()->sender_id != Auth::user()->id ? 'text-orange-500 font-bold' : ' text-white'}}">{{$convo->message->last()->body}}</p>
                            @endif

                            @if(!empty($convo->message->last()->created_at))
                                <p class="text-grey-200">{{$convo->message->last()->created_at->diffForHumans()}}</p>

                            @endif

                        </a>
                    </div>

                    <div>
                        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots{{$convo->id}}" data-dropdown-placement="bottom-start" class="inline-flex items-center self-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600" type="button">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                               <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                            </svg>
                         </button>
                         <div id="dropdownDots{{$convo->id}}" class="z-10 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">

                               <li>
                                  <button wire:click='delete({{$convo->id}})'   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</button>
                               </li>
                            </ul>
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
    </div>
</div>
