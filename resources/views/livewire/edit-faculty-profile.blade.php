<div class="relative flex justify-center pt-3 md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-2 md:w-1/2">
        <div class="flex items-center justify-between w-full ">
            <a href="{{route('faculty')}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>

        </div>
        <h1 class="mb-3 font-bold text-center">Edit Faculty</h1>
        <div class="mb-3">
            <form wire:submit="update">
                {{ $this->form }}

                <button  wire:click="$refresh" type="submit" class="mt-5 w-full text-center py-2.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg ">
                    Save
                </button>

            </form>
        </div>
    </div>


</div>


