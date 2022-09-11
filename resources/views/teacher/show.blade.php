@extends('layout.index')
@section('title')
<title>{{@$teacher->name}} Detail | TEACHER MANAGEMENT SYSTEM</title>
@endsection
@section('css')
    <style>
        .grey_color{
            background-color: grey;
            color: white;
        }
    </style>
@endsection
@section('content')
{{-- Teacher Schedule Table Code Start --}}
<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Teacher Detail</h5>
            <div class="text-right">
                <a href="#create_schedule_modal" data-toggle="modal" data-target="#create_schedule_modal"  class="btn btn-primary text-right" >Create New Schedule</a>
                <button id="edit_teacher_schedule"  class="btn btn-primary text-right" >Edit Teacher Schedule</a>
                <button id="simple_teacher_schedule" style="display:none;" class="btn btn-primary text-right" >Show Simple Teacher Schedule</a>
            </div>
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <p><strong>Name : </strong>{{@$teacher->name}}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Qualification : </strong>{{@$teacher->qualification}}</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Timing : </strong>{{@$teacher->timing}}</p>
                </div>
            </div>
            <h5>Schedule</h5>
            @include('teacher.partials.schedule_table')
            {{-- Teacher Schedule Edit Table Code Start --}}
            @include('teacher.partials.editable_schedule_table')
            {{-- Teacher Schedule Edit Table Code End --}}
        </div>
    </div>
</div>
{{-- Teacher Schedule Table Code End --}}
@include('teacher.partials.create_schedule_popup')
@endsection
@section('scripts')
<script>
    $(function() {
       // Select2
       $(".select2").each(function() {
           $(this)
               .wrap("<div class=\"position-relative\"></div>")
               .select2({
                   placeholder: "Select",
                   dropdownParent: $(this).parent()
               });
       })
   });
</script>
{{-- Teacher Page JS Code Start --}}
@include('teacher.partials.show_page_js')
{{-- Teacher Page JS Code End --}}
@endsection
