<div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    <h3 class="mb-4 text-xl font-semibold dark:text-white">Password information</h3>
    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="update_password_current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current password</label>
                <input type="text" name="current_password" id="update_password_current_password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="••••••••" autocomplete="current-password" required>
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="update_password_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New password</label>
                <input name="password" data-popover-target="popover-password" data-popover-placement="bottom" type="password" id="update_password_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required>
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="update_password_password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                <input type="text" name="password_confirmation" id="update_password_password_confirmation" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="••••••••" autocomplete="new-password" required>
                {{-- Password Require --}}
                @include('profile.partials.password-require')
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />

            </div>

            {{-- <div class="col-span-6 sm:col-full">
                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Save all</button>
            </div> --}}
            <div class="col-span-6 sm:col-full">
                <x-primary-button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">{{ __('Save') }}</x-primary-button>
    
                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
        
    </form>
</div>