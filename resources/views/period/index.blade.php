@extends('layout.index')
@section('title')
<title>MANAGE PERIOD | TEACHER MANAGEMENT SYSTEM</title>
@endsection
@section('content')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3>Manage Period</h3>
    </div>
</div>
{{-- Creating New Period Code Start --}}
@include('period.partials.form')
{{-- Creating New Period Code End --}}
{{-- Period Table Code Start --}}
<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">View Periods</h5>
        </div>
        <div class="card-body">
            <table class="table" id="datatables-reponsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Period Name</th>
                        <th>Period Start Time</th>
                        <th>Period End Time</th>
                        <th>Period Duration</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (App\Models\Period::all() as $key => $period)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$period->name}}</td>
                        <td>{{$period->start_time}}</td>
                        <td>{{$period->end_time}}</td>
                        <td>{{$period->duration}}</td>
                        <td>
                            <button data-toggle="modal" data-target="#edit_modal" name="{{$period->name}}"  
                                start_time="{{$period->start_time}}" end_time="{{$period->end_time}}" duration="{{$period->duration}}"  
                                id="{{$period->id}}" class="edit-btn btn btn-primary">Edit</button>
                        </td>
                        <td>
                            <form onsubmit="$('.btn').attr('disabled',true);" action="{{route('period.destroy',$period->id)}}" method="POST">
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
{{-- Period Table Code End --}}
{{-- Period Edit Modal/Popup Code Start --}}
@include('period.partials.edit_model')
{{-- Period Edit Modal/Popup Code End --}}
@endsection
@section('scripts')
{{-- Period Page JS Code Start --}}
@include('period.partials._js')
{{-- Period Page JS Code End --}}
{{-- Period Page Making Table Responsive Code Start --}}
<script>
    $(function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });
</script>
{{-- Period Page Making Table Responsive Code End --}}
@endsection