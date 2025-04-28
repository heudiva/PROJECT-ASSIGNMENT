<!-- drawer component -->
<!-- drawer component -->
<div id="drawer-update-product" class="fixed top-0 left-0 z-50 w-full h-screen max-w-3xl p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-update-product-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Product Form</h5>
    <button type="button" data-drawer-dismiss="drawer-update-product" aria-controls="drawer-update-product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <form id="productForm" data-mode="create" method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
        @csrf

         <input type="hidden" name="_method" id="hidden_method" value="POST">

    <input type="hidden" name="product_id" id="product_id">

        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
            <!-- Left Column -->
            <div class="space-y-4 sm:col-span-2 sm:space-y-6">
                <!-- Product Name -->
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name *</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required>
                </div>

                <!-- Name Khmer -->
                <div>
                    <label for="name_khmer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Khmer *</label>
                    <input type="text" name="name_khmer" id="name_khmer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name in Khmer" required>
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea name="description" id="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write product description"></textarea>
                </div>

                <!-- Image Upload -->
                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Image</label>
                    <input type="file" name="image" id="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <div id="imagePreview" class="mt-4 hidden">
                        <img id="previewImage" src="#" alt="Preview" class="max-w-full h-auto max-h-48 rounded-lg">
                        <button type="button" id="removeImageBtn" class="mt-2 text-red-600 text-sm hover:text-red-800">Remove Image</button>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4 sm:space-y-6">
                <!-- Barcode -->
                <div>
                    <label for="barcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barcode</label>
                    <input type="text" name="barcode" id="barcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter barcode">
                </div>

                <!-- Category -->
                <div>
                    <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category *</label>
                    <select name="category_id" id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        <option value="">--- Select Category ---</option>
                        <!-- Categories will be loaded via AJAX -->
                    </select>
                </div>

                <!-- Quantity Fields -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="qty_on_hand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity on Hand *</label>
                        <input type="number" name="qty_on_hand" id="qty_on_hand" min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0" required>
                    </div>
                    <div>
                        <label for="qty_alert" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Low Stock Alert *</label>
                        <input type="number" name="qty_alert" id="qty_alert" min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0" required>
                    </div>
                </div>

                <!-- Stock Type -->
                <div>
                    <label for="stocktype" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock Type *</label>
                    <select id="stocktype" name="stocktype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        <option value="">--- Select Stock Type ---</option>
                        <option value="Cut Stock">Cut Stock</option>
                        <option value="Not Cut Stock">Not Cut Stock</option>
                    </select>
                </div>
            </div>
        </div>

                <!-- Form Actions -->
                <div class="flex flex-wrap gap-4 mt-6">
                    <!-- Update/Save Button -->
                    <button type="submit" id="submitBtn" class="flex items-center justify-center text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 transition-colors duration-200 min-w-[120px]">
                    <!-- រូបតំណាងថ្មីស្រស់ស្អាត -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    <span id="submitBtnText">Save</span>
                    <span id="submitBtnSpinner" class="hidden ml-2">
                        <svg class="w-4 h-4 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </span>
                </button>

                    <!-- Close Button -->
                    <button
                        type="button"
                        id="closeFormBtn"
                        class="flex items-center justify-center gap-2 text-gray-600 bg-white hover:bg-gray-50 focus:ring-2 focus:ring-gray-200 rounded-lg border border-gray-300 text-sm font-medium px-4 py-2.5 transition-all duration-200 ease-in-out hover:shadow-sm focus:outline-none focus:z-10 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600 dark:focus:ring-gray-500 min-w-[100px]"
                        onclick="closeProductForm()"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span>Close</span>
                    </button>

                    <!-- Delete Button -->
                    <button
                        type="button"
                        id="deleteProductBtn"
                        class="flex items-center justify-center px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition-colors duration-200 min-w-[100px]"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete
                    </button>
                </div>
    </form>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
 $(document).ready(function() {

      // ពិនិត្យមើលថាត្រូវបើក drawer ឡើងវិញឬអត់
   if (localStorage.getItem('reopenDrawer') === 'true') {
    const mode = localStorage.getItem('drawerMode');

    // បើកផ្ទាំងសម្រាប់តែករណីបង្កើតថ្មីប៉ុណ្ណោះ
    if (mode === 'create') {
        // សម្អាតហើយបើក drawer
        resetForm(mode, "{{ route('admin.product.store') }}", 'POST');
        $('#drawer-update-product')
            .removeClass('translate-x-full')
            .addClass('translate-x-0');
    }

    // សម្អាត localStorage គ្រប់ករណី
    localStorage.removeItem('reopenDrawer');
    localStorage.removeItem('drawerMode');
}
   // ពេលចុចប៊ូតុង Close
    // $('#closeFormBtn').click(function() {
    //     closeProductForm();
    // });

    // catefory in combo box
    loadCategories();

    // ពេលចុច create product
    $('#createProductButton').click(function() {
        resetForm('create', "{{ route('admin.product.store') }}", 'POST');
        $('#imagePreview').hide();
    });

    // ពេលចុច button edit index
    $(document).on('click', '.edit-product-btn', function () {
        // ចាប់យក Data Attributes ពី Button និងរៀបចំជា Object
        const productData = {
            product_id: $(this).data('product-id'),
            name: $(this).data('product-name'),
            name_khmer: $(this).data('product-name-khmer'),
            barcode: $(this).data('product-barcode'),
            category_id: $(this).data('product-category-id'),
            qty_on_hand: $(this).data('product-qty-on-hand'),
            qty_alert: $(this).data('product-qty-alert'),
            description: $(this).data('product-description'),
            stocktype: $(this).data('product-stocktype'),
            image: $(this).data('product-image')
        };

        // កំណត់ URL សម្រាប់ Submit Form Update
        const updateUrl = "{{ route('admin.product.update') }}";

        // សម្អាត Form មុន (clear/reset)
        resetForm('update', updateUrl, 'POST');

        // បំពេញ Data ទៅក្នុង Form
        fillForm(productData);

        // បញ្ចូល product_id ទៅក្នុង input hidden
        $('#product_id').val(productData.product_id);

        // បង្ហាញ Drawer សម្រាប់ Edit Product
        $('#drawer-update-product').removeClass('translate-x-full');
    });

    // ពេលផ្លាស់ប្តូររូបភាព
    $('#image').change(function(e) {
        previewImage(this);
    });

    // ពេលដាក់ស្នើទម្រង់
    $('#productForm').submit(function(e) {
        e.preventDefault();
        submitForm();
    });

    // ពេលចុចប៊ូតុងលុប
    $('#deleteProductBtn').click(function() {
        if($('#productForm').data('mode') === 'update') {
            deleteProduct();
        }
    });
});

// ======= មុខងារជំនួយ ======= //
function closeProductForm() {
    // 1. បិទ Form Drawer
    $('#drawer-update-product').addClass('hidden');

    // 2. បញ្ជូនអ្នកប្រើត្រឡប់ទៅ Route Index
    window.location.href = '/product'; // ឬហៅ route() បើប្រើ Laravel Blade
}
// ផ្ទុកប្រភេទផលិតផល
function loadCategories() {
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
        error: function() {
            alert('មិនអាចទាញយកប្រភេទផលិតផលបាន');
        }
    });
}

// ទម្រង់ (create/update)
function resetForm(mode, action, method) {
    $('#productForm').attr({
        'data-mode': mode,
        'action': action
    });

    // លុបចោល input hidden ចាស់ (បើមាន)
    if ($('#hidden_method').length > 0) {
        $('#hidden_method').remove();
    }

    // បន្ថែម input hidden ថ្មីសម្រាប់ _method
    $('#productForm').append(`<input type="hidden" name="_method" id="hidden_method" value="${method}">`);

    // កំណត់អត្ថបទប៊ូតុង Submit
    $('#submitBtnText').text(mode === 'create' ? 'Save' : 'Update');

    // បង្ហាញ/លាក់ប៊ូតុង Delete
    $('#deleteProductBtn').toggle(mode === 'update');

    if(mode === 'create') {
        $('#productForm')[0].reset();
        $('#imagePreview').hide();
        $('#product_id').val(''); // Clear hidden input if new
    }
}

// បំពេញទម្រង់ដោយទិន្នន័យ
function fillForm(data) {
    $('#name').val(data.name);
    $('#name_khmer').val(data.name_khmer);
    $('#barcode').val(data.barcode);
    $('#category_id').val(data.category_id);
    $('#qty_on_hand').val(data.qty_on_hand);
    $('#qty_alert').val(data.qty_alert);
    $('#description').val(data.description);
    $('#stocktype').val(data.stocktype);

    // Preview Image
    if (data.image) {
        $('#previewImage').attr('src', data.image);
        $('#imagePreview').removeClass('hidden');
    } else {
        $('#imagePreview').addClass('hidden');
    }
}

// បង្ហាញរូបភាពមុន
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            $('#previewImage').attr('src', e.target.result);
            $('#imagePreview').show();
        }
        reader.readAsDataURL(input.files[0]);
    }
}


//កូដនេះដើរតែពេល update លោត success 2 ដង
// Function submitForm ថ្មី
// function submitForm() {
//     const form = $('#productForm')[0];

//     // ✅ make sure form exists before you do anything
//     if (!form) {
//         console.error('Form not found');
//         return;
//     }

//     // ✅ STEP 1: build formData from form
//     const formData = new FormData(form);

//     // ✅ STEP 2: check if mode is update
//     const mode = $('#productForm').data('mode');

//     // ✅ STEP 3: if update, make sure product_id is included
//     const productId = $('#product_id').val();
//     if (mode === 'update' && productId) {
//         formData.append('product_id', productId);
//     }

//     // ✅ STEP 4: debug
//     console.log('Product ID:', productId);
//     console.log('FormData contents:', [...formData.entries()]);

//     // ✅ STEP 5: ajax
//     $.ajax({
//         url: $('#productForm').attr('action'),
//         type: 'POST',
//         data: formData,
//         processData: false,
//         contentType: false,
//         beforeSend: function () {
//             $('#submitBtn').prop('disabled', true);
//             $('#submitBtnText').text('កំពុងដំណើរការ...');
//             $('#submitBtnSpinner').removeClass('hidden');
//         },
//         complete: function () {
//             $('#submitBtn').prop('disabled', false);
//             $('#submitBtnText').text(mode === 'create' ? 'Save' : 'Update');
//             $('#submitBtnSpinner').addClass('hidden');
//         },
//         success: function (response) {
//         toastr.success(response.message);

//         // កំណត់ flag សម្រាប់បើក drawer ឡើងវិញ
//         const mode = $('#productForm').data('mode');
//         localStorage.setItem('reopenDrawer', 'true');
//         localStorage.setItem('drawerMode', mode);

//         // បើជា create mode សម្អាត form
//         if (mode === 'create') {
//             $('#productForm')[0].reset();
//             $('#imagePreview').hide();
//         }

//         // Reload ទំព័រ
//         location.reload();
//     },

//     });
// }


let isFormSubmitting = false; // អថេរតាមដានស្ថានភាពការដាក់សំណើ

function submitForm() {
    // បើកំពុងដាក់សំណើរួចហើយ មិនដាក់សំណើទៀតទេ
    if (isFormSubmitting) return;
    isFormSubmitting = true;

    const $form = $('#productForm');
    const form = $form[0];

    // ពិនិត្យមើលថាតើរកទម្រង់ឃើញឬទេ
    if (!form) {
        console.error('រកមិនឃើញទម្រង់');
        isFormSubmitting = false;
        return;
    }

    // រៀបចំទិន្នន័យទម្រង់
    const formData = new FormData(form);
    const mode = $form.data('mode');
    const productId = $('#product_id').val();

    // បញ្ចូល product_id តែក្នុងរបៀបកែសម្រួលប៉ុណ្ណោះ
    if (mode === 'update' && productId) {
        formData.append('product_id', productId);
    }

    // ផ្ទុកធាតុ DOM ជាមុន
    const $submitBtn = $('#submitBtn');
    const $submitBtnText = $('#submitBtnText');
    const $submitBtnSpinner = $('#submitBtnSpinner');

    // សំណើ AJAX
    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false, // បិទការផ្ទុកជាមុន
        // beforeSend: function() {
        //     $submitBtn.prop('disabled', true);
        //     $submitBtnText.text(mode === 'create' ? 'creating' : 'updating');
        //     $submitBtnSpinner.removeClass('hidden');
        // },
          success: function (response) {
         toastr.success(response.message);

        // កំណត់ flag សម្រាប់បើក drawer ឡើងវិញ
        const mode = $('#productForm').data('mode');
        localStorage.setItem('reopenDrawer', 'true');
        localStorage.setItem('drawerMode', mode);

        // បើជា create mode សម្អាត form
        if (mode === 'create') {
            $('#productForm')[0].reset();
            $('#imagePreview').hide();
        }

        // Reload ទំព័រ
        location.reload();
    },
        error: function(xhr) {
            toastr.error(xhr.responseJSON?.message || 'កំហុសមិនស្គាល់');
            resetSubmitButton($submitBtn, $submitBtnText, $submitBtnSpinner, mode);
            isFormSubmitting = false;
        }
    });
}

// មុខងារជំនួយសម្រាប់កំណត់ប៊ូតុងឡើងវិញ
function resetSubmitButton($btn, $text, $spinner, mode) {
    $btn.prop('disabled', false);
    $text.text(mode === 'create' ? 'save' : 'update');
    $spinner.addClass('hidden');
}

// ចាប់ព្រឹត្តិការណ៍តែមួយដង
$(document).off('submit', '#productForm').on('submit', '#productForm', function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    submitForm();
});

// បើមាន button click event
$(document).off('click', '#submitBtn').on('click', '#submitBtn', function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    submitForm();
});

//for key enter
document.addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById('submitBtn').click();
    }
});

// មុខងារ deleteProduct ដែលបានកែប្រែ
function deleteProduct() {
    if (!confirm('តើអ្នកពិតជាចង់លុបផលិតផលនេះមែនទេ?')) return;

    // ទាញយក productId ពី hidden input field
    const productId = $('#product_id').val();

    if (!productId) {
        alert('Product ID មិនត្រូវបានគ្រប់គ្រង!');
        return;
    }

    $.ajax({
        url: `/product/${productId}`,  // Make sure URL matches your route for delete
        type: 'DELETE',
        data: {
            _token: "{{ csrf_token() }}"
        },
        success: function(response) {
            alert(response.message);
            location.reload();
        },
        error: function(xhr) {
            alert('កំហុស៖ ' + xhr.responseJSON.message);
        }
    });
}


</script>
