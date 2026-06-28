<div class="px-4 mt-2 pb-24">
    <!-- Header -->
    <div class="flex items-center justify-between py-4">
        <a href="{{route('forum')}}" class="p-2 rounded-xl bg-academic-900 border border-academic-700 text-academic-accent">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>
        <h1 class="text-xl font-bold text-white">New Discussion</h1>
        <div class="w-10"></div> <!-- Spacer -->
    </div>

    <div class="mt-6">
        <div class="bg-academic-900 border border-academic-700 rounded-3xl p-6 shadow-2xl">
            <form wire:submit.prevent="create">
                <div class="space-y-4">
                    {{ $this->form }}
                </div>

                <button id="submit" type="submit"
                        class="mt-8 w-full h-14 bg-academic-accent text-academic-950 font-bold rounded-2xl shadow-lg active:scale-95 transition-transform flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    <span>Publish to Forum</span>
                </button>
            </form>
        </div>
    </div>

    @if (session()->has('error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
             class="fixed top-6 left-4 right-4 z-[70] bg-red-500 text-white p-4 rounded-2xl shadow-2xl flex items-center justify-between animate-bounce">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="font-bold">{{ session('error') }}</span>
            </div>
            <button @click="show = false"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
        </div>
    @endif
</div>
