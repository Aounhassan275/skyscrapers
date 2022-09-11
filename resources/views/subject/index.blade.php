@extends('layout.index')
@section('title')
<title>MANAGE SUBJECTS | TEACHER MANAGEMENT SYSTEM</title>
@endsection
@section('content')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3>Manage Subjects</h3>
    </div>
</div>
{{-- Creating New Subject Code Start --}}
@include('subject.partials.form')
{{-- Creating New Subject Code End --}}
{{-- Subject Table Code Start --}}
<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">View Subjects</h5>
        </div>
        <div class="card-body">
            <table class="table" id="datatables-reponsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject Name</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (App\Models\Subject::all() as $key => $subject)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$subject->name}}</td>
                        <td>
                            <button data-toggle="modal" data-target="#edit_modal" name="{{$subject->name}}"  
                                id="{{$subject->id}}" class="edit-btn btn btn-primary">Edit</button>
                        </td>
                        <td>
                            <form onsubmit="$('.btn').attr('disabled',true);" action="{{route('subject.destroy',$subject->id)}}" method="POST">
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
{{-- Subject Table Code End --}}
{{-- Subject Edit Modal/Popup Code Start --}}
@include('subject.partials.edit_model')
{{-- Subject Edit Modal/Popup Code End --}}
@endsection
@section('scripts')
{{-- Subject Page JS Code Start --}}
@include('subject.partials._js')
{{-- Subject Page JS Code End --}}
{{-- Subject Page Making Table Responsive Code Start --}}
<script>
    $(function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });
</script>
{{-- Subject Page Making Table Responsive Code End --}}
@endsection