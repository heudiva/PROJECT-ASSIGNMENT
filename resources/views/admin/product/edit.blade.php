<!-- drawer component -->
<div id="drawer-update-product" class="fixed top-0 left-0 z-50 w-full h-screen max-w-3xl p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-update-product-label" aria-hidden="true">
    <form id="product-edit-form">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
        <button type="button" id="closeform" data-drawer-dismiss="drawer-update-product" aria-controls="drawer-update-product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        {{-- input --}}
        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6 ">
            @include("components.products.form")
        </div>
        {{-- end input  --}}
        <div class="grid grid-cols-2 gap-4 mt-6 sm:w-1/2">
            <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update product</button>
            <button type="button" class="text-red-600 inline-flex justify-center items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                Delete
            </button>
        </div>
    </form>
</div>



<script>
    $(document).ready(function() {
        $('#closeform').on('click', function(e){
            e.preventDefault();
            $('#product-create-form')[0].reset();

        });



        $(document).on('click', '#edit-product-btn', function(e) {
            e.preventDefault();
            var id = $(this).val();
            $('#product-edit-form')[0].reset();
            alert('ss');

            $.ajax({
                type: "POST",
                url: "{{ route('admin.product.edit') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id
                },
                success: function(response) {
            // alert('ss');

                    $('#id').val(response.product_id);
                    $('#barcode').val(response.username);
                    $('#name').val(response.name);
                    $('#brand').val(response.brand);
                    // Ensure correct selection of usertype
                    $('#category').val(response.category_id).change();

                    // Alternative method if .val(response.usertype) doesn't work
                    $('#category option').each(function() {
                        if ($(this).val() === response.category_id) {
                            $(this).prop('selected', true);
                        }
                    });
                },
                error: function(xhr){
            alert('dd');

                }
            });

        });

        $('#EditUserForm').on('submit', function(e){
            e.preventDefault();
            var data = $('#EditUserForm').serialize();
            $.ajax({
                type: "POST",
                url: "{{ route('admin.user.update') }}",
                data: {
                    "_token":"{{ csrf_token() }}",
                    data:data
                },
                dataType: "json",
                success: function (response) {
                    if (response.error) {
                        printErrorMsg(response.error);
                    } else {
                        // alert(response.success);
                        $("#close-form").click();
                        location.reload();

                    }
                },
                error: function(xhr) {
                    alert("An error occurred. Please try again.");
                    console.log(xhr.responseText);
                }
            });

            function printErrorMsg(msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'block');
                $.each(msg, function(key, value) {
                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                });
            }
        });

    });
</script>