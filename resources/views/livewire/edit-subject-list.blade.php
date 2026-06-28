<div class="flex justify-center mt-3 md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-5 md:w-1/2">
        <div class="flex items-center justify-between w-full ">
            <a href="{{route('subject-list',['id'=>$course_id])}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>
            <a class="text-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
            </a>
        </div>
        <h1 class="mb-3 font-bold text-center">Edit Subject List</h1>
        <div >
            <form wire:submit="update">
                {{ $this->form }}

                <button  wire:click="$refresh" type="submit" class="mt-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-green-200 dark:focus:ring-green-900 hover:bg-green-800">
                    Edit
                </button>

            </form>
        </div>
    </div>


</div>
