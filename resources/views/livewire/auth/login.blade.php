<div>
        <form wire:submit="create">
            <div class="w-full p-2" >{{ $this->form }}
                <div class="px-2 mt-2">
                    @error('email') <span class="text-red-500 error" >{{ $message }}</span> @enderror
                </div>
            <button type="submit" class="w-full py-2 mt-3 text-white rounded-lg hover:bg-green-300 bg-gradient-to-r from-green-700 to-green-500">
                Login
            </button>
            <div class="flex flex-col justify-center w-full mt-2 text-center">
                <a href="{{route('forget-password')}}" >Forgot password?</a>
                <a href="{{route('register')}}" class="underline hover:text-green-500">Create new account</a>
            </div>

        </div>
        </form>
        <x-filament-actions::modals />
        @if (session()->has('message'))
        <div class="fixed top-0 right-2">
            <div class="relative alert alert-success d-flex align-items-center" id="error-alert" role="alert">
                <svg class="flex-shrink-0 bi me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    {{ session('message') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
</div>
