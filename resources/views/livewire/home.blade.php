<div class="relative flex justify-center pt-1 overflow-scroll md:items-center md:justify-center ">
    <div class="flex flex-col w-full gap-3 px-1 md:w-1/2">
        <div class="flex justify-end px-2 mt-2">
            <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="px-4 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-400">Logout</button>
        </div>
        <div class="flex gap-1 mb-1 ml-5 md:w-full">
            <img src="logo/veritas_logo.png" alt="" style="width: 35px">
            <h2 class="text-xl font-bold text-white">Veritas College of Irosin</h2>
        </div>

        <a href="{{route('profile')}}" class="py-3 pl-3 border-2 rounded-md ">
            <div class="flex w-full gap-2">
                <div class="rounded-full ">
                    @if ($user->image === null)
                    <img class="w-10 h-10 rounded-full md:h-14 md:w-14" src="{{ asset('logo/profile.png') }}" >
                    @else
                    <img class="w-10 h-10 rounded-full md:h-14 md:w-14" src="{{ asset('storage/' . $user->image) }}" >
                    @endif
                </div>
                <div>
                    <h2 class="font-bold text-white">{{$user->name}}</h2>
                    <p class="text-white/60">{{$user->email}}</p>
                </div>
            </div>
        </a>
        <div class="grid grid-flow-col grid-rows-3 ">
            <div class="flex flex-col items-center justify-center image-container">
                <a href="{{route('student')}}" class="rounded-lg" >
                    <img src="logo/students.png" alt="" style=" height: 150px; width: 150px; object-fit: cover;">
                </a>
                <h2 class="font-bold text-white">Student</h2>
            </div>
            <div class="flex flex-col items-center justify-center image-container">
                <a href="{{route('news')}}" class="rounded-lg ">
                    <img class="image-size" src="logo/news.png" style=" height: 150px; width: 150px; object-fit: cover;">
                </a>
                <h2 class="font-bold text-white">News</h2>
            </div>
            <div class="flex flex-col items-center justify-center image-container">
                <a href="{{route('course-list')}} " class="rounded-lg">
                    <img class="image-size" src="logo/courses.png" style=" height: 150px; width: 150px; object-fit: cover;">
                </a>
                <h2 class="font-bold text-white">Courses</h2>
            </div>
            <div class="flex flex-col items-center justify-center image-container">
                <a href="{{route('event')}}" class="rounded-lg ">
                    <img class="image-size" src="logo/events.png" style=" height: 150px; width: 150px; object-fit: cover;">
                </a>
                <h2 class="font-bold text-white ">Events</h2>
            </div>
            <div class="flex flex-col items-center justify-center image-container">
                <a href="{{route('forum')}}" class="rounded-lg">
                    <img class="image-size" src="logo/furoms.png" style=" height: 150px; width: 150px; object-fit: cover;">
                </a>
                <h2 class="font-bold text-white">Forums</h2>
            </div>
            <div class="flex flex-col items-center justify-center image-container">
                <a href="{{route('faculty')}}" class="rounded-lg ">
                    <img class="image-size" src="logo/faculty.png" style=" height: 150px; width: 150px; object-fit: cover;">
                </a>
                <h2 class="font-bold text-white">Faculty</h2>
            </div>
        </div>
        <div style="margin-bottom: 100px">
        </div>
    </div>
    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Logout</span>
                </button>
                <div class="p-4 text-center md:p-5">
                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to logout this account?</h3>
                    <button wire:click='logout' data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
