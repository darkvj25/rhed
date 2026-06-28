<nav class="fixed bottom-6 left-4 right-4 h-16 bg-academic-900/80 backdrop-blur-xl border border-academic-700/50 rounded-2xl flex items-center justify-between px-4 z-50 shadow-2xl md:hidden">
    <!-- Home -->
    <a href="/" class="flex flex-col items-center w-12 {{ request()->is('/') ? 'text-academic-accent' : 'text-emerald-400/50' }}">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        <span class="text-[9px] mt-0.5 font-bold uppercase">Home</span>
    </a>

    <!-- Forum -->
    <a href="{{ route('forum') }}" class="flex flex-col items-center w-12 {{ request()->is('forum*') ? 'text-academic-accent' : 'text-emerald-400/50' }}">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2-2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
        <span class="text-[9px] mt-0.5 font-bold uppercase">Forum</span>
    </a>

    <!-- FAB: Create Post -->
    <div class="-mt-14 relative">
        <div class="absolute inset-0 bg-academic-950 rounded-full scale-110 blur-sm opacity-50"></div>
        <a href="{{ route('create-forum') }}" class="relative w-14 h-14 bg-academic-accent text-academic-950 rounded-full shadow-lg flex items-center justify-center border-4 border-academic-950 transition-transform active:scale-90 hover:scale-105">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
        </a>
    </div>

    <!-- News -->
    <a href="{{ route('news') }}" class="flex flex-col items-center w-12 {{ request()->is('news*') ? 'text-academic-accent' : 'text-emerald-400/50' }}">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
        <span class="text-[9px] mt-0.5 font-bold uppercase">News</span>
    </a>

    <!-- Profile -->
    <a href="{{ route('editProfile') }}" class="flex flex-col items-center w-12 {{ request()->is('editProfile*') ? 'text-academic-accent' : 'text-emerald-400/50' }}">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
        <span class="text-[9px] mt-0.5 font-bold uppercase">Profile</span>
    </a>
</nav>
