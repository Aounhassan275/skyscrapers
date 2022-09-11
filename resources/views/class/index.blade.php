@extends('layout.index')
@section('title')
<title>MANAGE CLASS | TEACHER MANAGEMENT SYSTEM</title>
@endsection
@section('content')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3>Manage Class</h3>
    </div>
</div>
{{-- Creating New Class Code Start --}}
@include('class.partials.form')
{{-- Creating New Class Code End --}}
{{-- Class Table Code Start --}}
<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">View Classes</h5>
        </div>
        <div class="card-body">
            <table class="table" id="datatables-reponsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Class Name</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (App\Models\TeacherClass::all() as $key => $class)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$class->name}}</td>
                        <td>
                            <button data-toggle="modal" data-target="#edit_modal" name="{{$class->name}}"  
                                id="{{$class->id}}" class="edit-btn btn btn-primary">Edit</button>
                        </td>
                        <td>
                            <form onsubmit="$('.btn').attr('disabled',true);" action="{{route('teacher_class.destroy',$class->id)}}" method="POST">
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
{{-- Class Table Code End --}}
{{-- Class Edit Modal/Popup Code Start --}}
@include('class.partials.edit_model')
{{-- Class Edit Modal/Popup Code End --}}
@endsection
@section('scripts')
{{-- Class Page JS Code Start --}}
@include('class.partials._js')
{{-- Class Page JS Code End --}}
{{-- Class Page Making Table Responsive Code Start --}}
<script>
    $(function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });
</script>
{{-- Class Page Making Table Responsive Code End --}}
@endsection