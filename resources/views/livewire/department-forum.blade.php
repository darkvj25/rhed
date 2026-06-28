<div class="px-4 mt-2">
    <!-- Minimal Header -->
    <div class="flex items-center justify-between py-4">
        <a href="/" class="p-2 rounded-xl bg-academic-900 border border-academic-700 text-academic-accent">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>
        <h1 class="text-xl font-bold text-white">Department Forum</h1>
        <a href="{{route('forum-settings')}}" class="p-2 rounded-xl bg-academic-900 border border-academic-700 text-academic-accent">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0m-9.75 0h9.75" />
            </svg>
        </a>
    </div>

    <!-- Bottom-Heavy Search Bar -->
    <div class="mb-6">
        <form wire:submit='searchAll' class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                <svg class="w-5 h-5 text-emerald-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="text" wire:model="search" wire:keydown.enter="searchAll"
                class="block w-full h-14 pl-12 pr-4 text-emerald-50 bg-academic-900 border border-academic-700 rounded-2xl focus:ring-2 focus:ring-academic-accent focus:border-transparent placeholder-emerald-700/50 transition-all shadow-inner"
                placeholder="Search department discussions...">
        </form>
    </div>

    <!-- Modern Pill Tabs -->
    <div class="bg-academic-900 rounded-2xl p-1.5 flex mb-6 border border-academic-700 shadow-lg">
        <a href="{{route('forum')}}" class="flex-1 py-2.5 text-center text-sm font-bold rounded-xl transition-all duration-200 {{request()->is('forums') ? 'bg-academic-700 text-white shadow-md' : 'text-emerald-500/60'}}">
            Global
        </a>
        @if(Auth::user()->course !== null)
        <a href="{{route('department-forum')}}" class="flex-1 py-2.5 text-center text-sm font-bold rounded-xl transition-all duration-200 {{request()->is('department-forums') ? 'bg-academic-700 text-white shadow-md' : 'text-emerald-500/60'}}">
            Department
        </a>
        @endif
    </div>

    <!-- Skeleton Shimmer for 'Searching' -->
    <div wire:loading.delay class="space-y-4">
        @foreach(range(1, 3) as $i)
            <div class="bg-academic-900 rounded-2xl p-4 animate-pulse border border-academic-800">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-academic-800 rounded-full"></div>
                    <div class="h-4 bg-academic-800 rounded w-1/3"></div>
                </div>
                <div class="h-6 bg-academic-800 rounded w-full mb-2"></div>
                <div class="h-6 bg-academic-800 rounded w-2/3"></div>
            </div>
        @endforeach
    </div>

    <!-- Feed Content -->
    <div wire:loading.remove class="space-y-4 pb-24">
        @forelse ($forums as $forum)
            @livewire('forum-post', ['id' => $forum->id], key('forum-'.$forum->id))
        @empty
            <div class="flex flex-col items-center justify-center py-20 text-center">
                <div class="w-20 h-20 bg-academic-900 rounded-full flex items-center justify-center mb-4 border border-academic-800">
                    <svg class="w-10 h-10 text-emerald-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white">No discussions found</h3>
                <p class="text-emerald-700 text-sm">Be the first to start a conversation!</p>
            </div>
        @endforelse
    </div>
</div>
