<div class="relative flex justify-center overflow-scroll h-dvh md:items-center md:justify-center">
    <div class="flex flex-col items-center w-full gap-3 px-2 ">
                <div class="flex flex-col w-full md:w-1/2">
                        <div class="w-full mt-3">
                            <a class="font-bold text-red-500" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                                </svg>
                            </a>
                        </div>
                        <h2 class="font-bold text-center text-white md:ml-16">Account Settings</h2>
                        <div class="flex flex-col justify-center ">
                            <div class="flex justify-center mb-3 mt-11">
                                @if ($user->image === null)
                                <img class="w-10 h-10 rounded-full md:h-14 md:w-14" src="{{ asset('logo/profile.png') }}" >
                                @else
                                <img class="w-10 h-10 rounded-full md:h-14 md:w-14" src="{{ asset('storage/' . $user->image) }}" >
                                @endif
                            </div>
                            <h2 class="font-bold text-center text-white">{{$user->name}}</h2>
                            <p class="text-center text-white">{{$user->email}}</p>
                        </div>
                </div >
                <div wire:poll.5s="updateNewMessagesCount" class="grid w-full grid-flow-col grid-rows-5 gap-4 py-4 md:w-1/2">
                        <a href="{{route('user')}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 ">
                            <h2>Users</h2>
                        </a>
                        <a href="{{route('notification')}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 ">
                            <h2>Notifications</h2>
                        </a>
                        <a href="{{route('conversation')}}" class="relative py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400"><h2>Messages</h2><p class="absolute bg-orange-500 rounded-full top-1 right-1" style="width: 30px">{{ $newMessagesCount }}</p></a>
                    @if(Auth::user()->role === 'student')
                        <a href="{{route('messages',['reciever'=>$admin->id,'sender'=>Auth::user()->id])}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 "><h2>Contact Admin</h2></a>
                    @endif
                        <a href="{{route('editProfile')}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 "><h2>Edit Profile</h2></a>
                    @if(Auth::user()->role === 'admin')
                        <a href="{{route('report')}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 "><h2>Report</h2></a>
                    @endif
                </div>
    </div>

</div>
