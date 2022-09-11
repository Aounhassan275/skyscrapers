<nav id="sidebar" class="sidebar">
    <div class="sidebar-content ">
        <a class="sidebar-brand" href="index.html">
        <i class="align-middle" data-feather="box"></i>
        <span class="align-middle">Teacher Management System</span>
        </a>
        {{-- Sidebar Pages Link Code Start --}}
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item ">
                <a href="{{route('dashboard.index')}}"  class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>  
            <li class="sidebar-item ">
                <a href="{{route('teacher_class.index')}}"  class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Manage Class</span>
                </a>
            </li> 
            <li class="sidebar-item ">
                <a href="{{route('subject.index')}}"  class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Manage Subject</span>
                </a>
            </li> 
            <li class="sidebar-item ">
                <a href="{{route('period.index')}}"  class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Manage Period</span>
                </a>
            </li> 
            <li class="sidebar-item ">
                <a href="{{route('teacher.index')}}"  class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Manage Teacher</span>
                </a>
            </li>  
        </ul>
        {{-- Sidebar Pages Link Code End --}}
        <div class="sidebar-bottom d-none d-lg-block">
            <div class="media">
                <img class="rounded-circle mr-3" src="{{asset('assets/img\avatars\avatar.jpg')}}" alt="Chris Wood" width="40" height="40">
                <div class="media-body">
                    <h5 class="mb-1">{{Auth::user()->name}}</h5>
                    <div>
                        <i class="fas fa-circle text-success"></i> Online
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>