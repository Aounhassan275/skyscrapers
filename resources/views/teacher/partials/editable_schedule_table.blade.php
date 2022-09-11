
<table class="table" id="editable_schedule_table" style="display:none;">
    <thead>
        <tr>
            <th class="text-center">Class</th>
            <th class="text-center">Subject</th>
            <th class="text-center">Timing</th>
            <th class="text-center">Duration</th>
            <th class="text-center">Action</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teacher_schedules as $key => $schedule)
        <tr>
            @if($schedule->break_time)
            <td colspan="4" class="text-center grey_color">Break Time</td>
            @elseif($schedule->teacher_meeting)
            <td colspan="4" class="text-center grey_color">Teacher Meeting</td>
            @elseif($schedule->meeting_and_break_time)
            <td colspan="4" class="text-center grey_color">Break Time & Teacher Meeting</td>
            @elseif($schedule->off)
            <td colspan="4" class="text-center grey_color">Off</td>
            @else
            <td class="text-center">{{$schedule->class->name}}</td>
            <td class="text-center">{{$schedule->subject->name}}</td>
            <td class="text-center">{{$schedule->period->start_time.' to '.$schedule->period->end_time}}</td>
            <td class="text-center">{{$schedule->period->duration}}</td>
            @endif
            <td>
                <a href="{{route('teacher_schedule.edit',$schedule->id)}}" class="btn btn-primary">Edit</button>
            </td>
            <td>
                <form onsubmit="$('.btn').attr('disabled',true);" action="{{route('teacher_schedule.destroy',$schedule->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @if(count($teacher_schedules) == 0)
        <tr>
            <td colspan="4" class="text-center">No Schedule Found</td>
        </tr>
        @endif
    </tbody>
</table>