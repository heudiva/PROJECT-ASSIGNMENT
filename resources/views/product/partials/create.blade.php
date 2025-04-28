 <!-- Add Product Drawer
<div id="drawer-create-product" class="fixed top-0 left-0 z-50 w-full h-screen max-w-3xl p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-create-product-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
    <button type="button" data-drawer-dismiss="drawer-create-product" aria-controls="drawer-create-product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <form id="productForm" method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">

       <div class="grid gap-4 sm:grid-cols-3 sm:gap-6 ">
    <div class="space-y-4 sm:col-span-2 sm:space-y-6">
    <div>
         <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
         <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="" placeholder="Type product name" required="">
    </div>

    <div>
        <label for="name_khmer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Khmer</label>
        <input type="text" name="name_khmer" id="name_khmer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
    </div>
     <div>
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea name="description" id="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5​​​​​  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write product description"></textarea>
    </div>
     <div>
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
    <input type="file" name="image" id="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">


    <div id="imagePreview" class="mt-4" style="display: none;">
        <img id="previewImage" src="#" alt="Preview" class="max-w-full h-auto max-h-48">
    </div>
</div>

</div>

 <div class="space-y-4 sm:space-y-6">
    <div>
        <label for="barcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bar Code</label>
        <input type="barcode" name="barcode" id="barcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">
    </div>
    <div>
        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <select name="category_id" id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
    <option value="">---Select Category---</option>
</select>
    </div>


    <div>
        <label for="qty_on_hand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">qty on hand</label>
        <input type="qty_on_hand" name="qty_on_hand" id="qty_on_hand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
    </div>
    <div>
        <label for="qty_alert" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">qty Alert</label>
        <input type="qty_alert" name="qty_alert" id="qty_alert" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
    </div>

   <div>
    <label for="stocktype" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stocktype</label>
    <select id="stocktype" name="stocktype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <option value="">---Select Stocktype---</option>
        <option value="Cut Stock">Cut Stock</option>
        <option value="Not Cut Stock">Not Cut Stock</option>
    </select>
</div>
    </div>
    </div>
        <div class="grid grid-cols-2 gap-4 mt-6 sm:w-1/2">
            <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create product</button>
            <button type="button" data-drawer-dismiss="drawer-create-product" aria-controls="drawer-create-product" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                Cancel
            </button>
        </div>
    </form>
</div>

@section('scripts')
<script>
    $(document).ready(function() {
        // Load categories via AJAX
        $.ajax({
            url: "{{ route('categories.get') }}",
            method: "GET",
            dataType: "json",
            success: function(response) {
                let options = '<option value="">---Select Category---</option>';
                $.each(response, function(index, category) {
                    options += `<option value="${category.id}">${category.name}</option>`;
                });
                $('#category_id').html(options);
            },
            error: function(xhr) {
                console.error("Error:", xhr.responseText);
                alert("Failed to load categories. Please try again.");
            }
        });

        // Image preview
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const previewDiv = document.getElementById('imagePreview');
            const previewImage = document.getElementById('previewImage');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewDiv.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                previewDiv.style.display = 'none';
            }
        });

        // Form submission
    //     $('#productForm').on('submit', function(e) {
    //         e.preventDefault();

    //         let formData = new FormData(this);

    //         $.ajax({
    //             url: $(this).attr('action'),
    //             method: 'POST',
    //             data: formData,
    //             processData: false,
    //             contentType: false,
    //             success: function(response) {
    //                 alert(response.message);
    //                 $('#productForm')[0].reset();
    //                 $('#imagePreview').hide();
    //                 // Optional: Close drawer or redirect
    //                 window.location.href = "";
    //             },
    //             error: function(xhr) {
    //                 let errors = xhr.responseJSON.errors;
    //                 let errorMessage = '';
    //                 $.each(errors, function(key, value) {
    //                     errorMessage += value + '\n';
    //                 });
    //                 alert(errorMessage);
    //             }
    //         });
    //     });
     });
</script>
@endsection

<script>
  $(document).ready(function() {
        $('#productForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.product.store') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // បង្ហាញសារជ័យគុណ
                    alert(response.message);

                    // បន្ថែមទិន្នន័យថ្មីទៅក្នុងតារាង
                    let newRow = `
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center mr-3">
                                    <img src="{{ asset('storage/${response.data.image}') }}" alt="Product Image" class="h-8 w-auto mr-3">
                                </div>
                            </th>
                            <td class="px-4 py-3">${response.data.name}</td>
                            <td class="px-4 py-3">${response.data.name_khmer}</td>
                            <td class="px-4 py-3">${response.data.barcode}</td>
                            <td class="px-4 py-3">${response.data.category_id}</td>
                            <td class="px-4 py-3">${response.data.qty_on_hand}</td>
                            <td class="px-4 py-3">${response.data.qty_alert}</td>
                            <td class="px-4 py-3">${response.data.stocktype}</td>
                        </tr>
                    `;

                    // បន្ថែមជួរថ្មីទៅក្នុងតារាង
                    $('tbody').append(newRow);

                    // ជម្រះទម្រង់
                    $('#productForm')[0].reset();
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '';
                    for (let field in errors) {
                        errorMessage += errors[field][0] + '\n';
                    }
                    alert(errorMessage);
                }
            });
        });
    });
</script> -->
