@extends('layout.index')
@section('title')
<title>MANAGE TEACHERS | TEACHER MANAGEMENT SYSTEM</title>
@endsection
@section('content')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3>Manage Teachers</h3>
    </div>
</div>
{{-- Creating New Teacher Code Start --}}
@include('teacher.partials.form')
{{-- Creating New Teacher Code End --}}
{{-- Teacher Table Code Start --}}
<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">View Teachers</h5>
        </div>
        <div class="card-body">
            <table class="table" id="datatables-reponsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Teacher Name</th>
                        <th>Teacher Qualification</th>
                        <th>Teacher Timing</th>
                        <th>Teacher Schedule</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (App\Models\Teacher::all() as $key => $teacher)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->qualification}}</td>
                        <td>{{$teacher->timing}}</td>
                        <td>
                            <a href="{{route('teacher.show',$teacher->id)}}" target="_blank" class="btn btn-info">
                                Schedule
                            </a>
                        </td>
                        <td>
                            <button data-toggle="modal" data-target="#edit_modal" name="{{$teacher->name}}" 
                                timing="{{$teacher->timing}}" qualification="{{$teacher->qualification}}"  id="{{$teacher->id}}" class="edit-btn btn btn-primary">Edit</button>
                        </td>
                        <td>
                            <form onsubmit="$('.btn').attr('disabled',true);" action="{{route('teacher.destroy',$teacher->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                            <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- Teacher Table Code End --}}
{{-- Teacher Edit Modal/Popup Code Start --}}
@include('teacher.partials.edit_model')
{{-- Teacher Edit Modal/Popup Code End --}}
@endsection
@section('scripts')
{{-- Teacher Page JS Code Start --}}
@include('teacher.partials._js')
{{-- Teacher Page JS Code End --}}
{{-- Teacher Page Making Table Responsive Code Start --}}
<script>
    $(function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });
</script>
{{-- Teacher Page Making Table Responsive Code End --}}
@endsection