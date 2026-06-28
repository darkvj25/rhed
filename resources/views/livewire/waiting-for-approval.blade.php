<div class="flex items-center justify-center w-full " style="height:100vh">
    <div class="w-full px-1 md:w-1/2" wire:poll>
        @if(Auth::user()->accept == 0)
        <p class="text-white">
        Thank you for registering! Your account is currently pending approval by an administrator. Please check back later to see if your account has been approved.
        </p>
        <div class="flex justify-center mt-3" >
            <button wire:click='logout' class="px-5 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-400">Logout</button>
        </div>
        @else
            <p class="text-white">
                Your account has been approved by the admin!
            </p>
            <div class="flex items-center justify-center w-full mt-2">
                <a href="{{route('home')}}" class="btn btn-success">Go to your account</a>
            </div>

        @endif
    </div>

</div>


