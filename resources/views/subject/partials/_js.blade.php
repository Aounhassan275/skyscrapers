<script>
    //Get Variable from Edit Button Of Subject and Show it on Popup Start
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let name = $(this).attr('name');
            let id = $(this).attr('id');
            $('#name').val(name);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('subject.update','')}}' +'/'+id);
        });
    });
    //Get Variable from Edit Button Of Subject and Show it on Popup End
    //Ajax Request For Creating New Subject Start
    $(document).on('submit', '#storeForm', function (event) {
        event.preventDefault();
        $('#success_create_message').html("");
        $('#error_create_message').html("");
        $('.btn').attr('disabled',true);
        $('.btn').text('Please Wait!!!!');
        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $(this).serialize(),
        })
        .done(function (response) {
            $('#success_create_message').html(response.message);
            $('.btn').attr('disabled',false);
            $('.btn').text('Created Successfully!');
            setTimeout(function () {
                location.reload();
            },1000);
        })
        .fail(function (response) {
            $('#error_create_message').html(response.responseJSON.message);
            $('.btn').text('Create New Subject');
            $('.btn').attr('disabled',false);
        }) 
    });
    //Ajax Request For Creating New Subject End
    //Ajax Request For Updating New Subject Start
    $(document).on('submit', '#updateForm', function (event) {
        event.preventDefault();
        $('#success_update_message').html("");
        $('#error_update_message').html("");
        $('.btn').attr('disabled',true);
        $('.btn').text('Please Wait!!!!');
        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $(this).serialize(),
        })
        .done(function (response) {
            $('#success_update_message').html(response.message);
            $('.btn').attr('disabled',false);
            $('.btn').text('Updated Successfully!');
            setTimeout(function () {
                $('#edit_modal').modal('hide');
            },1500);
            setTimeout(function () {
                location.reload();
            },2000);
        })
        .fail(function (response) {
            $('#error_update_message').html(response.responseJSON.message);
            $('.btn').attr('disabled',false);
            $('.btn').text('Update');
        }) 
    });
    //Ajax Request For Updating New Subject End
</script>