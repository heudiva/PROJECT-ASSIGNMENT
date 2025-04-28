<x-app-layout>

<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-900  antialiased">
    <div class="mx-auto ">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        {{-- Header --}}
        @include('product.partials.header')

        {{-- Show All Product --}}
        @include('product.show')

        {{-- Breadcrumb button pagination --}}
        @include('product.partials.breadcrumb')

        </div>
    </div>
</section>
<!-- End block -->
@include('product.partials.end-block')

<!-- drawer component -->

<!-- Preview Drawer -->
@include('product.preview')

@include('product.partials.create')

@include('product.partials.create_update')
<!-- Delete Modal -->
@include('product.delete')


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</x-guest-layout>


