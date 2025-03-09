<x-app-layout>

    <main>
   <!-- Show Header -->
  @include('category.partials.header')

  <!-- Show Table Product -->
  

  @include('category.partials.show')

  @foreach ($categorys as $cat)
      {{ $cat->id }}
  @endforeach
  
  <!-- Breadcrumb -->
  @include('category.partials.breadcrumb')

  
  <!-- Edit Product Drawer -->
  @include('category.partials.edit')

  {{ $cat->id }}
  
  <!-- Delete Product Drawer -->
  @include('category.partials.delete')

  
  
  <!-- Add Product Drawer -->
  @include('category.partials.create')

  
  
      </main>

</x-guest-layout>