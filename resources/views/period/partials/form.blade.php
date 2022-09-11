<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Period</h5>
            </div>
            <div class="card-body">
                <form id="storeForm" method="POST" action="{{route('period.store')}}" >
                   @csrf
                   <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Period Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Period Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Period Start Time</label>
                            <input type="text" name="start_time" class="form-control" placeholder="Enter Period Start Time" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Period End Time</label>
                            <input type="text" name="end_time" class="form-control" placeholder="Enter Period End Time" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Period Duration</label>
                            <input type="text" name="duration" class="form-control" placeholder="Enter Period Duration" required>
                        </div>
                    </div> 
                    <p id="success_create_message" style="color:green;"></p>     
                    <p id="error_create_message" style="color:red;"></p>     
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create New Period</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>