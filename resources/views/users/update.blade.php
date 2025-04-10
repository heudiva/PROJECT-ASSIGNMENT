<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>



{{-- <script>
    $(document).ready(function() {
        $('#EditUserForm').on('submit', function(e) {
            e.preventDefault();
            var data = $('#UserCreateForm').serialize();

            $.ajax({
                type: "POST",
                url: "{{ route('admin.user.edit') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    data: data
                },
                success: function(response) {
                    // alert("Successfully submitted!");
                    $('#SubmitForm')[0].reset(); // Reset form
                },
                error: function(xhr) {
                    console.error("Error:", xhr.responseText);
                    alert("An error occurred!");
                }
            });
        })



    });
</script> --}}
