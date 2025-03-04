@extends('dashboard')
@section('layoutContent')

<div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
    <div class="mb-4 col-span-full xl:mb-2">
        <nav class="flex mb-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
              <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                  <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                  Home
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Users</a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Settings</span>
                </div>
              </li>
            </ol>
        </nav>
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">User settings</h1>
    </div>
    <!-- Right Content -->
    <div class="col-span-full xl:col-auto">
        {{-- Profile picture --}}
        @include('profile.partials.profile-picture')

        {{-- Language & Time --}}
        @include('profile.partials.language-time')

        {{-- Social accounts --}}
        @include('profile.partials.social-accounts')

        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flow-root">
                <h3 class="text-xl font-semibold dark:text-white">Other accounts</h3>
                <ul class="mb-6 divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-4">
                        <div class="flex justify-between xl:block 2xl:flex align-center 2xl:space-x-4">
                            <div class="flex space-x-4 xl:mb-4 2xl:mb-0">
                                <div>
                                    <img class="w-6 h-6 rounded-full" src="/images/users/bonnie-green.png" alt="Bonnie image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-base font-semibold text-gray-900 leading-none truncate mb-0.5 dark:text-white">
                                        Bonnie Green
                                    </p>
                                    <p class="mb-1 text-sm font-normal truncate text-primary-700 dark:text-primary-500">
                                        New York, USA
                                    </p>
                                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400">
                                        Last seen: 1 min ago
                                    </p>
                                </div>
                            </div>
                            <div class="inline-flex items-center w-auto xl:w-full 2xl:w-auto">
                                <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Disconnect</a>
                            </div>
                        </div>
                    </li>
                    <li class="py-4">
                        <div class="flex justify-between xl:block 2xl:flex align-center 2xl:space-x-4">
                            <div class="flex space-x-4 xl:mb-4 2xl:mb-0">
                                <div>
                                    <img class="w-6 h-6 rounded-full" src="/images/users/jese-leos.png" alt="Jese image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-base font-semibold text-gray-900 leading-none truncate mb-0.5 dark:text-white">
                                        Jese Leos
                                    </p>
                                    <p class="mb-1 text-sm font-normal truncate text-primary-700 dark:text-primary-500">
                                        California, USA
                                    </p>
                                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400">
                                        Last seen: 2 min ago
                                    </p>
                                </div>
                            </div>
                            <div class="inline-flex items-center w-auto xl:w-full 2xl:w-auto">
                                <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Disconnect</a>
                            </div>
                        </div>
                    </li>
                    <li class="py-4">
                        <div class="flex justify-between xl:block 2xl:flex align-center 2xl:space-x-4">
                            <div class="flex space-x-4 xl:mb-4 2xl:mb-0">
                                <div>
                                    <img class="w-6 h-6 rounded-full" src="/images/users/thomas-lean.png" alt="Thomas image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-base font-semibold text-gray-900 leading-none truncate mb-0.5 dark:text-white">
                                        Thomas Lean
                                    </p>
                                    <p class="mb-1 text-sm font-normal truncate text-primary-700 dark:text-primary-500">
                                        Texas, USA
                                    </p>
                                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400">
                                        Last seen: 1 hour ago
                                    </p>
                                </div>
                            </div>
                            <div class="inline-flex items-center w-auto xl:w-full 2xl:w-auto">
                                <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Disconnect</a>
                            </div>
                        </div>
                    </li>
                    <li class="pt-4">
                        <div class="flex justify-between xl:block 2xl:flex align-center 2xl:space-x-4">
                            <div class="flex space-x-4 xl:mb-4 2xl:mb-0">
                                <div>
                                    <img class="w-6 h-6 rounded-full" src="/images/users/lana-byrd.png" alt="Lana image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-base font-semibold text-gray-900 leading-none truncate mb-0.5 dark:text-white">
                                        Lana Byrd
                                    </p>
                                    <p class="mb-1 text-sm font-normal truncate text-primary-700 dark:text-primary-500">
                                        Texas, USA
                                    </p>
                                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400">
                                        Last seen: 1 hour ago
                                    </p>
                                </div>
                            </div>
                            <div class="inline-flex items-center w-auto xl:w-full 2xl:w-auto">
                                <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Disconnect</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div>
                    <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save all</button>
                </div>
            </div>
        </div>
    </div>
    {{-- General information --}}
    @include('profile.partials.general-info')

</div>
<div class="grid grid-cols-1 px-4 xl:grid-cols-2 xl:gap-4">
    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
        <div class="flow-root">
            <h3 class="text-xl font-semibold dark:text-white">Alerts & Notifications</h3>
            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">You can set up Themesberg to get notifications</p>
            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                <!-- Item 1 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Company News</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Get Themesberg news, announcements, and product updates</div>
                    </div>
                    <label for="company-news" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="company-news" class="sr-only">
                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 2 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Account Activity</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Get important notifications about you or activity you've missed</div>
                    </div>
                    <label for="account-activity" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="account-activity" class="sr-only" checked>
                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 3 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Meetups Near You</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Get an email when a Dribbble Meetup is posted close to my location</div>
                    </div>
                    <label for="meetups" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="meetups" class="sr-only" checked>
                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 4 -->
                <div class="flex items-center justify-between pt-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">New Messages</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Get Themsberg news, announcements, and product updates</div>
                    </div>
                    <label for="new-messages" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="new-messages" class="sr-only">
                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
            </div>
            <div class="mt-6">
                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save all</button>
            </div>
        </div>
    </div>
    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
        <div class="flow-root">
            <h3 class="text-xl font-semibold dark:text-white">Email Notifications</h3>
            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">You can set up Themesberg to get email notifications </p>
            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                <!-- Item 1 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Rating reminders</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send an email reminding me to rate an item a week after purchase</div>
                    </div>
                    <label for="rating-reminders" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="rating-reminders" class="sr-only">
                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 2 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Item update notifications</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send user and product notifications for you</div>
                    </div>
                    <label for="item-update" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="item-update" class="sr-only" checked>
                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 3 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Item comment notifications</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send me an email when someone comments on one of my items</div>
                    </div>
                    <label for="item-comment" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="item-comment" class="sr-only" checked>
                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 4 -->
                <div class="flex items-center justify-between pt-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Buyer review notifications</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send me an email when someone leaves a review with their rating</div>
                    </div>
                    <label for="buyer-rev" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="buyer-rev" class="sr-only">
                        <span class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
            </div>
            <div class="mt-6">
                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save all</button>
            </div>
        </div>
    </div>
</div>
@endsection
