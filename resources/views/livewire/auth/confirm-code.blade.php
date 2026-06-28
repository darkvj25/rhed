<div class="relative z-50 flex flex-col w-full pt-3 h-dvh">

    <div class="flex flex-col items-center justify-center max-w-sm gap-2 mx-auto">
        <img src="/logo/veritas_logo.png" class="w-20 h-20 ">
        <h1 class="text-xl font-bold text-white">Veritas College of Irosin</h1>
    </div>


    <form class="max-w-sm mx-auto mt-3" wire:submit.prevent="verifyCode">
        <div class="flex justify-center w-full gap-2">
            <div>
                <label for="code-1" class="sr-only">First code</label>
                <input type="text" maxlength="1"  wire:model.defer="code1" data-focus-input-init data-focus-input-next="code-2" id="code-1" class="block py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg w-9 h-9 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div>
                <label for="code-2" class="sr-only">Second code</label>
                <input type="text" maxlength="1"  wire:model.defer="code2" data-focus-input-init data-focus-input-prev="code-1" data-focus-input-next="code-3" id="code-2" class="block py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg w-9 h-9 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div>
                <label for="code-3" class="sr-only">Third code</label>
                <input type="text" maxlength="1"  wire:model.defer="code3" data-focus-input-init data-focus-input-prev="code-2" data-focus-input-next="code-4" id="code-3" class="block py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg w-9 h-9 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div>
                <label for="code-4" class="sr-only">Fourth code</label>
                <input type="text" maxlength="1"  wire:model.defer="code4" data-focus-input-init data-focus-input-prev="code-3" data-focus-input-next="code-5" id="code-4" class="block py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg w-9 h-9 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div>
                <label for="code-5" class="sr-only">Fifth code</label>
                <input type="text" maxlength="1"  wire:model.defer="code5" data-focus-input-init data-focus-input-prev="code-4" data-focus-input-next="code-6" id="code-5" class="block py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg w-9 h-9 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
            <div>
                <label for="code-6" class="sr-only">Sixth code</label>
                <input type="text" maxlength="1"  wire:model.defer="code6" data-focus-input-init data-focus-input-prev="code-5" id="code-6" class="block py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg w-9 h-9 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required />
            </div>
        </div>
        <p id="helper-text-explanation" class="mt-2 ml-3 text-sm text-white">Please confirm the verification code sent to your email</p>

        <div class="px-2">
            <button type="submit" class="w-full py-2 mt-3 text-white rounded-lg hover:bg-green-300 bg-gradient-to-r from-green-700 to-green-500">Submit</button>

        </div>

    </form>
    <a href="{{route('login')}}" class="text-center text-white underline ">Login</a>
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
    @if (session()->has('error'))
    <div class="fixed top-0 right-2">
        <div class="relative alert alert-danger d-flex align-items-center" id="error-alert" role="alert">
            <svg class="flex-shrink-0 bi me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                {{ session('error') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif
</div>
