<div class="flex justify-center pt-3 overflow-scroll h-dvh md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <div class="flex items-center justify-between w-full ">
            <a href="{{route('comment',['id'=>$comment->forum_id])}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>

        </div>
        <h1 class="mb-3 font-bold text-center text-white">Reply</h1>

        <div>
            <div class="flex w-full gap-2.5 ">
                @if($comment->user->image === null)
                <img class="w-8 h-8 rounded-full" src="/logo/profile.png" alt="Jese image">
                @else
                <img class="w-8 h-8 rounded-full" src="{{url('storage',$comment->user->image)}}" alt="Jese image">
                @endif

                <div class="flex flex-col w-full  leading-1.5 p-3 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                        <span class="font-semibold text-dark">{{$comment->user->name}}</span>
                        <span class="text-sm font-normal text-dark">{{$commentTime->diffForHumans()}}</span>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-sm font-normal py-2.5 text-dark">{!!$comment->comment!!}</p>
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
                    <button class="ml-5 text-white"  wire:click="focusReplyInput" id="reply-button">Reply</button>
                </div>
            </div>
        </div>

       <div style="padding-bottom: 60px">
        @forelse ($allReply as $reply)
        @livewire('view-reply-comment',['id' => $reply->id])
        @empty

        @endforelse

       </div>
       <div class="fixed bottom-0 w-full md:w-1/2">
            <form wire:submit.prevent="create">
                <label for="chat" class="sr-only">Your message</label>
                <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">

                    <textarea required id="reply-input" wire:model="reply" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write a public reply..."></textarea>
                        <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                        <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
                        </svg>
                        <span class="sr-only">Send message</span>
                    </button>
                </div>
            </form>
        </div>
        @if (session()->has('error'))
        <div class="fixed top-0 right-2">
            <div class="relative alert alert-danger d-flex align-items-center" id="error-alert" role="alert">
                <svg class="flex-shrink-0 bi me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    {{ session('error') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>

        @endif
    </div>


    <script>
        // Listen for the browser event from Livewire
        window.addEventListener('focus-reply-input', function() {
            document.getElementById('reply-input').focus();
        });
    </script>

</div>
