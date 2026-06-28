<div class="relative flex justify-center pt-3 md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 md:w-1/2">
        <div class="fixed top-0 flex items-center w-full gap-2 py-2 bg-white md:w-1/2">
            <a href="{{route('conversation')}}" class="text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
            @if ($user->image === null)
            <img src="{{ asset('logo/profile.png') }}" alt="" class="w-10 h-10 rounded-xl">
            @else
            <img src="{{ asset('storage/' . $user->image) }}" alt="" class="w-10 h-10 rounded-xl">
            @endif
            @if ($user->first_name === null || $user->last_name === null)
            <p class="font-bold">{{$user->name}}</p>
            @else
            <p class="font-bold">{{$user->first_name}} {{$user->last_name}}</p>
            @endif

        </div>

        <div class="mt-5 mb-5 overflow-auto h-dvh" style="scrollbar-width: none; -ms-overflow-style: none; ::-webkit-scrollbar { display: none; }">
            <div class="flex flex-col gap-2 pb-2 overflow-auto scroll-smooth " id="messages-container" wire:poll>
                @forelse ($messages as $message)
                @if(($message->sender_id === Auth::user()->id && $message->unsent === 1) || $message->unsent === 0)
                    @php
                    $user = \App\Models\User::where('id',$message->sender_id)->first();
                    @endphp
                @if ($message->photo != null)
                <div class="w-full flex justify-{{ $message->sender_id == Auth::user()->id ? 'end' : 'start' }} px-5">
                    <img src="{{ asset('storage/' . $message->photo) }}" alt="" style="width: 150px; height:200px; object-fit: cover;" class="rounded-lg">
                </div>
                @endif

                <div class="flex   items-start justify-{{ $message->sender_id == Auth::user()->id ? 'end' : 'start' }} " >

                    @if($message->sender_id !== Auth::user()->id)
                        @if ($user->image === null)
                        <img class="w-8 h-8 rounded-full" src="{{ asset('logo/profile.png') }}" alt="Jese image">
                        @else
                        <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . $user->image) }}" alt="Jese image">
                        @endif
                    @endif
                    @if ($message->body !== "")
                    <div id="container" class="flex ml-1  flex-col  leading-1.5 px-2 py-2  {{ $message->sender_id == Auth::user()->id ? 'border-green-700 bg-green-600' : 'border-gray-200 bg-gray-100' }}  rounded-xl dark:bg-gray-700" style="width:70%">

                        <p class="text-sm font-normal text-gray-900 text-dark {{ $message->sender_id == Auth::user()->id ? ' text-white' : 'text-gray-900 text-dark' }}">{{$message->body}}</p>
                        <div class="flex justify-end">
                            @if ($message->sender_id == Auth::user()->id)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                            @endif
                            <div id="message" class="p-0"  style="display: none;"><p class="text-sm {{$message->sender_id == Auth::user()->id ? 'text-white' : 'text-green-500' }}">{{$message->created_at->diffForHumans()}}</p></div>
                        </div>
                    </div>
                    @endif
                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots{{$message->id}}" data-dropdown-placement="bottom-start" class="inline-flex items-center self-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg  " type="button">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 4 15">
                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                    </button>
                    <div wire:self.ignore id="dropdownDots{{$message->id}}" class="z-10 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">

                            <li>
                                <button wire:click='delete({{$message->id}})' class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</button>
                            </li>
                        </ul>
                    </div>

                </div>
                @endif
                @empty
                    <div class="flex items-center justify-center w-full h-dvh "><p class="text-white text-bold">No Conversation</p></div>
                @endforelse
            </div>

        </div>


        <div class="fixed bottom-0 w-full md:w-1/2">
            <div wire:loading wire:target="photo" class="text-white">Uploading...</div>
            <form wire:submit.prevent="save">
                @if ($photo)
                <div class="flex justify-end w-full ">
                    <div class="relative">
                        <img src="{{ $photo->temporaryUrl() }}" alt="Photo Preview" class="w-32 h-32 mb-2">

                    </div>
                </div>
                @endif

                <label for="chat" class="sr-only">Your message</label>
                <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
                    <label class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <input type="file" wire:model="photo" class="hidden" accept=".jpg,.jpeg,.png,.gif">
                        <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                        </svg>
                    </label>
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                    <textarea id="chat" wire:model="reply" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                          @if($photo || !empty($reply))
                            <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                                <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
                                </svg>
                                <span class="sr-only">Send message</span>
                            </button>
                        @endif
                </div>
            </form>
        </div>
    </div>
    <script>

        let divElement = document.getElementById('messages-container');
        divElement.scrollIntoView({ behavior: 'smooth', block: 'end' });



        const containers = document.querySelectorAll('#container');
            const messages = document.querySelectorAll('#message'); // Assuming you have multiple messages

            containers.forEach(container => {
                container.addEventListener('click', () => {
                    messages.forEach(message => {
                        // Toggle each message's display
                        if (message.style.display === "none" || message.style.display === "") {
                            message.style.display = "block"; // Show the message
                        } else {
                            message.style.display = "none"; // Hide the message
                        }
                    });
                });
            });


    </script>
</div>
