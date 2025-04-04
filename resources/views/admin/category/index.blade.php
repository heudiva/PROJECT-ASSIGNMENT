<x-app-layout>

    <main>
   <!-- Show Header -->
  @include('admin.category.partials.header')

  <!-- Show Table Product -->
  @include('admin.category.show')

  

  <!-- Breadcrumb -->
  {{-- @include('category.partials.breadcrumb') --}}

  
  <!-- Edit Product Drawer -->
  @include('admin.category.edit')

  
  <!-- Delete Product Drawer -->
  @include('admin.category.delete')

  
  
  <!-- Add Product Drawer -->
  @include('admin.category.create')


  
      </main>

</x-guest-layout>