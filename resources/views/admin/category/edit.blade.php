
<!-- Edit Product Drawer -->
<div id="drawer-update-product-default" class="fixed top-0 right-0 z-50 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Update Category</h5>
    <button id="closeUpdateCategory" type="button" data-drawer-dismiss="drawer-update-product-default" aria-controls="drawer-update-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form id="SubmitForm" >
        <div class="space-y-4">
            <x-categories.form />

        </div>
        <div class="bottom-0 left-0 flex justify-center w-full pb-4 mt-4 space-x-4 sm:absolute sm:px-4 sm:mt-0">
            <button type="submit" id="UpdateCategory" class="w-full justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Update
            </button>
            <button type="button" id="DeleteCategoryInUpdate" class="w-full justify-center text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                Delete
            </button>
        </div>
    </form>
</div>


<script>
    $(document).ready(function() {
        $('#SubmitForm').on('submit', function(e) {
            e.preventDefault();  // Prevent default form submission
            var data = $('#SubmitForm').serialize();  // Serialize form data
            
            $.ajax({
                url: "{{ route('admin.category.update') }}",  // Use Laravel route helper
                type: "POST",
                data: {
                "_token":"{{ csrf_token() }}",
                data:data
              },
                success: function(response) {
                    alert("Successfully submitted!");
                    $('#SubmitForm')[0].reset(); // Reset form

                    window.location.href = "{{ route('admin.category.index') }}";
                },
                error: function(xhr) {
                    console.error("Error:", xhr.responseText);
                    alert("An error occurred!");
                }
            });
        });


        $('#SubmitForm').on('click', '#DeleteCategoryInUpdate', function(e) {
          e.preventDefault();  // Prevent default form submission
          var data = $('#SubmitForm').serialize();  // Serialize form data
          
          $.ajax({
              url: "{{ route('admin.category.destroy') }}",  // Use Laravel route helper
              type: "POST",
              data: {
                "_token":"{{ csrf_token() }}",
                data:data
              },
              success: function(response) {
                  window.location.href = "{{ route('admin.category.index') }}";
              },
              error: function(xhr) {
                  console.error("Error:", xhr.responseText);
                  alert("An error occurred!");
              }
          });
      });

    });
</script>
