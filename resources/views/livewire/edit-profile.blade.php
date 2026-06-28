<div class="flex justify-center pt-2 md:items-center md:justify-center">
    <div class="flex flex-col items-center w-full gap-3 px-2 ">
        <div class="flex items-start w-full md:w-1/2">
            <a href="{{route('profile')}}" class="font-bold text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </a>

        </div>
            <h1 class="text-xl font-bold text-white">Edit Profile</h1>
            <div class="w-full md:w-1/2" wire:key="edit-profile-form-wrapper">
                <form wire:submit="update">
                    {{ $this->form }}

                    <button type="submit" class="mt-5 w-full text-center py-2.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg ">
                        Save
                    </button>

                </form>
            </div>
            <div class="w-full mt-3 mb-3 md:w-1/2 bg-black-500" style="height: 2px; border-bottom:solid rgb(197, 185, 185) 2px;"></div>
        <h1 class="block text-sm font-medium leading-6 text-white">Change Password</h1>

        <form wire:submit="updatePassword" class="flex-col w-full d-flex md:w-1/2">
                <div class="w-full col-span-full ">
                    <label for="street-address" class="block text-sm font-medium leading-6 text-white">Old Password</label>
                    <div class="mt-2">
                      <input type="password" name="old_password"  wire:model="current_password" id="old_password" autocomplete="current-password" class="block w-full rounded-md border-1 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div>
                        @error('current_password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                <div class="w-full col-span-full md:w-full">
                    <label for="street-address" class="block text-sm font-medium leading-6 text-white">New Password </label>
                    <div class="mt-2">
                      <input type="password" wire:model="password" name="new_password" id="new_password" autocomplete="new-password" class="block w-full rounded-md border-1 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                  </div>
                <div class="w-full col-span-full md:w-full">
                    <label for="street-address" class="block text-sm font-medium leading-6 text-white">Confirm Password</label>
                    <div class="mt-2">
                      <input type="password" wire:model="password_confirmation" name="confirm_password" id="confirm_password" autocomplete="new-password" class="block w-full rounded-md border-1 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                  </div>

                <button type="submit" class="mt-3 font-bold text-white bg-green-500 btn hover:bg-green-400">Update Password</button>
            </form>

            <div class="w-full mt-3 mb-3 md:w-1/2 bg-black-500" style="height: 2px; border-bottom:solid rgb(197, 185, 185) 2px;"></div>
        <h1 class="block text-sm font-medium leading-6 text-gray-900">Delete account</h1>

        <section class="w-full space-y-6 md:w-1/2">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Delete Account') }}
                </h2>

                <p class="mt-1 text-sm text-white">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
            </header>

            <x-danger-button
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            >{{ __('Delete Account') }}</x-danger-button>

            <x-modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" focusable>
                <form wire:submit="deleteUser" class="p-6">

                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                        <x-text-input
                            wire:model="password"
                            id="password"
                            name="password"
                            type="password"
                            class="block w-3/4 mt-1"
                            placeholder="{{ __('Password') }}"
                        />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex justify-end mt-6">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            {{ __('Cancel') }}
                        </x-secondary-button>

                        <x-danger-button class=" ms-3">
                            {{ __('Delete Account') }}
                        </x-danger-button>
                    </div>
                </form>
            </x-modal>
        </section>

    </div>
</div>
