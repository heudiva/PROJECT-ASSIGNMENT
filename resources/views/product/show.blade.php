<div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400"​​​>
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="p-4">
                <div class="flex items-center">
                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 checkbox">
                    <label for="checkbox-all" class="sr-only">checkbox</label>
                </div>
            </th>
            <th scope="col" class="p-4">Image</th>
            <th scope="col" class="p-4">Product name</th>
            <th scope="col" class="p-4">Product name_kh</th>
            <th scope="col" class="p-4">Barcode</th>
            <th scope="col" class="p-4">Category</th>
            <th scope="col" class="p-4">Qty Stock</th>
            <th scope="col" class="p-4">Qty Alert</th>
            <th scope="col" class="p-4">Description</th>
            <th scope="col" class="p-4">Stocktype</th>
            <th scope="col" class="p-4">Action</th>
        </tr>
    </thead>
    <tbody id="myTable">
        @foreach ($products as $product)
        <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700"​data-product-id="{{ $product->product_id }}">
            <td class="p-4 w-4">
                <div class="flex items-center">
                    <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()" class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 checkbox">
                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                </div>
            </td>
              <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/default.png') }}" alt="Product Image" class="h-8 w-auto mr-2">
                </div>
            </td>
            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                <div class="flex items-center">
                    <div class="h-4 w-4 rounded-full inline-block mr-2 "> {{ $product->name }}</div>
                </div>
            </td>
            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center">
                    <div class="h-4 w-4 rounded-full inline-block mr-2 "> {{ $product->name_khmer }}</div>
                </div>
            </td>
             <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center">
                    <div class="h-4 w-4 rounded-full inline-block mr-2 "> {{ $product->barcode }}</div>
                </div>
            </td>
            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center">
                    <div class="h-4 w-4 rounded-full inline-block mr-2 "> {{ $product->category->name }}</div></div>
                </div>
            </td>
            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center">
                    <div class="h-4 w-4 rounded-full inline-block mr-2 "> {{ $product->qty_on_hand }}</div>
                </div>
            </td>
            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center">
                    <div class="h-4 w-4 rounded-full inline-block mr-2 "> {{ $product->qty_alert }}</div>
                </div>
            </td>
            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center">
                    <div class="h-4 w-4 rounded-full inline-block mr-2 "> {{ $product->description }}</div>
                </div>
            </td>
            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center">
                    <div class="h-4 w-4 rounded-full inline-block mr-2 "> {{ $product->stocktype }}</div>
                </div>
            </td>
            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center space-x-4">

                    <button   type="button"
                            class="edit-product-btn py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            data-drawer-target="drawer-update-product"
                            data-drawer-show="drawer-update-product"
                            data-product-id="{{ $product->product_id }}"
                            data-product-name="{{ $product->name }}"
                            data-product-name-khmer="{{ $product->name_khmer }}"
                            data-product-barcode="{{ $product->barcode }}"
                            data-product-category-id="{{ $product->category_id }}"
                            data-product-qty-on-hand="{{ $product->qty_on_hand }}"
                            data-product-qty-alert="{{ $product->qty_alert }}"
                            data-product-description="{{ $product->description }}"
                            data-product-stocktype="{{ $product->stocktype }}"
                            data-product-image="{{ $product->image ? asset('storage/'.$product->image) : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                        </svg>
                        Edit
                    </button>
                    <button type="button" data-drawer-target="drawer-read-product-advanced" data-drawer-show="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced" class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 -ml-0.5">
                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                        </svg>
                        Preview
                    </button>
                   <button type="button" data-modal-target="delete-modal" data-modal-toggle="delete-modal" data-product-id="{{ $product->product_id }}" class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                Delete
            </button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>



<script>
      $(document).ready(function() {
       // ជ្រើស checkbox ទាំងអស់ នៅពេលចុច "Select All"
    $('#checkbox-all').on('change', function () {
        $('.checkbox').prop('checked', $(this).prop('checked'));
    });

    // បើ checkbox មួយណាមិនបានជ្រើសទេ វានឹងដកការជ្រើសចេញពី "Select All"
    $('.checkbox').on('change', function () {
        if ($('.checkbox:checked').length === $('.checkbox').length) {
            $('#checkbox-all').prop('checked', true);
        } else {
            $('#checkbox-all').prop('checked', false);
        }
    });
});
</script>

