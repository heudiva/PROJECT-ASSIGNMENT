<x-app-layout>

<div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
    {{-- Breadcrumb --}}
    @include('profile.partials.breadcrumb')
    
    <!-- Right Content -->
    <div class="col-span-full xl:col-auto">
        {{-- Profile picture --}}
        @include('profile.partials.profile-picture')

        {{-- Social accounts --}}
        @include('profile.partials.social-accounts')
        
        {{-- Language & Time --}}
        @include('profile.partials.language-time')

        {{-- Delete Account --}}
        @include('profile.partials.delete-user')

        {{-- Other accounts --}}
        {{-- @include('profile.partials.other-accounts') --}}
        
    </div>
    <div class="col-span-2">
      {{-- General information --}}
      @include('profile.partials.general-info')
      
      {{-- Password information --}}
      @include('profile.partials.password-information')
      
      {{-- Sessions --}}
      @include('profile.partials.sessions')

  </div>

</div>
<div class="grid grid-cols-1 px-4 xl:grid-cols-2 xl:gap-4">
    {{-- Alerts & Notifications --}}
    {{-- @include('profile.partials.alerts-notifi') --}}

    {{-- Email Notifications --}}
    {{-- @include('profile.partials.email-notificat') --}}
    
</div>

</x-app-layout>

