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
    });
</script>