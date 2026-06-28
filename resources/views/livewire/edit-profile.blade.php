<div class="max-w-4xl px-4 py-8 mx-auto sm:px-6 lg:px-8">
    <!-- Header/Back Navigation -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center gap-4">
            <a href="{{ route('profile') }}" class="transition-colors duration-200 group p-2 rounded-full hover:bg-academic-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-academic-accent group-hover:text-emerald-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </a>
            <h1 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Edit Profile</h1>
        </div>
    </div>

    <div class="space-y-8">
        <!-- Edit Profile Form Section -->
        <section class="overflow-hidden border shadow-sm bg-academic-800 rounded-xl border-academic-700">
            <div class="p-6 border-b border-academic-700">
                <h2 class="text-lg font-semibold text-emerald-400">Personal Information</h2>
                <p class="mt-1 text-sm text-emerald-100/60">Update your account's profile information and avatar.</p>
            </div>

            <div class="p-6" wire:key="edit-profile-form-wrapper">
                <form wire:submit="update" class="space-y-6">
                    <div class="filament-form-container">
                        {{ $this->form }}
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white transition-all duration-200 rounded-lg shadow-md bg-academic-accent hover:bg-emerald-500 focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-academic-950 active:scale-95">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Password Change Section -->
        <section class="overflow-hidden border shadow-sm bg-academic-800 rounded-xl border-academic-700">
            <div class="p-6 border-b border-academic-700">
                <h2 class="text-lg font-semibold text-emerald-400">Security</h2>
                <p class="mt-1 text-sm text-emerald-100/60">Ensure your account is using a long, random password to stay secure.</p>
            </div>

            <div class="p-6">
                <form wire:submit="updatePassword" class="max-w-xl space-y-6">
                    <div>
                        <label for="old_password" class="block text-sm font-medium text-emerald-100">Current Password</label>
                        <div class="mt-1.5">
                            <input type="password" wire:model="current_password" id="old_password"
                                class="block w-full px-4 py-2 border-0 rounded-lg bg-academic-900 text-white ring-1 ring-inset ring-academic-700 placeholder:text-emerald-100/30 focus:ring-2 focus:ring-inset focus:ring-academic-accent sm:text-sm"
                                placeholder="••••••••">
                        </div>
                        @error('current_password') <p class="mt-2 text-sm text-red-400 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="new_password" class="block text-sm font-medium text-emerald-100">New Password</label>
                        <div class="mt-1.5">
                            <input type="password" wire:model="password" id="new_password"
                                class="block w-full px-4 py-2 border-0 rounded-lg bg-academic-900 text-white ring-1 ring-inset ring-academic-700 placeholder:text-emerald-100/30 focus:ring-2 focus:ring-inset focus:ring-academic-accent sm:text-sm"
                                placeholder="••••••••">
                        </div>
                        @error('password') <p class="mt-2 text-sm text-red-400 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="confirm_password" class="block text-sm font-medium text-emerald-100">Confirm New Password</label>
                        <div class="mt-1.5">
                            <input type="password" wire:model="password_confirmation" id="confirm_password"
                                class="block w-full px-4 py-2 border-0 rounded-lg bg-academic-900 text-white ring-1 ring-inset ring-academic-700 placeholder:text-emerald-100/30 focus:ring-2 focus:ring-inset focus:ring-academic-accent sm:text-sm"
                                placeholder="••••••••">
                        </div>
                        @error('password_confirmation') <p class="mt-2 text-sm text-red-400 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex justify-end pt-2">
                        <button type="submit" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white transition-all duration-200 rounded-lg shadow-md bg-academic-accent hover:bg-emerald-500 focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-academic-950 active:scale-95">
                            Update Password
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Danger Zone Section -->
        <section class="overflow-hidden border shadow-sm bg-academic-900/50 rounded-xl border-red-900/30">
            <div class="p-6 border-b border-red-900/20 bg-red-950/10">
                <h2 class="text-lg font-semibold text-red-400">Danger Zone</h2>
                <p class="mt-1 text-sm text-red-200/60">Irreversible actions for your account.</p>
            </div>

            <div class="p-6">
                <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
                    <div>
                        <h3 class="text-sm font-semibold text-white">Delete Account</h3>
                        <p class="mt-1 text-sm text-emerald-100/60">Once your account is deleted, all of its resources and data will be permanently deleted.</p>
                    </div>

                    <button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-red-400 transition-all duration-200 border border-red-900/50 rounded-lg hover:bg-red-900/20 active:scale-95"
                    >
                        Delete Account
                    </button>
                </div>

                <x-modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" focusable>
                    <form wire:submit="deleteUser" class="p-8 bg-academic-950">
                        <h2 class="text-xl font-bold text-white">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h2>

                        <p class="mt-3 text-sm text-emerald-100/70">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mt-6">
                            <label for="delete_password" class="sr-only">{{ __('Password') }}</label>
                            <input
                                wire:model="password"
                                id="delete_password"
                                name="password"
                                type="password"
                                class="block w-full px-4 py-2 border-0 rounded-lg bg-academic-900 text-white ring-1 ring-inset ring-academic-700 placeholder:text-emerald-100/30 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm"
                                placeholder="{{ __('Password') }}"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex justify-end gap-3 mt-8">
                            <button type="button" x-on:click="$dispatch('close')" class="px-4 py-2 text-sm font-medium text-emerald-100 rounded-lg hover:bg-academic-800">
                                {{ __('Cancel') }}
                            </button>

                            <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-red-600 rounded-lg hover:bg-red-500 focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-academic-950">
                                {{ __('Delete Account') }}
                            </button>
                        </div>
                    </form>
                </x-modal>
            </div>
        </section>
    </div>
</div>
