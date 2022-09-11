<script>
    $(document).ready(function(){
        $('#break_time').change(function () {
            if (this.checked) {
                $('.teacher_meeting_div').hide();
                $('.meeting_and_break_time_div').hide();
                $('.off_div').hide();
                $('.route-fields').hide();
            }else{
                $('.teacher_meeting_div').show();
                $('.meeting_and_break_time_div').show();
                $('.off_div').show();
                $('.route-fields').show();
            }
        });
        $('#teacher_meeting').change(function () {
            if (this.checked) {
                $('.break_time_div').hide();
                $('.meeting_and_break_time_div').hide();
                $('.off_div').hide();
                $('.route-fields').hide();
            }else{
                $('.break_time_div').show();
                $('.meeting_and_break_time_div').show();
                $('.off_div').show();
                $('.route-fields').show();
            }
        });
        $('#meeting_and_break_time').change(function () {
            if (this.checked) {
                $('.break_time_div').hide();
                $('.teacher_meeting_div').hide();
                $('.off_div').hide();
                $('.route-fields').hide();
            }else{
                $('.break_time_div').show();
                $('.teacher_meeting_div').show();
                $('.off_div').show();
                $('.route-fields').show();
            }
        });
        $('#off').change(function () {
            if (this.checked) {
                $('.break_time_div').hide();
                $('.teacher_meeting_div').hide();
                $('.meeting_and_break_time_div').hide();
                $('.route-fields').hide();
            }else{
                $('.break_time_div').show();
                $('.teacher_meeting_div').show();
                $('.meeting_and_break_time_div').show();
                $('.route-fields').show();
            }
        });
        $('#edit_teacher_schedule').click(function () {
            $('#schedule_table').hide();
            $('#editable_schedule_table').show();
            $('#edit_teacher_schedule').hide();
            $('#simple_teacher_schedule').show();
        });
        $('#simple_teacher_schedule').click(function () {
            $('#schedule_table').show();
            $('#editable_schedule_table').hide();
            $('#edit_teacher_schedule').show();
            $('#simple_teacher_schedule').hide();
        });
    });
    //Ajax Request For Creating New Teacher Schedule Start
    $(document).on('submit', '#createScheduleForm', function (event) {
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
            setTimeout(function () {
                location.reload();
            },2000);
        })
        .fail(function (response) {
            $('#error_create_message').html(response.responseJSON.message);
            $('.btn').text('Create New Teacher Schdeule');
            $('.btn').attr('disabled',false);
        }) 
    });
    //Ajax Request For Creating New Teacher Schedule End
</script>