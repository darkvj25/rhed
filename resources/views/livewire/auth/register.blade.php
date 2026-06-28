<div>
        <div class="mt-2" >
            <ul class="flex justify-between w-full">
                <a href="{{route('register')}}" wire:navigate class="flex justify-center w-full border-b-2 {{request()->is('register')?' text-blue-600 border-blue-300':'text-gray-500 border-gray-300'}}">
                Student
                </a>
                <a href="{{route('register-faculty')}}" wire:navigate class="flex justify-center w-full ml-1 border-b-2 border-gray-300">
                    Faculty
                </a>
                <a href="{{route('organization')}}" wire:navigate class="flex justify-center w-full ml-1 border-b-2 border-gray-300">
                    Org.
                </a>
            </ul>
        </div>
        <form wire:submit.prevent="create">
            <div class="w-full p-2 md:w-full">
                @if ($errors->any())
                    <div class="p-3 mb-3 text-sm text-red-100 bg-red-600 rounded-lg" role="alert">
                        <strong>Please fix the following errors:</strong>
                        <ul class="mt-1 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ $this->form }}
                    <button type="submit" class="w-full py-2 mt-3 text-white rounded-lg hover:bg-green-300 bg-gradient-to-r from-green-700 to-green-500">
                        Register
                    </button>
                <div class="flex flex-col justify-center w-full mt-2 text-center">
                    <a href="{{route('login')}}" class="underline hover:text-green-500">Have an account?</a>
                </div>
            <div>
        </form>
        <x-filament-actions::modals/>


</div>

