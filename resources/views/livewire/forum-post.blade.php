<article class="bg-academic-900 border border-academic-800 rounded-3xl overflow-hidden shadow-sm active:bg-academic-800 transition-all duration-200 relative group">
    <div class="p-5">
        <!-- Header: Author Info & Dropdown -->
        <div class="flex items-start justify-between mb-4">
            <div class="flex items-center space-x-3">
                <a href="{{$user->id === Auth::user()->id ? route('forum-settings'):route('user-forum-profile', ['id' => $user->id])}}" class="relative">
                    <img class="w-10 h-10 rounded-2xl object-cover border-2 border-academic-700 shadow-sm"
                         src="{{ $user->image ? asset('storage/' . $user->image) : asset('logo/profile.png') }}"
                         alt="{{ $user->name }}">
                    <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-academic-accent border-2 border-academic-900 rounded-full"></div>
                </a>
                <div>
                    <h4 class="text-sm font-bold text-white">{{ $user->name }}</h4>
                    <p class="text-[10px] font-medium text-emerald-500/60 uppercase tracking-tight">{{ $forumTime->diffForHumans() }}</p>
                </div>
            </div>

            <!-- Context Menu -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="p-2 text-emerald-500/50 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                </button>

                <div x-show="open" @click.away="open = false"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="absolute right-0 mt-2 w-48 bg-academic-800 border border-academic-700 rounded-2xl shadow-2xl z-20 overflow-hidden">

                    @if ($forum->user_id === Auth()->user()->id || Auth()->user()->role === 'admin')
                        <a href="{{route('edit-forum',['id'=>$forum->id])}}" class="flex items-center px-4 py-3 text-sm text-white hover:bg-academic-700 transition-colors">
                            <svg class="w-4 h-4 mr-3 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            Edit Post
                        </a>
                        <button wire:click="delete({{$forum->id}})" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" class="w-full flex items-center px-4 py-3 text-sm text-red-400 hover:bg-red-500/10 transition-colors">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            Delete
                        </button>
                    @endif
                    <button data-modal-target="crud-modal{{$forum->id}}" data-modal-toggle="crud-modal{{$forum->id}}" class="w-full flex items-center px-4 py-3 text-sm text-emerald-100 hover:bg-academic-700 transition-colors">
                        <svg class="w-4 h-4 mr-3 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        Report
                    </button>
                </div>
            </div>
        </div>

        <!-- Content Body -->
        <div class="space-y-3">
            @if ($forum->image !== null)
            <div class="rounded-2xl overflow-hidden border border-academic-700 shadow-inner bg-academic-950">
                <img src="{{ asset('storage/' . $forum->image) }}" class="w-full h-auto max-h-72 object-cover">
            </div>
            @endif

            <div class="text-emerald-50 text-sm leading-relaxed font-medium">
                {!! $forum->post !!}
            </div>
        </div>

        <!-- Interaction Footer (Optimized Touch Targets) -->
        <div class="flex items-center justify-between mt-6 pt-4 border-t border-academic-800/50">
            <div class="flex items-center space-x-1">
                <button wire:click='like({{$forum->id}})'
                        class="flex items-center justify-center space-x-2 h-12 px-4 rounded-2xl {{ $isLiked ? 'bg-red-500/10 text-red-500' : 'text-emerald-500/50 hover:bg-academic-800' }} transition-all active:scale-90">
                    <svg class="w-6 h-6" fill="{{ $isLiked ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    @if($forum->like->count() > 0)
                        <span class="text-sm font-bold">{{ $forum->like->count() }}</span>
                    @endif
                </button>

                <a href="{{route('comment',['id'=>$forum->id])}}"
                   class="flex items-center justify-center space-x-2 h-12 px-4 rounded-2xl text-emerald-500/50 hover:bg-academic-800 transition-all active:scale-90">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    @if($forum->comments->count() > 0)
                        <span class="text-sm font-bold">{{ $forum->comments->count() }}</span>
                    @endif
                </a>
            </div>

            <button class="w-12 h-12 flex items-center justify-center rounded-2xl text-emerald-500/50 hover:bg-academic-800 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
            </button>
        </div>
    </div>

    <!-- Report Modal (Integrated Flowbite) -->
    <div wire:ignore.self id="crud-modal{{$forum->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-academic-900 border border-academic-700 rounded-3xl shadow-2xl">
                <div class="flex items-center justify-between p-5 border-b border-academic-800">
                    <h3 class="text-xl font-bold text-white">Report Discussion</h3>
                    <button type="button" class="text-emerald-500 hover:bg-academic-800 p-2 rounded-xl transition-colors" data-modal-toggle="crud-modal{{$forum->id}}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                <div class="p-6">
                    <label class="block mb-2 text-sm font-bold text-emerald-500">Reason for Report</label>
                    <textarea wire:model='reason' rows="4" class="block w-full p-4 bg-academic-950 border border-academic-700 text-white rounded-2xl focus:ring-2 focus:ring-academic-accent focus:border-transparent placeholder-emerald-900" placeholder="Help us understand the issue..."></textarea>
                    @error('reason') <p class="mt-2 text-xs font-bold text-red-500">{{ $message }}</p> @enderror

                    <button wire:click="report({{$forum->id}})" class="mt-6 w-full h-14 bg-academic-accent text-academic-950 font-bold rounded-2xl shadow-lg active:scale-95 transition-transform">
                        Submit Report
                    </button>
                </div>
            </div>
        </div>
    </div>
</article>
