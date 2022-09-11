@extends('layout.index')
@section('title')
<title>DASHBOARD | TEACHER MANAGEMENT SYSTEM</title>
@endsection
@section('content')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
        <h3>Dashbard!</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-xl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('teacher_class.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Classes</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-12">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\TeacherClass::count()}}
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-sm-6">
                    <a href="{{route('subject.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Subject</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-12">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\Subject::count()}}
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-sm-6">
                    <a href="{{route('period.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Period</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-12">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\Period::count()}}
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-sm-6">
                    <a href="{{route('teacher.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Teachers</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-12">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\Teacher::count()}}
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection