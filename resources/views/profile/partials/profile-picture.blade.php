@php
    $avatarPath = 'uploads/users/' . Auth::user()->avatar;
    $empty = 'uploads/empty-image.jpg';
@endphp
<form action="{{ route('admin.profile.image.store') }}" id="image-upload" method="POST" enctype="multipart/form-data" class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    @csrf
    @method('POST')
    <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
        <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" 
            id="profilePreview"
            src="{{ Auth::user()->avatar && file_exists(public_path($avatarPath)) ? asset($avatarPath) : asset($empty) }}" 
            alt="User Avatar">
            <div>
                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile Picture</h3>
                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                    JPG, GIF, or PNG. Max size of 800K.
                </p>
                <div class="flex items-center space-x-4">
                    <!-- Upload Button -->
                    <label for="inputImage" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-primary-700 hover:bg-primary-800 rounded-lg focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                            <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                        </svg>
                        Upload Picture
                    </label>
                    <!-- Save Button -->
                    <button for="save" type="submit" id="image-submit-btn" class="inline-flex items-center px-5 py-2 text-sm font-medium text-white bg-primary-700 hover:bg-primary-800 rounded-lg focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Save
                    </button>
                    <input id="inputImage" name="image" type="file" class="" accept="image/*" onchange="previewImage(event)" />
                    <span class="text-danger" id="image-input-error"></span>
                    <!-- Delete Button -->
                    {{-- <button type="button" class="py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Delete
                    </button> --}}
                </div>
            </div>
    </div>
</form>
{{-- <script>
    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();
        reader.onload = function () {
            const preview = document.getElementById('profilePreview');
            preview.src = reader.result;
        };
        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }
</script> --}}

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#inputImage').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#profilePreview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }); //preview image

    $(document).ready(function(){
        $('#image-upload').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            alert(formData);
        $('#image-input-error').text('');

        $.ajax({
            type: "POST",
            url: "{{ route('admin.profile.image.store') }}",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (response) {
                alert('success');
            },
            error: function(response) {
                $('#image-input-error').text(response.responseJSON.message);
                alert('error');

            }
        });
        });



    // $('#image-upload').on('submit', function(e){
    //     e.preventDefault();
    //     var formData = new formData(this);
    //     alert('a');
    //     $('#image-input-error').text('');
    //     $.ajax({
    //         type: "POST",
    //         url: "{{ route('admin.profile.image.store') }}",
    //         data: formData,
    //         dataType: "json",
    //         success: function (response) {
    //             if(response){
    //                 this.reset();
    //                 alert('Image has been uploaded successfully');
    //             }
    //         },
    //         error: function(response){
    //             $('#image-input-error').text(response.responseJSON.message);
    //         }
    //     });
    // });



    });
</script>