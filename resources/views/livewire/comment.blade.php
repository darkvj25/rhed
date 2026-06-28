<div class="flex justify-center py-3 md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 md:w-1/2" style="margin-bottom: 100px;">
            <div class="px-5">
                <a href="{{route('forum')}}" class="font-bold text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                      </svg>
                </a>
                <h1 class="mb-3 font-bold text-center">Comment</h1>
            </div>

            <div class="px-3">
                <div class="flex w-full gap-2.5 ">

                    <div class="flex flex-col w-full  leading-1.5 p-2 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            @if($user->image === null)
                            <img class="w-8 h-8 rounded-full" src="/logo/profile.png" alt="Jese image">
                            @else
                            <img class="w-8 h-8 rounded-full" src="{{url('storage',$user->image)}}" alt="Jese image">
                            @endif
                            <span class="font-semibold text-dark text-md ">{{$user->name}}</span>
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{$forumTime->diffForHumans()}}</span>
                        </div>
                        <div class="flex flex-col w-full">
                            @if ($post->image !== null)
                            <img src="{{url('storage',$post->image)}}" style="height: 200px">
                            @endif
                            <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">{!!$post->post!!}</p>
                        </div>

                        <div class="flex justify-end">
                            <div class="flex items-center gap-3">
                                <button wire:click='like({{$post->id}})' class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-heart" viewBox="0 0 16 16">
                                        <path fill="{{$isLiked ? 'red' : ''}}"  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                    </svg>
                                    {{$this->post->like->count()== 0 ? '':$this->post->like->count()}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full px-3 py-2 mt-5 ">
                <h1>All comments</h1>
                <form class="w-full mt-2 " wire:submit="create">
                    <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                        <div class="px-4 bg-white rounded-t-lg dark:bg-gray-800" >
                            {{ $this->form }}
                        </div>
                        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                            <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-green-200 dark:focus:ring-green-900 hover:bg-green-800">
                                Comment
                            </button>
                        </div>
                    </div>
                 </form>
            </div>
            <div class="flex flex-col gap-3 px-3 py-2">
                @forelse ($comments as $comment)
                    @livewire('forum-comment',['id' => $comment->id])
                @empty

                @endforelse

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
</div>
