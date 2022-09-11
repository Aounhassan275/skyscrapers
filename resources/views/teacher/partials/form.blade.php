<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Teacher</h5>
            </div>
            <div class="card-body">
                <form id="storeForm" method="POST" action="{{route('teacher.store')}}" >
                   @csrf
                   <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Teacher Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Teacher Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Teacher Qualification</label>
                            <input type="text" name="qualification" class="form-control" placeholder="Enter Teacher Qualification">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Teacher Timing</label>
                            <input type="text" name="timing" class="form-control" placeholder="E.g. 08:30-12:30">
                        </div>
                    </div> 
                    <p id="success_create_message" style="color:green;"></p>     
                    <p id="error_create_message" style="color:red;"></p>     
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create New Teacher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>