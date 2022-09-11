<div id="create_schedule_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="createScheduleForm" method="POST" action="{{route('teacher_schedule.store')}}" >
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Create Teacher Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                    <div class="form-group break_time_div">
                        <label><input type="checkbox" name="break_time" id="break_time" value="1"> Break Time</label>
                    </div>
                    <div class="form-group teacher_meeting_div">
                        <label><input type="checkbox" name="teacher_meeting" id="teacher_meeting" value="1"> Teacher Meeting</label>
                    </div>
                    <div class="form-group meeting_and_break_time_div">
                        <label><input type="checkbox" name="meeting_and_break_time" id="meeting_and_break_time" value="1"> Both Break Time and Teacher Meeting</label>
                    </div>
                    <div class="form-group off_div">
                        <label><input type="checkbox" name="off" id="off" value="1" > Off</label>
                    </div>
                    <div class="form-group route-fields">
                        <label>Class</label>
                        <select name="class_id" class="form-control select2">
                            <option selected disabled>Select</option>
                            @foreach (App\Models\TeacherClass::all() as $class)
                            <option value="{{$class->id}}">{{$class->name}}</option>
                            @endforeach
                        </select>                        
                    </div>
                    <div class="form-group route-fields">
                        <label>Subject</label>
                        <select name="subject_id" class="form-control select2">
                            <option selected disabled>Select</option>
                            @foreach (App\Models\Subject::all() as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                        </select>          
                    </div>
                    <div class="form-group route-fields">
                        <label>Period</label>
                        <select name="period_id" class="form-control select2">
                            <option selected disabled>Select</option>
                            @foreach (App\Models\Period::all() as $period)
                            <option value="{{$period->id}}">{{$period->start_time.'-'.$period->end_time}}</option>
                            @endforeach
                        </select>       
                    </div>
                    <div class="form-group">
                        <label>Display Order</label>
                        <input type="number" name="display_order" class="form-control" required>
                    </div>
                </div>
                <p id="success_create_message" style="color:green;"></p>     
                <p id="error_create_message" style="color:red;"></p>  
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Create New Teacher Schedule</button>
                </div>
            </div>
        </form>
    </div>
</div>