<x-app-layout>
    
<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-900  antialiased">
    <div class="mx-auto ">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        {{-- Header --}}
        @include('admin.product.partials.header')

        {{-- Show All Product --}}
        @include('admin.product.show')

        {{-- Breadcrumb button pagination --}}
        {{-- @include('admin.product.partials.breadcrumb') --}}

        </div>
    </div>
</section>
<!-- End block -->
@include('admin.product.partials.end-block')

<!-- drawer component create-->
@include('admin.product.create')

<!-- drawer component edit-->
@include('admin.product.edit')

<!-- Preview Drawer -->
@include('admin.product.preview')

<!-- Delete Modal -->
@include('admin.product.delete')

  <!-- Add Category Drawer -->
  @include('admin.category.create')

  <!-- Add supplier Modal -->
  @include('admin.supplier.create')
        

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</x-guest-layout>