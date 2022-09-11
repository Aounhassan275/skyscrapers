@extends('layout.index')
@section('title')
<title>UPDATE TEACHER SCHEDULE | TEACHER MANAGEMENT SYSTEM</title>
@endsection
@section('css')
    <style>
        #none_display{
            display :none;
        }
    </style>
@endsection
@section('content')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3>Update {{$schedule->teacher->name}} Schedule</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Update {{$schedule->teacher->name}} Schedule</h5>
            </div>
            <div class="card-body">
                <form id="storeForm" method="POST" action="{{route('teacher_schedule.update',$schedule->id)}}" >
                   @method('PUT')
                   @csrf
                   <div class="row">
                        <div class="form-group col-md-6 break_time_div" @if($schedule->hasHide() && !$schedule->break_time) id="none_display" @endif>
                            <label><input type="checkbox"  @if($schedule->break_time) checked @endif name="break_time" id="break_time" value="1"> Break Time</label>
                        </div>
                        <div class="form-group col-md-6 teacher_meeting_div" @if($schedule->hasHide() && !$schedule->teacher_meeting) id="none_display" @endif>
                            <label><input type="checkbox"  @if($schedule->teacher_meeting) checked @endif name="teacher_meeting" id="teacher_meeting" value="1"> Teacher Meeting</label>
                        </div>
                        <div class="form-group col-md-6 meeting_and_break_time_div" @if($schedule->hasHide() && !$schedule->meeting_and_break_time) id="none_display" @endif>
                            <label><input type="checkbox"  @if($schedule->meeting_and_break_time) checked @endif name="meeting_and_break_time" id="meeting_and_break_time" value="1"> Both Break Time and Teacher Meeting</label>
                        </div>
                        <div class="form-group col-md-6 off_div" @if($schedule->hasHide() && !$schedule->off) id="none_display" @endif>
                            <label><input type="checkbox" @if($schedule->off) checked @endif name="off" id="off" value="1" > Off</label>
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-md-6 route-fields" @if($schedule->hasHide()) id="none_display" @endif>
                            <label>Class</label>
                            <select name="class_id" class="form-control select2">
                                <option selected disabled>Select</option>
                                @foreach (App\Models\TeacherClass::all() as $class)
                                <option @if($schedule->class_id == $class->id) selected @endif value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>                        
                        </div>
                        <div class="form-group col-md-6 route-fields" @if($schedule->hasHide()) id="none_display" @endif>
                            <label>Subject</label>
                            <select name="subject_id" class="form-control select2">
                                <option selected disabled>Select</option>
                                @foreach (App\Models\Subject::all() as $subject)
                                <option @if($schedule->subject_id == $subject->id) selected @endif  value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>          
                        </div>
                        <div class="form-group col-md-6 route-fields" @if($schedule->hasHide()) id="none_display" @endif>
                            <label>Period</label>
                            <select name="period_id" class="form-control select2">
                                <option selected disabled>Select</option>
                                @foreach (App\Models\Period::all() as $period)
                                <option @if($schedule->period_id == $period->id) selected @endif   value="{{$period->id}}">{{$period->start_time.'-'.$period->end_time}}</option>
                                @endforeach
                            </select>       
                        </div>
                        <div class="form-group col-md-6">
                            <label>Display Order</label>
                            <input type="number" name="display_order" value="{{@$schedule->display_order}}" class="form-control" required>
                        </div>
                    </div> 
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Teacher Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('teacher_schedule.partials._js')
@endsection