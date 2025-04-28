 <!-- Add Product Drawer
<div id="drawer-create-product-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-sm p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
    <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form method="POST" action="{{ route('product.store') }}">
        <x-products.form />

    </form>
</div>
<script>
    $(document).ready(function() {
        // ទាញយកទិន្នន័យតាមរយៈ AJAX
        $.ajax({
            url: "{{ route('categories.get') }}", // URL របស់ Route
            method: "GET",
            dataType: "json",
            success: function(response) {
                // បង្ហាញទិន្នន័យនៅក្នុង Combo box
                var options = '<option value="">Select a category</option>'; // បន្ថែមជម្រើសដំបូង
                $.each(response, function(index, category) {
                    options += '<option value="' + category.id + '">' + category.name + '</option>';
                });
                $('#category_id').html(options); // បញ្ចូលជម្រើសទៅក្នុង Combo box
            },
            error: function(xhr, status, error) {
                console.error("Error fetching categories:", error);
                alert("Failed to load categories. Please try again."); // បង្ហាញសារប្រាប់អ្នកប្រើប្រាស់
            }
        });
    });


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

</script> -->
